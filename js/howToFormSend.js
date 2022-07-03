class HowToFormSend {
  constructor(el) {
    this.el = el;
    this.successModal = document.querySelector('.how-to-form-modal');
    this.closeModal = document.querySelector('.how-to-form-modal__close');
    this.eventHandler()
  }
  eventHandler() {
    this.el.addEventListener('submit', function(e) {
      e.preventDefault();
      const formData = new FormData(this)
      
      fetch(
        "https://docs.google.com/forms/u/0/d/e/1FAIpQLScrWB-7w_q1Zp_9G-LOZfU260VbnsE3JQDG9I9f_w_OS9jXzw/formResponse",
        {
          method: "POST",
          body: formData,
          mode: "no-cors",
        }
      ).then((response) => {
        console.log('res', response);
        document.querySelector('.how-to-form-modal').classList.add('active');
        dataLayer.push({'event': 'art-howto-formsubmission'});
        this.reset();
      })
      .catch((err) => {
        console.log("fetch to google docs", err);
      });
    });
    this.closeModal.addEventListener('click', () => {
      this.successModal.classList.remove('active');
    });
  }
}

const forms = document.querySelectorAll('.how-to-form__form');
forms.forEach(item => {
  new HowToFormSend(item)
});