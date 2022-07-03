class Content {
  constructor(el) {
    this.el = el;
    this.blocksWithImg = this.el.querySelectorAll('p img');
    this.blocksWithLines = this.el.querySelectorAll('h5');
    this.blocksWithIframe = this.el.querySelectorAll('p iframe');

    this.setBlocksSize();
    this.createLines();
    this.setIframesMargin();
  }

  setBlocksSize() {
    this.blocksWithImg.forEach(item => {
      // console.log(item.parentElement.tagName);
      // console.dir(item.parentElement);
      if (item.parentElement.tagName === "A") {
        item.parentElement.style.maxWidth = '100%';
        item.parentElement.style.textAlign = 'center';
        item.parentElement.style.margin = '0';
        item.parentElement.removeAttribute("href");
        item.parentElement.style.display = 'block';
      }
    });
  }

  createLines() {
    function createLines(element) {
      const topLine = document.createElement('span');
      const bottomLine = document.createElement('span');
      const LINE_SVG = `
        <svg class="t676__divider" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 12">
          <path d="M62.3 12L50 3.5 37.7 12 25.4 3.5 13.1 12 0 2.9 1.7.6l11.4 7.9L25.4 0l12.3 8.5L50 0l12.3 8.5L74.6 0l12.3 8.5L98.3.6l1.7 2.3L86.9 12 74.6 3.5"/>
        </svg>`;

      topLine.innerHTML = LINE_SVG;
      topLine.classList.add('top-line');

      bottomLine.innerHTML = LINE_SVG;
      bottomLine.classList.add('bottom-line');

      element.appendChild(topLine);
      element.appendChild(bottomLine);
    }

    this.blocksWithLines.forEach(item => createLines(item));
  }

  setIframesMargin() {
    this.blocksWithIframe.forEach(block => block.parentElement.style.margin = '0 auto');
  }
}

document.querySelectorAll('.js-content').forEach(item => new Content(item));