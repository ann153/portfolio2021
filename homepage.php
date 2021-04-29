<?php
/*
Template Name: Home
*/
?>

<!-- header -->
<?php get_header(); ?>


<!-- common -->
<?php get_template_part('template-parts/common'); ?>





<!-- ==========================Features============================ -->
<section class="features">
<!-- title -->
	<h2><?php the_field( 'features_title' ); ?></h2>

<!-- features images -->
<div class="f-wrapper">

<?php $features = get_field('select_features'); ?>

<?php foreach($features as $feature) : ?>

	<?php $thumb = get_the_post_thumbnail( $feature->ID, 'full' ); ?>
	<div class="container">
		<span><?php echo $feature->post_title; ?></span>
		<a href="<?php echo get_the_permalink($feature->ID); ?>">
			<?php echo $thumb; ?>
		</a>
		<div class="darken"></div>
	</div>

<?php endforeach; ?>


	</div>
</section>


<!-- ==========================News============================ -->
<section class="news">
	<h2><?php the_field( 'news_title' ); ?></h2>
	<div class="news-wrapper">
		<div class="each-news-wrapper">

			<?php query_posts('posts_per_page=3'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div class="each-news">
					<?php the_post_thumbnail('full'); ?>
					<time><?php the_time('F jS, Y'); ?></time>
					<h3><?php the_title(); ?></h3>
					<p class="read-more"><a href="<?php the_permalink() ?>">Read More</a></p>
				</div>

			<?php endwhile; ?>
			<?php endif; ?>

		</div>
	</div>

	<button class="news-button" onclick="location.href='/news'">
		View All News
	</button>
</section>



<!-- footer -->
<?php get_footer(); ?>