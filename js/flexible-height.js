class FlexibleHeight {
  constructor (el) {
    this.el = el;
    this.container = this.el.children[0];
    
    this.setContainerSize();
    this.eventHandler();
  }

  setContainerSize () {
    this.container.style.height = '';

    if (window.innerWidth >= 1024) {
      this.container.style.height = `${this.el.offsetHeight}px`;
    }
  }

  eventHandler () {
    window.addEventListener('resize', () => this.setContainerSize());
  }
}

document.querySelectorAll('.js-flexible-height').forEach(item => new FlexibleHeight(item));