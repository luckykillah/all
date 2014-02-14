<?php get_header(); ?>
		<div id="main" role="main" class="<?php brunelleschi_content_class(); ?>">
			<h1 class="page-title"><?php single_cat_title( );?></h1>
			<?php
				$category_description = category_description();
				if ( ! empty( $category_description ) )
					echo '<div class="archive-meta">' . $category_description . '</div>';
			?>
<?php 
    $cat = get_category( get_query_var( 'cat' ) );
	$cat_id = $cat->cat_ID;
	$cat_name = $cat->name;
	//print_r($cat);
?>		
<!--
<?php if ( ! have_posts() ) : ?>
	<div id="post-0" class="post error404 not-found">
		<h1 class="entry-title">Whoops.</h1>
		<div class="entry-content"><p>No posts found.</p></div>
	</div>
<?php endif; ?>
-->
<?php

	$cat_args = array(
		'orderby' => 'name',
		'order' => 'ASC',
		'parent' => $cat_id
		);
	
	$categories = get_categories($cat_args);
	
	foreach($categories as $category) { 
		$args = array(
			'showposts' => -1,
			'cat' => $category->cat_ID,
			'caller_get_posts'=> 1,
			'post_type' => array(
					'post',
					'goal'
				)
		);
	
		$posts = get_posts($args);

		if ($posts) { ?>
			<section class="sub-cat <?= $category->name?>">
			<?php echo '<h2 class="cat-title"><em>'.$cat_name.'</em> '.$category->name.'</h2> ';
			
			foreach($posts as $post) { setup_postdata($post); ?>
	
				<!-- EACH POST -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header>
						<!-- TITLE -->
						<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	
						<!-- CATEGORY 
						<?php if ( count( get_the_category() ) ) : ?>
						<span class="cat-links">
						<?php printf( __( '%2$s | ', 'brunelleschi' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?>
						</span>
						<?php endif; ?>
						-->
							
						<!-- TAGS -->
						<?php $tags_list = get_the_tag_list( '', ', ' ); if ( $tags_list ): ?>
						<span class="tag-links">
						<?php printf( __( '%2$s | ', 'brunelleschi' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?>
						</span>
						<?php endif; ?>
	
						<!-- POSTED INFO -->
						<a href="<?php comments_link(); ?>">Update status</a>
						<?php
						/*
						printf( __('%2$s', 'brunelleschi' ),
							'meta-prep meta-prep-author',
							sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span class="entry-date">%3$s</span></a>',
								get_permalink(),
								esc_attr( get_the_time() ),
								get_the_date()
							),
							sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',
								get_author_posts_url( get_the_author_meta( 'ID' ) ),
								sprintf( esc_attr__( 'View all posts by %s', 'brunelleschi' ), get_the_author() ),
								get_the_author()
							)
						);
						*/
						edit_post_link( __( 'Edit Goal', 'brunelleschi' ), ' <span class="edit-link"> | ', '</span>' );
						?>
					</header>
	
					<!-- CONTENT -->
					<div class="entry-summary">
						<?php //the_content(); ?>
						<?php
							$args = array(
								'status' => 'approve',
								'number' => '1',
								'post_id' => get_the_ID()
							);
							$comments = get_comments($args);
							foreach($comments as $comment) : ?>
								<div class="goal-current-status">
									<p class="comment-bubble"><em><?php echo date('n/j', strtotime($comment->comment_date)); ?></em>: 
									<?php echo $comment->comment_content; ?></p>
									<p><em><a href="<?php comments_link(); ?>">read older updates &raquo;</a></em></p>
								</div>
								
							<?php endforeach; ?>
					</div>
				</article><!-- #post-## -->
				<br class="clear" />
		<?php } ?>
			</section> 
		<?php } 
	}
 ?>



</div><!-- #main -->
<?php get_footer(); ?>