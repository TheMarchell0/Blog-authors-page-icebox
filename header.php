<!DOCTYPE html>
<html lang="<?php echo pll_current_language();?>">
<?php $postColor = get_post_meta(get_the_ID(), 'color', true); ?>
<?php $currentColor = is_single() ? $postColor : '#5c3bfe'; ?>
<?php $pageType = is_front_page() ? 'frontPage' : (is_category() ? 'categoryPage' : (is_page() ? 'simplePage' : 'unknown'));?>
<?php $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name=“google-site-verification” content=“YgG-iu_ngX9WM8Ulia3B7gYVqrEBLf9-GQ22HbQ7Jiw”>
  <meta name="facebook-domain-verification" content="0cpowng2vyna7cecrsh180pvpcll09" />
  <?php echo $pageType == 'categoryPage' ? '<meta name="robots" content="noindex, follow" />' : ''; ?>
  <?php echo strpos($url, '?all=') !== false ? '<meta name="robots" content="noindex, follow" />' : ''; ?>
  <meta property="og:title" content="<?php getMetaInfo('ogTitle', $pageType, $url) ?>">
  <meta property="og:type" content="<?php getMetaInfo('ogType', $pageType, $url) ?>">
  <meta property="og:url" content="<?php getMetaInfo('ogUrl', $pageType, $url) ?>">
  <meta property="og:image" content="<?php getMetaInfo('ogImage', $pageType, $url) ?>">
  <title><?php getMetaInfo('title', $pageType, $url) ?></title>
  <meta name="description" content="<?php getMetaInfo('description', $pageType, $url) ?>">
  <meta property="og:description" content="<?php getMetaInfo('ogDescription', $pageType, $url) ?>">
  <meta name="twitter:title" content="<?php getMetaInfo('twitterTitle', $pageType, $url) ?>">
  <meta name="twitter:description" content="<?php getMetaInfo('twitterDescription', $pageType, $url) ?>">
  <meta name="twitter:image:src" content="<?php getMetaInfo('twitterImage', $pageType, $url) ?>">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@purrweb">
  <meta name="twitter:creator" content="@purrweb">
  <link rel="apple-touch-icon" sizes="180x180" href="data:image/png;base64,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">
  <link rel="icon" type="image/png" sizes="32x32" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABvFBMVEUAAAD////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////+/v/+/f/9/f///v/v7P+fjP6Rev6unv/6+f/Ivf+SfP6Tff7Vzf++sf9bOv5YN/6xov/z8f9/Zv5WNP5uUP7m4f/19P+Ea/5xVP7o4//IvP9gP/5aOP6kkv7Nw/9hQf6kkf75+P+Mdf5ZN/5pS/7d1v/7+v9oSv7c1f/UzP9kRf6Wgf78+//a0/9nSP6Uf/77+//9/P+Zhf5ZOP5jQ/7SyP+hjv5iQv7Pxf/f2f9qTP6Jcv749v9vUv6Gbv729f+nlf5aOf5fPv7Fuf+xof9ePf7AtP/p5f9zVv5+ZP7y7/96X/61pv9cO/63qP/BtP/x7v98Yv50V/7q5v/39f/Dt/9ePv6pl/7Pxv/39v+IcP5rTf7h2/+Vf/7Qx/9iQ/6bh/5lRv7Wzf/Nwv+Od/7n4v9uUf5WM/6Dav718/+gjf5XNf7Jvv/Xz/+Ufv6Sff7Lwf+lk/6Re/6lkv708v/Apn5FAAAAHnRSTlMAAAQpba3a8/0DN5jg+xqK6jbD/kHZwgI46Zcq3/JvPNPIAAAAAWJLR0QB/wIt3gAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB+MCHAQxM0KPtrMAAAHOSURBVDjLhZPnVxNBFMVnIAsJkITeubsxgkbJojRLqAMElWoEbCBV6UUBG1jpYOcfZpZsdh8eDvs+zJ5597czu/e9x5gZPCnZpaSkut2pKYorOYmzs8E9aekZXpjhzUhP81CEc58/E2ci0+/j3NazsnPwX+RkZyUIznPzcE7k5cYJ+f65uiTiZ3BfPkmqWkCulzRNk498nwR4gZ/owcvlFVeAq6Fr142tv4AzXlhEgMqwXgXcuFldU2tsiwo58xQTva5ev3UbuHM30hBPFHtYSSkBGpsizUBLq2hrjydKS5jLa+sdIRHtBO7dFw+6TE9dTCEHdPeI3j70P4w9GkikFEY8UAdjQ4+BJ0/Fs+eWF6zMBmqH9ZEXwOjY+ISVK2NuG5gMT70EXk2LmVkr5yZAcE6fCwLzCwuLIIB9xdJUeBJYXhGv34BcYX3k6og+LO1bWx97Swtm/+a7odigivcfxMcNAiiWUV2boqcb+PQ59iVg69KohNXtURHqMLCv38gB0upEsRoiTd+BzqjYaiGALJZZ7u2d3b19qAeH60dEN8ptNsyPn79+A/t//v47JoDRMGbLqZpqrAFVJfppyzk3rWPbOw+O8+g5D+9F438CegqAwVS4uFIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTktMDItMjhUMDQ6NDk6NTErMDE6MDDd10QdAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDE5LTAyLTI4VDA0OjQ5OjUxKzAxOjAwrIr8oQAAAFd6VFh0UmF3IHByb2ZpbGUgdHlwZSBpcHRjAAB4nOPyDAhxVigoyk/LzEnlUgADIwsuYwsTIxNLkxQDEyBEgDTDZAMjs1Qgy9jUyMTMxBzEB8uASKBKLgDqFxF08kI1lQAAAABJRU5ErkJggg==">
  <link rel="icon" type="image/png" sizes="16x16" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAA21BMVEUAAAD////////////////////////////////////////////////////////////e2P/OxP/8+//s6f/IvP/y7//39f+FbP6ciP7+/v+nlf57YP7x7v/Pxf9rTf7Y0P/s6P9zVv6zpP+SfP6Mdf77+/+1pv9yVf7p5P/c1f9sT/7Jvv/08f+kkv6ij/5/Zf729P/Et//f2P/o4/9xVf65q//5+P+Gbv6Wgf78/P+yo/91WP7u6v/RyP9qTP7Tyv+pmP6Ufv6Kcv749//Ivf/t6v/6+v/Mwv/h2/9bMjJzAAAAD3RSTlMAAAdJqOT7GJLvsQbtp+PXoqN3AAAAAWJLR0QB/wIt3gAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB+MCHAQxM0KPtrMAAACtSURBVBjTZU/XEsIwDHM6ku5AoayWvcvelL3h/7+IJL3jgfpJ0tmWBABIkhUVY1WRJQSMIqLpVIyuEYQAEYP+xiAITE3AVNrNZD2qmSBbnOfyhWLJD6glgy0WypVqrd5gwAaHc7fZane6PYYcwFzoh4OhP+IIx8J4Mp2F81jgJ4vlar3ZRlSc8Ke7/eF4OovvNrcN/Et0vd05Z7YsmPd4vt4fscCCJaInyv3X/wI6xxKVnYHQ4gAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAxOS0wMi0yOFQwNDo0OTo1MSswMTowMN3XRB0AAAAldEVYdGRhdGU6bW9kaWZ5ADIwMTktMDItMjhUMDQ6NDk6NTErMDE6MDCsivyhAAAAV3pUWHRSYXcgcHJvZmlsZSB0eXBlIGlwdGMAAHic4/IMCHFWKCjKT8vMSeVSAAMjCy5jCxMjE0uTFAMTIESANMNkAyOzVCDL2NTIxMzEHMQHy4BIoEouAOoXEXTyQjWVAAAAAElFTkSuQmCC">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php wp_head();?>
  <?php addschema(pll_current_language()); ?>
  <style>
    .btn-up.js-color-switch svg {
      stroke: <?php echo $currentColor; ?>;
    }
    @media (min-width: 1024px) {
      .loadflex {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
      }
      .loadflex .posts__item {
        width: 48%;
      }
    }
  </style>
</head>

<body <?php body_class(); ?>>
  <div class="main js-body main-<?php echo pll_current_language(); ?>">
    <?php if (pll_current_language() == 'en'): ?>
      <aside class="cookie hide-cookie" id="pjAcceptCookieBar">
        <div class="container pjAcceptCookieBarShell">
          <form action="#" method="post" class="cookie__inner">
            <p class="cookie__text">
              We use cookies to boost your experience on our website and ensure it functions properly. It also helps us
              with analytics - you won’t blame us for that, will you?:
            </p>
            <div class="pjAcceptCookieBarActions">
              <button type="button" class="pjAcceptCookieBarBtn cookie__btn">
                Sure! I’m fine with it
              </button>
            </div>
          </form>
        </div>
      </aside>
    <?php endif; ?>
    <?php $postColor = get_post_meta(get_the_ID(), 'color', true); ?>
    <?php $currentColor = is_single() ? $postColor : '#5c3bfe'; ?>
    <header id="header" class="header js-header">
      <div class="container">
        <nav class="header__inner">
        <a class="header__logo" href="<?= pll_current_language() == 'en' ? '/' : '/ru/' ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="164" height="30" fill="none" viewbox="0 0 164 30">
              <path fill="#fff" d="M43.688 3.025H34.79v23.728h5.373v-7.458h3.526c4.634 0 8.227-3.626 8.227-8.135 0-4.508-3.593-8.135-8.227-8.135zm0 11.186h-3.526V8.11h3.526c1.646 0 2.854 1.322 2.854 3.05 0 1.73-1.208 3.051-2.854 3.051zM65.612 9.805v9.253c0 2.407-1.277 3.491-3.124 3.491-1.611 0-2.921-.982-2.921-3.084v-9.66H54.53V20.21c0 4.576 2.888 7.016 6.28 7.016 2.216 0 3.895-.813 4.802-2.068v1.594h5.037V9.805h-5.037zM79.716 12.821V9.805h-5.037v16.947h5.037v-7.66c0-3.356 2.955-4.203 5.037-3.864V9.466c-2.115 0-4.365 1.084-5.037 3.355zM92.48 12.821V9.805h-5.036v16.947h5.037v-7.66c0-3.356 2.955-4.203 5.037-3.864V9.466c-2.116 0-4.366 1.084-5.037 3.355zM118.678 9.805l-2.418 9.084-2.619-9.084h-4.701l-2.62 9.084-2.418-9.084h-5.373l5.373 16.947h4.702l2.686-9.05 2.687 9.05h4.701l5.373-16.947h-5.373zM130.23 20.312h11.921a9.894 9.894 0 0 0 .202-2.033c0-5.119-3.627-8.949-8.53-8.949-5.306 0-8.932 3.898-8.932 8.949 0 5.05 3.559 8.948 9.302 8.948 3.19 0 5.675-1.186 7.32-3.491l-4.029-2.339c-.672.746-1.847 1.288-3.224 1.288-1.847 0-3.392-.61-4.03-2.373zm-.101-3.796c.471-1.729 1.747-2.678 3.661-2.678 1.511 0 3.022.712 3.559 2.678h-7.22zM155.587 9.33c-2.25 0-3.896.78-5.004 2.068V3.025h-5.037v23.728h5.037v-1.594c1.108 1.289 2.754 2.068 5.004 2.068 4.399 0 8.026-3.898 8.026-8.948 0-5.05-3.627-8.949-8.026-8.949zm-1.008 13.084c-2.317 0-3.996-1.593-3.996-4.135 0-2.543 1.679-4.136 3.996-4.136s3.996 1.593 3.996 4.136c0 2.542-1.679 4.135-3.996 4.135zM16.049 30L29.497 0h-4.955L11.094 30h4.955zM4.887 30L18.15 0h-4.887L0 30h4.887z"/>
            </svg>
            <span class="visually-hidden">Purrweb logo</span>
          </a>

          <ul class="header__list js-menu">
            <li class="header__item">
              <a class="header__item-link" href="<?php _e('/portfolio/', 'blog'); ?>">
                <?php _e('Projects', 'blog'); ?>
              </a>
            </li>
            <li class="header__item">
              <a class="header__item-link" href="<?php _e('/technologies/', 'blog'); ?>">
                <?php _e('Technologies', 'blog'); ?>
              </a>
            </li>
            <li class="header__item">
              <a class="header__item-link" href="<?php _e('/services/', 'blog'); ?>">
                <?php _e('Services', 'blog'); ?>
              </a>
            </li>
            <li class="header__item">
              <a class="header__item-link" href="<?php _e('/services/ui-ux/', 'blog'); ?>">
                <?php _e('UI/UX', 'blog'); ?>
              </a>
            </li>
            <li class="header__item">
              <a class="header__item-link" href="<?php _e('/services/mobile-development/', 'blog'); ?>">
                <?php _e('Mobile', 'blog'); ?>
              </a>
            </li>
            <li class="header__item">
              <a class="header__item-link" href="<?php _e('/about/', 'blog'); ?>">
                <?php _e('About', 'blog'); ?>
              </a>
            </li>
            <li class="header__item">
              <a class="header__item-link" <?php if (!is_front_page()): ?>href="<?php _e('/blog/', 'blog'); ?>"<?php endif; ?>>
                <?php _e('Blog', 'blog'); ?>
              </a>
            </li>
            <?php 
              $currentLang = pll_current_language();
              $translations = pll_the_languages(array('raw'=>1));
              
              $translateLinkMeta = get_post_meta(get_the_ID(), '-translateLink', true);
              $link = '';
              $slug = '';
              if($currentLang === 'en') {
                $ruLang = $translations['ru'];
                $link = modifyRuUrl($ruLang['url'], true);
                $slug = $ruLang['slug'];
              } else {
                $enLang = $translations['en'];
                $link = $enLang['url'];
                $slug = $enLang['slug'];
              }

              
            ?>
            <?php if (pll_current_language() == 'ru'): ?>
            <li class="lang-item lang-item-2 lang-item-en lang-item-first">
              <a lang="<?php echo $currentLang === 'en' ? 'ru-RU' : 'en' ?>" hreflang="<?php echo $currentLang === 'en' ? 'ru-RU' : 'en' ?>" href="<?php echo  $translateLinkMeta && !is_front_page() ? $translateLinkMeta : $link ?>">
                  <?php echo $slug; ?>
              </a>
            </li>
            <?php endif; ?>

            <?php if (pll_current_language() == 'en'): ?>
            <li class="lang-item lang-item-2 lang-item-en lang-item-first visually-hidden">
              <a lang="<?php echo $currentLang === 'en' ? 'ru-RU' : 'en' ?>" hreflang="<?php echo $currentLang === 'en' ? 'ru-RU' : 'en' ?>" href="<?php echo  $translateLinkMeta && !is_front_page() ? $translateLinkMeta : $link ?>">
                  <?php echo $slug; ?>
              </a>
            </li>
            <?php endif; ?>

            <li class="header__item header__item--request">
              <a class="rising-btn rising-btn--theme2 js-scroll-to" 
                href="#footer" onclick="ym(52342033, 'reachGoal', 'CLK_RAQ'); return true;">
                <span class="rising-btn__inner">
                  <span class="rising-btn__wrapper">
                    <span class="rising-btn__text">
                      <?php _e('Request a quote', 'blog'); ?>
                    </span>
                  </span>
                </span>
              </a>
            </li>
          </ul>

          <button class="header__humb js-humb">
            <span class="visually-hidden"><?php _e('Open/close menu', 'blog'); ?></span>
          </button>
        </nav>
      </div>
    </header>