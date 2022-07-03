class Header {
  constructor (el) {
    this.el = el;
    this.humb = this.el.querySelector('.js-humb');
    this.menu = this.el.querySelector('.js-menu');
    this.scrollValue = 0;

    this.eventHandler();
  }

  toggleMenuClass () {
    this.el.classList.toggle('js-is-menu-open');
    document.body.classList.toggle('body-hidden');
  }

  eventHandler () {
    window.addEventListener('scroll', () => {
      const windowScrollTop = window.scrollY;

      if (windowScrollTop >= this.el.offsetHeight) {
        this.el.classList.add('js-active');

        if (windowScrollTop < this.scrollValue ||
            windowScrollTop >= document.documentElement.offsetHeight - window.innerHeight) {
          this.el.classList.remove('js-hide');
        } else {
          this.el.classList.add('js-hide');
        }
      } else {
        this.el.classList.remove('js-hide');
        this.el.classList.remove('js-active');
      }

      this.scrollValue = windowScrollTop;
    });
    this.humb.addEventListener('click', () => this.toggleMenuClass())
    this.menu.addEventListener('click', e => {
      if (e.target !== e.currentTarget && window.innerWidth < 1440) {
        this.toggleMenuClass();
      }
    });
    window.addEventListener('resize', () => {
      if (window.innerWidth >= 1440 &&
          this.el.classList.contains('js-is-menu-open')) {
        this.toggleMenuClass();        
      }
    })
  }
}

document.querySelectorAll('.js-header').forEach(item => new Header(item));