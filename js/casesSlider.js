window.addEventListener("load", function () {
  const box = document.querySelector(".cases__cursor-box");
  let links = document.querySelectorAll(".card-case__link");
  const cursor = new Cursor(box, "move", "", links);
  if (innerWidth > 1024) {
    cursor.init();
  }

  const casesNavSlider = new Swiper("#secondary-slider", {
    slidesPerView: 3,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    // threshold: 15,
    breakpoints: {
      320: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });
  const casesSlider = new Swiper("#primary-slider", {
    loop: true,
    autoplay: {
      delay: 6000,
      disableOnInteraction: false,
    },
    watchSlidesVisibility: true,
    preloadImages: false,
    lazy: true,
    // checkInView: true,
    // allowTouchMove: false,
    navigation: {
      nextEl: ".cases__nav-next",
      prevEl: ".cases__nav-prev",
    },
    thumbs: {
      swiper: casesNavSlider,
    },
    on: {
      sliderMove: function (swiper, e) {
        if (innerWidth > 1024) {
          cursor.e(box, e.clientX, e.clientY);
        }
      },
    },
  });
});

const c = {
  touch: (function () {
    const e = " -webkit- -moz- -o- -ms- ".split(" ");
    return (
      !!(
        "ontouchstart" in window ||
        (window.DocumentTouch && document instanceof DocumentTouch)
      ) ||
      (function (e) {
        return window.matchMedia(e).matches;
      })(["(", e.join("touch-enabled),("), "heartz", ")"].join(""))
    );
  })(),
};

class Cursor {
  constructor(s, t, i, links) {
    (this.s = s),
      (this.type = t),
      (this.visible = !1),
      (this.t = i),
      (this.links = links),
      (this.target = {
        x: 0,
        y: 0,
      }),
      (this.current = {
        x: 0,
        y: 0,
      }),
      c.touch;
  }
  init() {
    if (
      ((this.i = document.createElement("div")),
      this.i.classList.add("cursor"),
      this.i.classList.add("cursor-" + this.type),
      this.t)
    ) {
      const s = document.createElement("span");
      (s.innerHTML = this.t), this.i.appendChild(s);
    }
    this.s.appendChild(this.i),
      (this.s.style.position = "relative"),
      this.s.addEventListener("mousemove", (s) => {
        if (!this.s.classList.contains("hovering")) {
          this.s.classList.add("hovering");
        }
        this.e(s);
      }),
      this.s.addEventListener("mouseleave", () => {
        this.o();
      }),
      this.s.addEventListener("mouseup", () => {
        this.i.classList.add("clicked");
      }),
      this.s.addEventListener("mouseenter", () => {
        this.i.classList.remove("clicked"), this.r();
      });

    this.links.forEach((link) => {
      link.addEventListener("mouseenter", () => {
        this.s.classList.add("hovering-button");
      });
      link.addEventListener("mouseleave", () => {
        this.s.classList.remove("hovering-button");
      });
    });
  }
  e(s, xCoord = s.clientX, yCoord = s.clientY) {
    const t = this.s.getBoundingClientRect();
    (this.current.x = xCoord - t.left),
      (this.current.y = yCoord - t.top),
      window.requestAnimationFrame(() => {
        this.render();
      });
  }
  render() {
    this.i.style.transform =
      "translate(" + this.current.x + "px, " + this.current.y + "px)";
  }
  r() {
    (this.visible = !0), this.s.classList.add("hovering");
  }
  o() {
    (this.visible = !1), this.s.classList.remove("hovering");
  }
}
