document.addEventListener("DOMContentLoaded", function () {
  jQuery(function ($) {
    console.log('load');
    $('.no-time-read-modal__close').click(function() {
      $('.no-time-read-modal').removeClass('active');
    });
    $(".reading-time__button").click(function (e) {
      e.preventDefault();
      $('.no-time-read-modal').addClass('active');
      
    });
    $('.no-time-read-modal__btn').click(function(e) {
      e.preventDefault();
      var button = $(this),
        data = {
          action: "no_time_read",
          email: $('#no-time-read-modal-email').val(),
          post_id: button.data('id-post')
        };

      $.ajax({
        url: loadmore_params.ajaxurl, // AJAX handler
        data: data,
        type: "POST",
        error: function(e) {
          console.log('e', e);
        },
        success: function (data) {
          console.log('data', data);
          if (data.success) {
            $('.no-time-read-modal').removeClass('active');
            $('.no-time-read-modal__error-text').removeClass('active');
            button.closest('form')[0].reset();
          } else {
            $('.no-time-read-modal__error-text').text(data.data)
            $('.no-time-read-modal__error-text').addClass('active');
          }
        },
      });
    })
  });
});
