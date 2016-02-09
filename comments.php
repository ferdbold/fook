<?php 
$comments = get_comments(array(
    'post_id' => get_the_ID()
));

if (!empty($comments)) { ?>
    <div class="col-xs-12 col-lg-8 col-lg-offset-2">
        <?php foreach ($comments as $comment) { ?>
            <div class="panel panel-info fook-post-comment">
                <div class="panel-heading">
                    <?php printf('%s said...', $comment->comment_author); ?>
                </div>
                <div class="panel-body">
                    <?php echo $comment->comment_content; ?>
                </div>
            </div>
        <?php } ?>
    </div>
<?php } ?>
