(function () {
  document.addEventListener('DOMContentLoaded', () => {
    const firstChimpForm = document.querySelectorAll('.news-form__submit');
    const secondChimpForm = document.querySelector('.news-form__submit--second');

    if (firstChimpForm) {
      firstChimpForm.forEach(function (item) {
        item.addEventListener('click', function () {
          ym(52342033, 'reachGoal', 'SEND_EMAIL_NEWSLET');
        });
      })
    }
    if (secondChimpForm) {
      document.querySelector('.news-form__submit--second').addEventListener('click', function () {
        ym(52342033, 'reachGoal', 'FORM_SEND_ARTICLE')
      });
    }
  })
}())