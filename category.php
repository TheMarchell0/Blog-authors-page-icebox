<?php get_header(); 
$term = get_queried_object();
$lang = pll_current_language();
$linked_slug = get_term_meta($term->term_id, '_linked_slug', true);

if($lang == 'en' && !empty($linked_slug)) {
  $linked_slug_url = "/ru/blog/category/$linked_slug/";
} else if(!empty($linked_slug)) {
  $linked_slug_url = "/blog/category/$linked_slug/";
}
$pagination_arrow_left = '<svg class="pagination__arrow pagination__arrow--left"  width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M6.367.278L.28 6.328a.946.946 0 000 1.344l6.087 6.05a.96.96 0 001.353 0 .946.946 0 000-1.345L2.31 7l5.41-5.378a.946.946 0 000-1.344.96.96 0 00-1.353 0z" fill="#5C3BFE"/>
  </svg>';
$pagination_arrow_right = '<svg class="pagination__arrow pagination__arrow--right" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M1.633 13.722l6.087-6.05a.946.946 0 000-1.344L1.633.278a.96.96 0 00-1.353 0 .946.946 0 000 1.345L5.69 7 .28 12.377a.946.946 0 000 1.345.96.96 0 001.353 0z" fill="#5C3BFE"/>
  </svg>';
?>

<script>
  const langLink = document.querySelector('.lang-item>a');
  langLink.href = '<?php if(isset($linked_slug_url)) { echo $linked_slug_url;} ?>';
</script>
 
<section class="our-blog">
  <div class="container">
    <div class="our-blog__inner">
      <div class="our-blog__top-wrapper">
        <div class="our-blog__wrapper">
          <h1 class="our-blog__title block-title">
            <?php single_cat_title(); ?>
          </h1>
        </div>
      </div>

      <ul class="posts__list posts__list--main js-posts__list">
        <?php 	while ( have_posts() ) :
				the_post(); ?>

          <li class="posts__item">
            <a class="posts__item-link" href="<?php echo getRuLinkPost(get_the_ID()); ?>">
              <div class="posts__img-wrapper">
                <?php the_post_thumbnail('post-thumbnail', array('class'=>'posts__img')); ?>
              </div>
              <div class="posts__wrapper">
                <time class="posts__item-text" datetime="<?php the_modified_time('Y-m-d') ?>">
                  <?php the_modified_time('F j, Y'); ?>
                </time>
                <h3 class="posts__item-title posts__item-title--mvp">
                  <?php the_title(); ?>
                </h3>
  
                <div class="posts__content">
                </div>
  
                <p class="posts__item-more-text">
                  <?php _e('Read more', 'blog') ?>
                </p>
              </div>
            </a>
          </li>

        <?php 	endwhile;?>
      </ul>
      <div class="our-blog__main-pagination our-blog__main-pagination--display pagination">

        <?php 
          $all_pag_args = array(
            'end_size' => '2',
            'prev_text' => __($pagination_arrow_left,'multi'),
            'next_text' => __($pagination_arrow_right,'multi')
          );
        echo paginate_links( $all_pag_args );
        
        ?>
      </div>
      <?php if (  $wp_query->max_num_pages > 1 ){?>
          <div class='load-more-wrapper'>
            <button class='load-more-btn' id='load-more'>
              <?php _e('Show more', 'blog') ?>
            </button>
          </div>
      <?php } ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>