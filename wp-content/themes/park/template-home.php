<?php /* Template Name: Home Template */ get_header(); ?>

	<main role="main" class="container">
		
		<!-- section -->
		<section class="row">

		<div class="col-md-12">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

	

		

		<?php endif; ?>
    </div>
		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
