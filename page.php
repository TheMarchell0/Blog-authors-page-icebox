<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<main id="main" class="our-blog" role="main">
  <div class="container">
    <div class="our-blog__inner">
      <?php
        // параметры по умолчанию
        $posts = get_posts( array(
          'numberposts' => -1,
          'category'    => 0,
          'orderby'     => 'date',
          'order'       => 'DESC',
          'include'     => array(),
          'exclude'     => array(),
          'meta_key'    => '',
          'meta_value'  =>'',
          'post_type'   => 'post',
          'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ) );
        ?>
        <h2 id="all-anchor" class="subsection-title all__title">
            <?= __('All posts', 'blog')?>
        </h2>
        <ul class="posts__list posts__list--main js-posts__list">
        <?php
        foreach( $posts as $post ) {
          setup_postdata($post);
        ?>
            <li class="posts__item">
            
              <a class="posts__item-link" href="<?php echo getRuLinkPost($post->ID); ?>">
            
                <div class="posts__img-wrapper">
                  <?php the_post_thumbnail('post-thumbnail', array('class'=>'posts__img')); ?>
                </div>
                <div class="posts__wrapper">
                  <time class="posts__item-text" datetime="<?php the_time('Y-m-d') ?>">
                    <?php the_time('F j, Y'); ?>
                  </time>
                  <h3 class="posts__item-title">
                    <?php the_title(); ?>
                  </h3>
                  <p class="posts__item-more-text">
                    <?php _e('Read more', 'blog') ?>
                  </p>
                </div>
              </a>
            </li>
        
          <?php
        }
        ?>
        </ul>
        <?php
        wp_reset_postdata(); // сброс
      ?>
    </div>
  </div>
</main><!-- #main -->

<?php
get_footer();