<!-- header -->
<?php get_header(); ?>


<!-- common -->
<div class="not-home-temp single-news-temp">
	<section class="main-section">
		<h2><?php the_title(); ?></h2>
		<h3><?php the_field( 'common_subtitle' ); ?></h3>
		<time><?php the_time('F jS, Y'); ?></time>
		<p><?php the_content(); ?></p>
	</section>
</div>

<div class="single-news-post-link">
	<div><?php previous_post_link('%link', '<< Previous'); ?></div>
	<div><?php next_post_link('%link', 'Next >>'); ?></div>
</div>



<!-- footer -->
<?php get_footer(); ?>