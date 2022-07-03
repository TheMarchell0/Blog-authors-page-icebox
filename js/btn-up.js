class BtnUp {
  constructor(el) {
    this.el = el;

    this.eventHandler();
  }
  
  setBtnColorClass () {
    const COLORS_FOR_CHANGING_CLASS = [
      'rgba(0, 0, 0, 0)',
      'rgb(255, 255, 255)'
    ];
    
    const getCurrentBlock = () => {
      const getBlockArray = () => {
        const blocks = document.querySelector('.js-body').children;
        const blocksArray = [].slice.call(blocks);
  
        return blocksArray.filter(item => item.offsetTop && item !== this.el ? item : false);
      };

      const blockArray = getBlockArray();
      const btnPosition = window.scrollY + this.el.offsetTop;
      
      return blockArray.find((item, i) => {
        if (i === blockArray.length - 1) {
          return true;
        }
        
        return btnPosition > item.offsetTop && btnPosition < blockArray[i + 1].offsetTop;
      });
    };

    const currentBlock = getCurrentBlock();
    const currentBlockBgColor = getComputedStyle(currentBlock).backgroundColor;

    if (COLORS_FOR_CHANGING_CLASS.includes(currentBlockBgColor)) {
      this.el.classList.add('js-color-switch');
    } else {
      this.el.classList.remove('js-color-switch');
    }
  }

  setBtnVisibility () {
    if (window.scrollY > window.outerHeight) {
      this.el.classList.add('js-active');
    } else {
      this.el.classList.remove('js-active');
    }
  }

  eventHandler () {
    window.addEventListener('scroll', () => {
      this.setBtnVisibility();
      this.setBtnColorClass();
    })

    this.el.addEventListener('click', () => $('html,body').animate({ scrollTop: 0}, 500));
  }
}

document.querySelectorAll('.js-btn-up').forEach(item => new BtnUp(item) );