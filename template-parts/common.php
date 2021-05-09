<!-- slideshow -->
<main class="main-visual main-visual-nothome">
	<div class="full slider">
		<?php
		$slideshows = rwmb_meta( 'common_slideshow',array('size' => 'original') );
		$slideshowsNumber = count($slideshows);
		$i = 1;

		foreach ( $slideshows as $slideshow ) {
		    $url = $slideshow['url'];

		    if($i <= $slideshowsNumber) {
		    	echo '<div class="img0'.$i.'">
		    			<img src="'.$url.'">
		    		  </div>';
		    }

		    $i++;
		}
		?>

	</div>
</main>

<!-- Main Section -->
<section class="main-section">
	<h2><?php the_title(); ?></h2>
	<h3><?php the_field( 'subtitle' ); ?></h3>
	<p><?php the_content(); ?></p>
</section>