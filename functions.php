<?php
// 外観＞メニュー＞画面下部でチェックするメニュー位置
register_nav_menus(
	array(
	 'main-header' => 'Main Header',
	 'sub-header' => 'Sub Header',
	 'footer' => 'Footer',
	)
);


// 外観＞ウィジェット：サイドバー編集できるようにする
register_sidebar(
	array(
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	)
);


// アイキャッチ画像を使用できるようにする
add_theme_support('post-thumbnails');


// 外観＞カスタマイズ：ロゴ画像を使えるようにする
add_theme_support('custom-logo');



// Home NewsのRead more
function new_excerpt_more( $more ) {
    return '...'.' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read More</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

// news一覧の抜粋の文字数制限
function twpp_change_excerpt_length( $length ) {
  return 20;
}
add_filter( 'excerpt_length', 'twpp_change_excerpt_length', 999 );






// Metabox !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

// Page, Post共通
add_filter( 'rwmb_meta_boxes', 'common_register_meta_boxes' );

function common_register_meta_boxes( $meta_boxes ) {

    $prefix = 'common_';

    $meta_boxes[] = [
        'id'         => 'pages',
        'title'      => esc_html__( 'Common 1', 'textdomain' ),
        'post_types' => [ 'post', 'page' , 'skills' ],

        'fields'     => [
            // Slideshow
            [
                'type' => 'image_advanced',
                'name' => esc_html__( 'Slideshow', 'textdomain' ),
                'id'   => $prefix . 'slideshow',
                'desc' => esc_html__( 'Recommended size: xxx', 'textdomain' ),
            ],
        ],
    ];

    return $meta_boxes;

}

