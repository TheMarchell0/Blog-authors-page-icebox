(function () {
  document.addEventListener('DOMContentLoaded', () => {

    var formBlock = document.querySelector('#yikes-mailchimp-container-23')
      || document.querySelector('#yikes-mailchimp-container-24');



    if (formBlock) {

      var article = document.querySelector('.js-content');
      var articleHeight = article.offsetHeight;
      var isPopupWasOpen = false;

      //animate description
      var AnimTextBlock = formBlock.querySelector('.yikes-mailchimp-form-description');
      var AnimStr = AnimTextBlock.textContent.split("");
      AnimTextBlock.textContent = "";
      function animateText() {

        var running = setTimeout(animateText, 30);
        AnimStr.length ? AnimTextBlock.innerHTML += AnimStr.shift() : clearTimeout(running);
      };

      //create close btn
      var closeBtn = document.createElement("button");
      closeBtn.innerHTML = "X";
      closeBtn.className = "mailchimp-popup__close-btn"
      formBlock.append(closeBtn);

      //send metric when click (in mail-chimp-fomrs-ym.js)
      /*     formBlock.querySelector('.news-form__submit').addEventListener('click', function () {
            ym(52342033, 'reachGoal', 'SEND_EMAIL_NEWSLET');
          }); */

      //close popup
      closeBtn.addEventListener('click', function () {
        formBlock.style.display = "none";
        ym(52342033, 'reachGoal', 'CLK_CLOS_EMAILS_POPUP');
      });

      //show popup when scroll in half of article
      window.addEventListener('scroll', function () {
        if (window.scrollY > articleHeight / 2 && !isPopupWasOpen) {
          formBlock.style.display = "block";
          isPopupWasOpen = true;
          animateText();
        }
      });

    }
  })
}())