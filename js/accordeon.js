class Accordeon {
  constructor(el) {
    this.el = el;
    this.accordeonListArray = [].slice.call(
      this.el.querySelectorAll('.faqs__item')
    );
    this.indexOfActiveElement = 0;

    this.accordeonListArray.forEach((item) => item.classList.add('js-tab'));
    this.accordeonListArray.forEach((item) =>
      item.classList.remove('js-active')
    );
    this.accordeonListArray[this.indexOfActiveElement].classList.add(
      'js-active'
    );

    this.eventHandler();
  }

  eventHandler() {
    this.el.addEventListener('click', (e) => {
      const target = e.target;

      if (target !== this.el) {
        const currentTab = target.matches('.js-tab')
          ? target
          : target.closest('.js-tab');

        if (currentTab.matches('.js-active')) {
          currentTab.classList.remove('js-active');
        } else {
          this.accordeonListArray[this.indexOfActiveElement].classList.remove(
            'js-active'
          );
          currentTab.classList.add('js-active');
        }

        this.indexOfActiveElement = this.accordeonListArray.indexOf(currentTab);
      }
    });
  }
}

document
  .querySelectorAll('.js-accordeon')
  .forEach((item) => new Accordeon(item));
