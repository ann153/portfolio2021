<?php
/*
Template Name: Hobby
*/
?>

<!-- header -->
<?php get_header(); ?>


<!-- common -->
<div class="not-home-temp">
  <?php get_template_part('template-parts/common-noslideshow'); ?>
</div>

<!-- hobbies -->

<div class="hobby-temp">

  <!-- フィルター -->
  <p class="hobby-filter">
    <select class="extraction">

      <option value="all">ALL</option>
      <?php
        $terms = get_terms('hobby_category');
        foreach ( $terms as $term ) {
          echo '<option value="'.$term->slug.'">'.$term->name.'</option>';
        }
      ?>

    </select>
  </p>

  <div class="hobby-items-wrapper">

  <!-- 投稿タイプの指定 -->
  <?php
	$args = array(
		'post_type' => 'hobbies',
    'posts_per_page' => -1,
    );

    $posts = get_posts( $args );

    if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post ); ?>

        <?php $taxonomy = get_the_terms($post->ID,'hobby_category'); ?>

        <div class="hobby-item box <?php echo $taxonomy[0]->slug; ?> ">
          <div class="h-i-image"><?php the_post_thumbnail('full'); ?></div>
          <div class="h-i-textarea">
            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
            <a target="_blank" class="details" href="<?php the_field( 'external_link' ); ?>">     Details
            </a>

          </div>
        </div>

    <?php endforeach; ?>

    <?php endif; ?>








  </div>
</div>

<!-- footer -->
<?php get_footer(); ?>