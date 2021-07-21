<?php
/**
 * The template for displaying Archive pages.
 *
 * @package ThinkUpThemes
 */
get_header(); ?>


<?php
/* （ステップ1）データの取得 */
$query = new WP_Query(
	array(
			'post_type' => 'jiseki',
			'posts_per_page' => 5,
	)
);
/* （ステップ2）データの表示 */
if ( $query->have_posts() ) : ?>
    <div>
        <?php while ( $query->have_posts() ) : $query->the_post();?>
            <?php if ( has_post_thumbnail() ) : ?>
                <p><?php the_post_thumbnail(); ?></p>
            <?php endif; ?>  
            <p><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></p>
            <p><?php the_date(); ?></p>
        <?php endwhile; ?>
    </div>
<?php endif; wp_reset_postdata(); ?>


<?php get_footer() ?>
