<?php
/**
 * The Template for displaying all single posts.
 *
 * @package ThinkUpThemes
 */

get_header(); ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>

				<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'melos' ), 'after'  => '</div>', ) ); ?>

				<?php thinkup_input_nav( 'nav-below' ); ?>

				<?php /* Add comments */ thinkup_input_allowcomments(); ?>

				<!-- カスタムフィードの表示 ワードプレスループの中に -->
					<h1 class="post-title">
					<?php the_title(); ?>
					</h1>

					<?php
					$tags = get_tags();
					foreach( $tags as $tag) { 
					echo '<span>',$tag->name,'</span>';
					}
					?>

					<?php $large=get_field('photo'); ?>
					<p><img src="<?=$large['sizes']['medium_large'] ?>" alt=""></p>
					<p><?php echo get_field('hachusha') ?></p>
					<p><?php echo get_field('sekobasho') ?></p>
					<p><?php echo get_field('kansei') ?></p>
					<p><?php echo get_field('goaiyo') ?></p>
					<p><?php echo get_field('gijutsu') ?></p>

			<?php endwhile; wp_reset_postdata(); ?>

<?php get_footer(); ?>