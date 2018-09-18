<?php
/**
 * The template for displaying pages
 *
 * @package WordPress
 * @subpackage grace-portfolio
 */

get_header(); ?>

<section class="default-page">
	<div class="main-content">
		<?php while ( have_posts() ) : the_post(); ?>
			
			<article class="post-entry">
				<?php the_content(); ?>
			</article>
		<?php endwhile; ?>
	</div>

</section>

<?php get_footer(); ?>
