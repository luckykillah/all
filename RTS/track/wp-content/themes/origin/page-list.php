<?php
/**
 *  Template Name: Lists
 *
 * Full width page template with no sidebar.
 *
 * @package Origin
 * @subpackage Template
 */

get_header(); // Loads the header.php template. 
?>

	<?php do_atomic( 'before_content' ); // origin_before_content ?>

	<div id="content">

		<div class="hfeed lists">
		<?php 	$lists[0]['id'] =  '4'; $lists[0]['title'] = 'Bucket List 2012';
			$lists[1]['id'] = '13'; $lists[1]['title'] = 'Movies';
			$lists[2]['id'] = '10'; $lists[2]['title'] = 'Books';
			$lists[3]['id'] = '14'; $lists[3]['title'] = 'Places'; ?> 			

		<?php for ($i = 0; $i < 4; $i++){ ?>

			<?php query_posts( array('cat'=> $lists[$i]['id'], 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'asc' ) ); if ( have_posts() ) : ?>
			<article class="list">	
				<h2><?= $lists[$i]['title'] ?> </h2>
				<ul>
				<?php while ( have_posts() ) : the_post(); ?>
					<li id="post-<?php the_ID(); ?>" class="<?php if( has_category('12')): ?>done<?php endif; ?>">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 
						<?php echo apply_atomic_shortcode( 'entry_meta', '(<span class="entry-meta">[entry-edit-link]</span>)' ); ?>
						<!--<em><?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'origin' ) ); ?></em>-->
					</li><!-- .hentry -->
				<?php endwhile; ?>
				</ul>
			</article>
			<?php endif; wp_reset_query(); }; ?>
	
		</div><!-- .hfeed -->

	</div><!-- #content -->

<?php get_footer(); // Loads the footer.php template. ?>