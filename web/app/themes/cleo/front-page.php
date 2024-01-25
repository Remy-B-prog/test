<?php get_header(); ?>

<div id="main" class="site-main">

  <section class="slider-home pos-rel">

  <?php 
  $args = array(
    'post_type' => 'home_slider',
    'order' => "ASC",
    'posts_per_page' => '-1',
  )
  
  ?>
  <?php $slides = get_posts($args);?>

    <div class="home-slider pos-rel">

    <?php foreach ($slides as $slide){ ?>
      <div class="slide">
        <div class="imgWrap">
          <img src="<?= get_the_post_thumbnail_url($slide -> ID) ?>" loading="lazy" alt="" title="">
        </div>
        <div class="slider-infos pos-abs abs-l-0 abs-b-0">
          <div class="slick-slider-dots"></div>
          <p><?= the_title() ?></p>
          <p><?= the_excerpt() ?></p>
        </div>
      </div>
      <?php } ?>
  
    </div>


  </section>
  <section class="intro"></section>
  <section class="home-categories"></section>
  <section class="drive"></section>
  <section class="featured"></section>
  <section class="home-contact"></section>
</div>

<?php get_footer(); ?>