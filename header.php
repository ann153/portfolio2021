<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<!-- 「設定」→「一般設定」サイトのタイトルを表示。 -->
	<title><?php bloginfo('name'); wp_title('|', true, 'left'); ?></title>

	<!-- description -->
	<?php

	$description = $post->post_content;
	$description = str_replace(array("\r\n","\r","\n","&nbsp;"),'',$description);
	$description = wp_strip_all_tags($description);
	$description = preg_replace('/\[.*\]/','',$description);
	$description = mb_strimwidth($description,0,220,"...");

	?>
	<meta name="description" content="<?php echo $description; ?>">


	<!-- css -->
	<!-- リセットCSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style/reset.css">
	<!-- Slick -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style/slick-theme.css">
	<!-- Swiper -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/swiper-bundle.min.css">
	<!-- lightbox -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style/lightbox.css">
	<!-- Drawer -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/css/drawer.min.css">
	<!-- original css -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/style.css">

	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

	<!-- JS -->
	<!-- Slick -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
	<!-- Swiper -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/swiper-bundle.min.js"></script>
	<!-- fontawesome -->
	<script src="https://kit.fontawesome.com/d34c537515.js" crossorigin="anonymous"></script>
	<!-- lightbox -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/lightbox.js"></script>
	<!-- drawer -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
	<!-- fixed footer -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/footerFixed.js"></script>
	<!-- original JS -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>

	<!-- list.js -->
	<!-- <script src="<?php echo get_template_directory_uri(); ?>/js/list.min.js" type="text/javascript"></script> -->

	<!-- ヘッダー必須wpコード -->
	<?php wp_head(); ?>
</head>

<body>
	<!-- <div class="all-wrapper"> -->
	<header class="header">
		<div class="header-wrapper">
			<div class="header-left">
				<a href="<?php echo home_url() ?>">
					<?php
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
						echo '<img src="'.$image[0].'">';
					 ?>
				</a>
			</div>
			<div class="header-right">
				<div class="header-right-wrapper">
					<nav class="header-sub-menu">
						<?php wp_nav_menu( array( 'theme_location' => 'sub-header' )); ?>

					</nav>
					<nav class="header-main-menu">
						<?php wp_nav_menu( array( 'theme_location' => 'main-header' )); ?>
					</nav>
				</div>
			</div>

		</div>
	</header>

	<!-- Header Mobile -->
	<div class="mobile-fixed-header none">
		<div class="header-left">
<!-- 			<a href="index.html">
				<img src="img/kisspng-twice-logo-k-pop-jyp-entertainment-tt-album-cover-5ae8f79d4c6882.054436761525217181313.png">
			</a> -->
				<a href="<?php echo home_url() ?>">
					<?php
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
						echo '<img src="'.$image[0].'">';
					 ?>
				</a>
		</div>
		<div class="drawer drawer--left" none>
			<header role="banner">
				<button type="button" class="drawer-toggle drawer-hamburger">
					<span class="sr-only">toggle navigation</span>
					<span class="drawer-hamburger-icon"></span>
				</button>
				<nav class="drawer-nav" role="navigation">

					<div class="header-left">
<!-- 						<a href="/">
							<img src="img/kisspng-twice-logo-k-pop-jyp-entertainment-tt-album-cover-5ae8f79d4c6882.054436761525217181313.png">
						</a> -->
				<a href="<?php echo home_url() ?>">
					<?php
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
						echo '<img src="'.$image[0].'">';
					 ?>
				</a>
					</div>

					<ul class="drawer-menu">
						<li><a class="drawer-brand" href="/works">WORKS</a></li>
						<li><a class="drawer-brand" href="/skill">SKILL</a></li>
						<li><a class="drawer-brand" href="/hobby">HOBBY</a></li>
						<li><a class="drawer-brand" href="/gallery">GALLERY</a></li>
						<li ><a class="drawer-brand" href="/news">NEWS</a></li>
						<li><a class="drawer-brand" href="/faq">FAQ</a></li>
						<li><a class="drawer-brand" href="/contact">CONTACT</a></li>
					</ul>
				</nav>
			</header>
		</div>
	</div>











