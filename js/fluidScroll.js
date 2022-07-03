jQuery(document).ready(function($) {
  function onLinkClick (e, duration) {
    const $targetHref = $(e.currentTarget).attr('href');
    const neededCoord = $($targetHref).offset().top;

    $('.js-scroll-to-block').removeClass('js-scroll-to-block');
    $('html, body').animate({ scrollTop: neededCoord }, duration);

    if ($targetHref === '#footer') {
      $('.js-field-name').focus();
    }

    e.preventDefault();
  }

  $('.js-scroll-to').on('click', e => onLinkClick(e, 500));
});
