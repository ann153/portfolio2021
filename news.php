<?php
/*
Template Name: News
*/
?>

<!-- header -->
<?php get_header(); ?>


<!-- common -->
<div class="not-home-temp">
  <?php get_template_part('template-parts/common-noslideshow'); ?>
</div>



<!-- News -->
<div class="news-temp">
<section class="news">
	<div class="news-wrapper">
		<div class="each-news-wrapper">

<!-- <?php query_posts('post_type=post&paged='.$paged); ?> -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


			<div class="each-news">
				<?php the_post_thumbnail(); ?>
				<div class="e-n-textarea">
					<h3><?php the_title(); ?></h3>
					<?php the_excerpt(); ?>
					<time><?php the_time('F jS, Y'); ?></time>
					<p class="read--more"><a href="<?php the_permalink(); ?>">Read More <i class="fas fa-angle-right"></i></a></p>
				</div>
			</div>


<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>

		</div>
	</div>

	<button class="news-button n-view-more">
		View More
	</button>

</section>
</div>


<!-- footer -->
<?php get_footer(); ?>