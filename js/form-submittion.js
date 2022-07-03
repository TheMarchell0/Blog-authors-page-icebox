const $ = jQuery;

class FooterForm {
  constructor(el) {
    this.$el = $(el);
    this.$submitBtn = this.$el.find('button');
    this.$popup = $('.js-form-popup');
    this.$popupBtn = this.$popup.find('.js-form-popup-btn');

    this.eventHandler();
    this.setPageLink();
  }

  eventHandler() {
    this.$el.on('submit', (e) => {
      this.$submitBtn.attr('disabled', true);
      e.preventDefault();

      this.checkRecaptcha();
    });
    this.$popupBtn.on('click', () => this.$popup.removeClass('js-active'));
  }

  checkRecaptcha() {
    const that = this;
    grecaptcha.ready(function () {
      grecaptcha
        .execute('6LdBWnwaAAAAADC4FEa3p5JPq12UcmBuQPHl-0Iz', {
          action: 'homepage',
        })
        .then(function (token) {
          document.getElementById('footer__form-token').value = token;

          //send request to recaptcha.php
          const recaptchaData = new FormData();
          recaptchaData.append('token', token);

          fetch('/blog/wp-json/purr/v1/captcha/', {
            method: 'post',
            body: recaptchaData,
          })
            .then((response) => {
              return response.json();
            })
            .then((result) => {
              result = JSON.parse(result);
              if (result['om_score'] >= 0.5) {
                that.sendFormData();
                that.$popup.addClass('js-active');

                setTimeout(() => {
                  that.$submitBtn.attr('disabled', false);
                  that.$el[0].reset();
                }, 1000);
              } else {
                console.log('Try later');
              }
            })
            .catch((err) => {
              console.log('fetch to wp api', err);
            });
        });
    });
  }
  setPageLink() {
    const inputPageLink = document.querySelector('.footer__page-link');
    const href = window.location.href;

    inputPageLink.value = `${inputPageLink.value} ${href}`;
  }
  sendFormData() {
    const formData = new FormData(document.querySelector('.js-footer-form'));

    if (typeof ym === 'function') ym(52342033, 'reachGoal', 'FORM_OUT');
    fetch(
      'https://docs.google.com/forms/d/1h1K4fCy1UQHdBfzjHVQB6AhxDXFst8f62g14QAmzeZM/formResponse',
      {
        method: 'post',
        body: formData,
        mode: 'no-cors',
      }
    )
      .then((res) => {
        dataLayer.push({ event: 'main-formsubmission' });
      })
      .catch((err) => {
        console.log('fetch to google docs', err);
      });
  }
}

$($('.js-footer-form').each((i, item) => new FooterForm(item)));

document.addEventListener('DOMContentLoaded', ()=> {
  const isRuPage = document.documentElement.lang === 'ru' ? true : false;
  let input = document.querySelector('#footer-phone-input');
  let defaultPlaceholder = isRuPage ? 'Номер телефона' : 'Phone number';
  input.placeholder = defaultPlaceholder;
  let editStr;
  input.addEventListener('focus', ()=> {
      input.placeholder = '+'
  })
  input.addEventListener('blur', ()=> {
      input.placeholder = defaultPlaceholder;
      if (input.value === '+') {
          input.value = '';
      }
  })
  input.addEventListener('keydown', function(event) {
      if (input.value.length === 0) {
          input.value = '+';
      }

      if (
          event.keyCode == 46 || 
          event.keyCode == 8 || 
          event.keyCode == 9 || 
          event.keyCode == 27 || 
          (event.keyCode == 65 && event.ctrlKey === true) ||
          (event.keyCode >= 35 && event.keyCode <= 39)
      ) {
          return;
      } else {
          if ((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
              event.preventDefault();
          }
      }
      const changePlus = setTimeout(()=>{
          if (input.value[0] !== '+') {
              editStr = input.value.split('');
              let position = editStr.indexOf('+');
              editStr.splice(position, 1);
              editStr.unshift('+');
              input.value = editStr.join('');
          }
      }, 1)
  });
})
