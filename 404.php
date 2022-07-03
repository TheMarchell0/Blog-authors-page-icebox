<?php get_header(); ?>

<section class="empty js-empty">
  <div class="empty__circle js-circle"></div>

  <div class="container">
    <div class="empty__inner">
      <h1 class="empty__title">404</h1>
      <p class="empty__text">It looks like you’re lost</p>
      <a class="empty__link" href="<?php echo get_site_url(); ?>">Go home</a>

      <div class="empty__img-wrapper">
        <img src="<?php bloginfo('template_url'); ?>/images/404-img-1.svg" alt="Cat">
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>