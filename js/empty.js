class Empty {
  constructor (el) {
    this.el = el;
    this.circle = this.el.querySelector('.js-circle');
    
		this.contextFn = this.onElementMouseMove.bind(this);
    this.eventHandler();
  }

  setCirclePosition ({y , x}) {
    this.circle.style.top = y;
    this.circle.style.left = x;
  }

  onElementMouseMove (e) {
		const elPosition = this.el.getBoundingClientRect();
		const elCoord = {
			x: elPosition.left,
			y: elPosition.top + window.scrollY
		};
		const coordInElement = {
			x: e.pageX - elCoord.x,
			y: e.pageY - elCoord.y
    };
    
    this.setCirclePosition({ x: `${coordInElement.x}px`, y: `${coordInElement.y}px` });
  }
  
  eventHandler () {
    this.el.addEventListener('mouseover', () => this.el.addEventListener('mousemove', this.contextFn));
    this.el.addEventListener('mouseleave', () => {
      this.el.removeEventListener('mousemove', this.contextFn);
      this.setCirclePosition({ x: '50%', y: '50%' });
    });
  }
}

document.querySelectorAll('.js-empty').forEach(item => new Empty(item));