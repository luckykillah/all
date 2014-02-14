<?php function mytheme_comments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class('clearfix') ?> id="comment-<?php comment_ID() ?>">

         <?php echo get_avatar($comment, 48); ?>

      <?php if ($comment->comment_approved == '0') : ?>
         <em><?php _e('Your comment is awaiting moderation.') ?></em>
      <?php endif; ?>

      <p class="comment-details"><?php if (1==$comment->user_id) echo 'Admin comment by '; else if ($comment->user_id) echo 'Author comment by '; ?><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><em><?php comment_author_link() ?></em></a> &middot; <?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></p>

            		<div class="comment-text">

                    		<?php comment_text() ?>

            		</div>

		<?php comment_reply_link(array_merge($args, array(
					'depth' => $depth,
					'before' => '<p class="comment-reply">', 
					'after' => '</p>'
				)));
		?>
<?php } ?>
<?php

// Widget Settings

if ( function_exists('register_sidebar') )

        {

        register_sidebar(array(

        'name' => 'sidebar_right',

        'before_widget' => '<div id="%1$s" class="widget">',

        'after_widget' => '</div>',

        'before_title' => '<h4><a href="#" title="Toggle" class="hide_widget">',

        'after_title' => '</a></h4>',

        ));



        register_sidebar(array(

        'name' => 'sidebar_bottom_left',

        'before_widget' => '<div id="%1$s" class="widget">',

        'after_widget' => '</div>',

        'before_title' => '<h4><a href="#" title="Toggle" class="hide_widget">',

        'after_title' => '</a></h4>',

        ));

        register_sidebar(array(

        'name' => 'sidebar_bottom_middle',

        'before_widget' => '<div id="%1$s" class="widget">',

        'after_widget' => '</div>',

        'before_title' => '<h4><a href="#" title="Toggle" class="hide_widget">',

        'after_title' => '</a></h4>',

        ));

        register_sidebar(array(

        'name' => 'sidebar_bottom_right',

        'before_widget' => '<div id="%1$s" class="widget">',

        'after_widget' => '</div>',

        'before_title' => '<h4><a href="#" title="Toggle" class="hide_widget">',

        'after_title' => '</a></h4>',

        ));

}



?>
<?php
// Get Custom Field Template Values
function getCustomField($theField) {
	global $post;
	$block = get_post_meta($post->ID, $theField);
	if($block){
		foreach(($block) as $blocks) {
			echo $blocks;
		}
	}
}
?>