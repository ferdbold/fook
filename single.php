<?php acf_form_head(); ?>
<?php get_header(); ?>

<?php if (have_posts()): ?>
    <div class="row">
        <?php while (have_posts()): the_post();
            get_template_part('content', 'post');
        endwhile; ?>
        
        <h2 class="col-xs-12 col-lg-8 col-lg-offset-2">Commentaires</h2>
        <?php comments_template(); ?>
    </div>
<?php endif; ?>
        
<?php get_footer(); ?>
