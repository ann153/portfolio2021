<?php
/*
Template Name: Skill
*/
?>

<?php get_header(); ?>

<div class="skill-temp">

<!-- common -->
<div>
    <?php get_template_part('template-parts/common'); ?>
</div>


<!-- skill list -->


<?php
    $args = array(
        'post_type' => 'skills', //投稿タイプの指定
        'posts_per_page' => -1,
    );

    $posts = get_posts( $args );

    if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post ); ?>

          <section class="mini-slider-section">
            <!-- Swiper !!!!!!!!!!!!!!!!!!!-->
            <div class="swiper-container m-s-s">
              <div class="swiper-wrapper">
                <?php
                    $slideshows = rwmb_meta( 'common_slideshow',array('size' => 'original') );
                    foreach ( $slideshows as $slideshow ) {
                        echo '<div class="swiper-slide"><img class="slideshow" src="', $slideshow['url'], '"></div>';
                    }
                ?>
              </div>
              <!-- Add Arrows -->
              <div class="swiper-button-next a-swipper-arrow"></div>
              <div class="swiper-button-prev a-swipper-arrow"></div>
            </div>

            <!-- Text !!!!!!!!!!!!!!!!!!!!!-->
            <div class="m-s-s mss-textarea">
              <h3><?php the_title(); ?></h3>
              <p><?php the_content(); ?></p>

                <div class="rm-content">
                    <div><?php the_field( 'read_more_text' ); ?></div>
                    <p class="rm-button"><?php the_field( 'read_more_label' ); ?></p>
                </div>

            </div>
          </section>

    <?php endforeach; ?>

    <?php endif;

    wp_reset_postdata(); //クエリのリセット ?>


</div>


<!-- footer -->
<?php get_footer(); ?>