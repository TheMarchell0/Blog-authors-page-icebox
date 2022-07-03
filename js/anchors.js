class Anchors {
  constructor(el) {
    this.el = el;
    this.content = document.querySelector('.js-content');
    this.headers = this.content.querySelectorAll('h2,h3');
    this.list = el.querySelector('.js-article__anchors-list');
    this.titleHeight = el.querySelector(
      '.js-article__anchors-title'
    ).offsetHeight;

    this.headerHeight = document.querySelector('.js-header').offsetHeight;

    this.eventHandler();
  }

  highlight() {
    var partViewportHeight = window.innerHeight / 2;

    $(this.headers).each(function () {
      if ($(window).scrollTop() + partViewportHeight >= $(this).offset().top) {
        var id = $(this).attr('id');
        $('.article__anchor').removeClass('article__anchor--active');
        $(`.article__anchor[href="#${id}"]`).addClass(
          'article__anchor--active'
        );
      }
    });
  }

  toAbsolute(position = 'top') {
    this.list.style.position = 'absolute';
    if (position === 'top') {
      this.list.style.bottom = 'auto';
      this.list.style.top = 'auto';
    } else {
      //console.log(this.contentBottom, this.listHeight)
      this.list.style.top = this.contentHeight - this.listHeight + 'px';
      this.list.style.bottom = 'auto';
    }
    this.list.style.right = '0';
  }

  toFixed() {
    this.list.style.top = this.headerHeight + 10 + 'px';
    this.list.style.bottom = 'auto';
    this.list.style.position = 'fixed';
    this.list.style.right = this.contentLeft + 'px';
  }

  resetStyles() {
    this.list.removeAttribute('style');
  }

  getActualContentSizes() {
    this.contentHeight = this.content.offsetHeight;
    this.contentTop = this.content.offsetTop;
    this.contentBottom = this.content.offsetTop + this.content.offsetHeight;
    this.contentLeft = this.content.getBoundingClientRect().left;
  }

  anchorsFixed() {
    if (window.scrollY < this.contentTop + this.titleHeight) {
      this.toAbsolute('top');
    } else if (window.scrollY > this.contentBottom - this.listHeight) {
      this.toAbsolute('bottom');
    } else {
      this.toFixed();
    }
  }

  addHeadersToTable() {
    const linkNode = document.createElement('a');
    const liNode = document.createElement('li');

    this.headers.forEach((item, index) => {
      //set id to headers
      item.setAttribute('id', 'header-' + index);

      // if this link with tooltip
      const isLinkWithTooltip = item.querySelector('.wplt__text');

      //create and add links to block
      const li = liNode.cloneNode(true);
      li.classList.add('article__anchors-list-item');

      const link = linkNode.cloneNode(true);
      link.classList.add('article__anchor');
      link.textContent = isLinkWithTooltip
        ? isLinkWithTooltip.textContent
        : item.textContent;
      link.title = isLinkWithTooltip
        ? isLinkWithTooltip.textContent
        : item.textContent;
      link.href = `#header-${index}`;
      li.appendChild(link);

      if ($(item).is('h3')) {
        link.classList.add('article__anchor--h3');
      }
      this.list.appendChild(li);
    });
    this.listHeight = this.list.offsetHeight;
  }

  eventHandler() {
    this.addHeadersToTable();

    // smooth scroll
    $('.article__anchor').click(function () {
      if (
        location.pathname.replace(/^\//, '') ==
          this.pathname.replace(/^\//, '') ||
        location.hostname == this.hostname
      ) {
        var target = $(this.hash),
          headerHeight = $('.js-header').height() + 10;

        target = target.length
          ? target
          : $('[name=' + this.hash.slice(1) + ']');

        if (target.length) {
          $('html,body').animate(
            {
              scrollTop: target.offset().top - headerHeight,
            },
            500
          );
          return false;
        }
      }
    });

    window.addEventListener('resize', () => {
      if (window.innerWidth < 1300) {
        this.resetStyles.call(this);
      }
    });

    window.addEventListener('scroll', () => {
      if (window.innerWidth > 1300) {
        this.highlight.call(this);
        this.getActualContentSizes();
        this.anchorsFixed.call(this);
      }
    });
  }
}

document
  .querySelectorAll('.js-article__anchors-wrapper')
  .forEach((item) => new Anchors(item));
