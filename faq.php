<?php
/*
Template Name: FAQ
*/
?>

<!-- header -->
<?php get_header(); ?>


<!-- common -->
<div class="not-home-temp">
	<?php get_template_part('template-parts/common-noslideshow'); ?>
</div>

<!-- FAQ -->
<section class="faq-wrapper">
	<?php echo do_shortcode('[ultimate-faqs]'); ?>
</section>


<!-- footer -->
<?php get_footer(); ?>