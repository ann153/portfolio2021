<?php
/*
Template Name: Gallery
*/
?>

<!-- header -->
<?php get_header(); ?>

<!-- content -->
<div class="not-home-temp">
	<?php get_template_part('template-parts/common-noslideshow'); ?>
</div>


<!-- filter button -->
<ul id="filterBtnList">
	<li id="filterAll" class="all is_active">ALL</li>

	<?php $slideshows = rwmb_meta( 'common_slideshow', array()); ?>
	<?php foreach ( $slideshows as $slideshow ) : ?>
		<li id="filterBlue" class="<?php echo $slideshow['caption'] ?>">
			<span class="uppercase"><?php echo $slideshow['caption'] ?></span>
		</li>
	<?php endforeach; ?>

</ul>



<!-- Gallery -->
<ul class="g_list">
	<?php $slideshows = rwmb_meta( 'common_slideshow',array('size' => 'original') ); ?>
	<?php foreach ( $slideshows as $slideshow ) : ?>
		<li class="box <?php echo $slideshow['caption'] ?>">
			<a href="<?php echo $slideshow['url'] ?>" data-lightbox="group01">
			<img src="<?php echo $slideshow['url'] ?>">
			</a>
		</li>
	<?php endforeach; ?>
</ul>










<!-- footer -->
<?php get_footer(); ?>