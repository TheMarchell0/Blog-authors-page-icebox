<?php 
  get_header();
  $postColor = get_post_meta(get_the_ID(), 'color', true);
  $currentColor = $postColor ? $postColor : '#5c3bfe';
  $faq_titles = get_post_meta(get_the_ID(), 'faq_title', true);
  $faq_texts = get_post_meta(get_the_ID(), 'faq_text', true);
?>




<section class="article">

  <div class="container">
    <div class="article__inner">
      <a class="article__back-link" 
        href="#" 
        onclick="
          event.preventDefault();
          let distPath = window.location.pathname.split('/').filter(item => item && item !== '#');
          distPath.pop();
          window.location.href = `/${distPath.join('/')}/`;">
        <span class="article__back-arrow">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.33398 10H16.6673" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M11.666 5L16.666 10L11.666 15" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </span>
        <?php _e('Back', 'blog') ?>
      </a>
      <div class="article__info">
        <?php
            $defaultAuthorId = pll_current_language() == 'en' ? 8809 : 8811;
            $authorPosId = get_post_meta(get_the_ID(), 'post_i5kaaqqxpir',  true);
            $postAuthorName = get_the_title( $authorPosId == 0 ? $defaultAuthorId : $authorPosId );
            $postAuthorPos = get_post_meta($authorPosId == 0 ? $defaultAuthorId : $authorPosId , 'authorPos',  true);
            $postAuthorAvatar = wp_get_attachment_image_url(get_post_meta($authorPosId == 0 ? $defaultAuthorId : $authorPosId, 'authorAvatar', true), 'large');
            $postAuthorLink = get_post_permalink($authorPosId == 0 ? $defaultAuthorId : $authorPosId);
            ;?>

            <figure class="article__author-wrapper">
            <a class="article__author-wrapper-link" target="_blank" href="<?php echo pll_current_language() == 'en' ? $postAuthorLink : $postAuthorLink ?>">
              <div class="article__author-img-wrapper">
                <img src="<?php echo $postAuthorAvatar ?>" alt="<?php echo $currentLang = 'en' ? 'Author`s photo' : 'Фото автора' ?>">
              </div>
              <figcaption class="article__author-name-wrapper">
                <div class="article__author-name">
                  <?php echo $postAuthorName ?>       
                </div>
                <div class="article__author-position">
                <?php echo $postAuthorPos ?>
                </div>
              </figcaption>
              </a>
            </figure>
          <div class="article__info-dop">
            <time class="article__publication-date" datetime="<?php echo get_the_date('c'); ?>">
              <?php if(pll_current_language() == 'en'){
                echo get_the_date('F j, Y');
                // echo get_the_date("F j");
              } else {
                echo get_the_date('d.m.Y');
                // echo get_the_date('d.m.Y');
              } ?>
            </time>

            <span class="article__update-time"><?php echo pll_current_language() == 'en' ? 'Updated on '.get_the_modified_date('F j, Y') : 'Обновлено '.get_the_modified_date('d.m.Y');?></span>
           
            <div class="article__tag">
              Сlient Guides
            </div>
          </div>
      </div>

      <h1 class="article__title">
        <?php the_title(); ?>
      </h1>
      <?php if($previewText):?>
        <p class="article__preview--text">
            <?php echo $previewText;?>
        </p>
      <?php endif; ?>

        <div class="reading-time">
          <div class="reading-time__time">
            <p class="reading-time__text">
              <?php echo do_shortcode('[rt_reading_time label="'.__('Reading time:', 'blog').'" postfix="'.__('minutes', 'blog').'" postfix_singular="'.__('minute', 'blog').'"]'); ?>
            </p>
            <!-- <a href="#" style="display: none;" data-id-post="<?= the_ID(); ?>" class="reading-time__button rising-btn rising-btn--theme3">
              <span class="rising-btn__inner">
                <span class="rising-btn__wrapper">
                  <span id="NO-TIME-READ" class="rising-btn__text reading-time__button-text">
                    <?php echo __("Don't have time to read?", 'blog') ?>
                  </span>
                </span>
              </span>
            </a> -->
          </div>
        </div>
      
      
      
      <div class="article__img-wrapper">
      <?php the_post_thumbnail('post-thumbnail', array('class'=>'article__img')); ?>
      </div>
      
      <div class="article__anchors-wrapper js-article__anchors-wrapper">
          <div class="article__anchors-title js-article__anchors-title"><?php _e('Table of contents', 'blog'); ?></div>
          <ul class="article__anchors-list js-article__anchors-list">
          </ul>
      </div>
      
      <div class="article__content js-content">
        <style>
          .header .is-open {
            background-color: <?php echo $currentColor ?>
          }
          .article__content hr {
            color: <?php echo $currentColor ?>;
            background-image: linear-gradient(
              to bottom,
              rgba(255, 255, 255, 0) 30px,
              <?php echo $currentColor ?> 30px,
              rgba(255, 255, 255, 0) 31px
            );
          }
          .article__content h5 svg {
            fill: <?php echo $currentColor ?>;
          }
        </style>

       <?php the_post(); ?>
        <?php if (get_the_content()): ?>
          <?php the_content(); ?>
        <?php endif; ?>
        <div class="no-time-read-modal">
          <div class="no-time-read-modal__wrapper">
            <button type="button" class="no-time-read-modal__close">Close</button>
            <div class="no-time-read-modal__content">
              <form class="no-time-read-modal__form" action="POST">
                <label class="no-time-read-modal__label" for="no-time-read-modal-email">
                  <?php echo __('Enter your mail and we will send the article there', 'blog'); ?>
                </label>
                <div class="no-time-read-modal__input-wrap">
                  <input class="no-time-read-modal__input" id="no-time-read-modal-email" type="email" name="email" placeholder="E-mail" required>
                  <button class="no-time-read-modal__btn" id="SEND-ARTICLE" data-id-post="<?= the_ID() ?>" type="submit"><?php echo __('Send', 'blog'); ?></button>
                </div>
                <p class="no-time-read-modal__error-text"></p>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php if(is_array($faq_titles)) { ?>
        
          <section class="faqs">
            <h2 class="faqs__title section-title section-title--theme2">
              FAQ
              <span class="section-title__stroke-text">s</span>
            </h2>
            <ul class="faqs__list js-accordeon">
              <?php
              foreach ($faq_titles as $key => $title) { ?>
                <li class="faqs__item js-active">
                  <h3 class="faqs__item-title"><?php echo $title; ?></h3>
                  <div class="faqs__item-text-wrapper">
                    <p class="faqs__item-text"><?php echo $faq_texts[$key]; ?></p>
                  </div>
                </li>
              <?php } ?>
              
            </ul>
            <script type="application/ld+json">
              {
                "@context": "https://schema.org",
                "@type": "FAQPage",
                "mainEntity": [
                  <?php foreach ($faq_titles as $key => $title): ?>
                  {
                    "@type": "Question",
                    "name": "<?= $title; ?>",
                    "acceptedAnswer": {
                      "@type": "Answer",
                      "text": "<?= $faq_texts[$key]; ?>"
                    }
                  }<?= $key+1 == count($faq_titles) ? "" : "," ?>
                  <?php endforeach; ?>
                ]
              }
              </script>
          </section>
        <?php } ?>
      <?php
        $renderPostsId = get_post_meta(get_the_ID(), '_suggested_article', true);
        $idArray = array_filter(explode(', ', $renderPostsId));

        if (count($idArray) < 3) {
          $excludeArray = array_merge($idArray, array(get_the_ID()));
          $otherPosts = new WP_Query(array(
            'posts_per_page' => 3 - count($idArray),
            'post__not_in' => $excludeArray
          ));

          while ($otherPosts->have_posts()): $otherPosts->the_post();
          array_push($idArray, get_the_ID());
          endwhile;
        }

        $query = new WP_Query(array(
          'posts_per_page' => 3,
          'post__in' => $idArray,
          'orderby' => 'post__in'
        ));

        if ($query->have_posts()): 
      ?>

      <ul class="posts__list posts__list--article">
        <?php while ($query->have_posts()): $query->the_post();?>

        <li class="posts__item">
          <a class="posts__item-link" href="<?php echo getRuLinkPost(get_the_ID()); ?>">
            <div class="posts__img-wrapper">
              <?php the_post_thumbnail('post-thumbnail', array('class'=>'posts__img')); ?>
            </div>
            <div class="posts__wrapper">
              <time class="posts__item-text" datetime="<?php the_time('Y-m-d') ?>">
                <?php the_time('F j, Y') ?>
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

        <?php endwhile;?>
      </ul>
        
      
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
      <?php echo $postsCount ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>