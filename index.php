<?php get_header(); ?>

<?php if (have_posts()): ?>
    <div class="row">
        <div class="col-xs-12 col-lg-8 col-lg-offset-2">
        <?php
        	acf_form(array(
        		'post_id'		=> 'new_post',
        		'post_title'    => true,
        		'post_content'	=> true,
        		'new_post'		=> array(
        			'post_type'		=> 'event',
        			'post_status'	=> 'publish'
        		)
        	));
    	?>
        </div>
        <?php while (have_posts()): the_post();
            get_template_part('content', 'post');
        endwhile; ?>
    </div>
<?php endif; ?>

<?php get_footer(); ?>
