<?php

add_theme_support( 'post-thumbnails' ); 

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="section">',
		'after_title' => '</h4>',
	));

function my_custom_comments($comment, $args, $depth) { 
   $GLOBALS['comment'] = $comment; ?>
   <div <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
   <div class="line">
   		<span class="left mrs wrap-avatar">
   			<?php echo get_avatar( $comment, 64 ); ?>
   		</span>
   		<div class="mod">
   			<p class="comment_author">
               <?php comment_author(); ?> 
   			   <span class="right muted"><i class="fa fa-clock-o"></i> <?php comment_date(); ?></span>
            </p>	
   			<div class="comment-body">
   				<?php comment_text(); ?>
   			</div>
   		</div>
   	</div>
   <?php if ($comment->comment_approved == '0') : ?>
      <em><?php _e('Your comment is awaiting moderation.') ?></em>
   <?php endif; ?>
   </div>
<?php } ?>