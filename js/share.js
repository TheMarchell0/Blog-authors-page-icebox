class Share {
  constructor(el) {
    this.el = el;
    this.content = document.querySelector('.js-content');


    this.elHeight = el.offsetHeight;
    this.headerHeight = document.querySelector('.js-header').offsetHeight;

    this.eventHandler();
  }
  getActualContentSizes() {
    this.contentHeight = this.content.offsetHeight;
    this.contentTop = this.content.offsetTop;
    this.contentBottom = this.content.offsetTop + this.content.offsetHeight;
    this.contentLeft = this.content.getBoundingClientRect().left;
  }
  toAbsolute(position = 'top') {
    this.el.style.position = 'absolute';
    if (position === 'top') {
      this.el.style.bottom = 'auto';
      this.el.style.top = '0';
    } else {
      this.el.style.bottom = '0';
      this.el.style.top = 'auto';
    }
    this.el.style.left = '0';
  }
  toFixed() {
    this.el.style.top = this.headerHeight + 10 + 'px';
    this.el.style.bottom = 'auto';
    this.el.style.position = 'fixed';
    this.el.style.left = this.contentLeft + 'px';
  }
  shareFixed() {
    if (window.scrollY < this.contentTop) {
      this.toAbsolute('top');
    } else if (window.scrollY > this.contentBottom - this.elHeight) {
      this.toAbsolute('bottom');
    } else {
      this.toFixed();
    }
  }
  resetStyles() {
    this.el.removeAttribute("style");
  }

  eventHandler() {
    window.addEventListener('resize', () => {
      if (window.innerWidth < 1100) {
        this.resetStyles.call(this);
      }
    });

    window.addEventListener('scroll', () => {
      if (window.innerWidth > 1100) {
        this.getActualContentSizes();
        this.shareFixed.call(this);
      }
    });
  }
}

document.querySelectorAll('.js-rmp-social-widget').forEach(item => new Share(item));

