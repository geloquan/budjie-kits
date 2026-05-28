jQuery(function($){
  "use strict";
    jQuery('.gb_navigation > ul').superfish({
    delay:       500,
    animation:   {opacity:'show',height:'show'},
    speed:       'fast'
  });
});

function ecommerce_store_elementor_gb_Menu_open() {
  jQuery(".side_gb_nav").addClass('show');
}
function ecommerce_store_elementor_gb_Menu_close() {
  jQuery(".side_gb_nav").removeClass('show');
}

jQuery('.gb_toggle').click(function () {
  ecommerce_store_elementor_Keyboard_loop(jQuery('.side_gb_nav'));
});

var ecommerce_store_elementor_Keyboard_loop = function (elem) {
  var ecommerce_store_elementor_tabbable = elem.find('select, input, textarea, button, a').filter(':visible');
  var ecommerce_store_elementor_firstTabbable = ecommerce_store_elementor_tabbable.first();
  var ecommerce_store_elementor_lastTabbable = ecommerce_store_elementor_tabbable.last();
  ecommerce_store_elementor_firstTabbable.focus();

  ecommerce_store_elementor_lastTabbable.on('keydown', function (e) {
    if ((e.which === 9 && !e.shiftKey)) {
      e.preventDefault();
      ecommerce_store_elementor_firstTabbable.focus();
    }
  });

  ecommerce_store_elementor_firstTabbable.on('keydown', function (e) {
    if ((e.which === 9 && e.shiftKey)) {
      e.preventDefault();
      ecommerce_store_elementor_lastTabbable.focus();
    }
  });

  elem.on('keyup', function (e) {
    if (e.keyCode === 27) {
      elem.hide();
    };
  });
};

document.addEventListener('DOMContentLoaded', function () {
  var preloader = document.getElementById('preloader');

  if (preloader) {  // Check if the element exists before trying to manipulate it
      var duration = 4000; // 10 seconds

      setTimeout(function () {
          preloader.style.display = 'none';
      }, duration);
  }
});

document.addEventListener('DOMContentLoaded', function () {
  // Get the header element
  var header = document.getElementById('middle-header');

  // Get the initial offset of the header
  var headerOffset = header.offsetTop;

  // Function to handle scroll events
  function handleScroll() {
      var sticky_setting = jQuery('#middle-header').attr('data-sticky');
      if (window.pageYOffset > headerOffset) {
          // Add the "sticky" class when scrolling down
          if(sticky_setting == 1) {
            header.classList.add('sticky');
          }
      } else {
          // Remove the "sticky" class when scrolling up
          if(sticky_setting == 1) {
            header.classList.remove('sticky');
          }
      }
  }

  // Attach the scroll event listener
  window.onscroll = handleScroll;
});

// Sticky Copyright

window.addEventListener('scroll', function() {
  var sticky = document.querySelector('.copyright-sticky');
  if (!sticky) return;

  var scrollTop = window.scrollY || document.documentElement.scrollTop;
  var windowHeight = window.innerHeight;
  var documentHeight = document.documentElement.scrollHeight;

  var isBottom = scrollTop + windowHeight >= documentHeight-100;

  if (scrollTop >= 100 && !isBottom) {
    sticky.classList.add('copyright-fixed');
  } else {
    sticky.classList.remove('copyright-fixed');
  }
});

/* Custom Cursor
 **-----------------------------------------------------*/
const ecommerce_store_elementor_customCursor = {
  init: function () {
    this.ecommerce_store_elementor_customCursor();
  },
  isVariableDefined: function (el) {
    return typeof el !== "undefined" && el !== null;
  },
  select: function (selectors) {
    return document.querySelector(selectors);
  },
  selectAll: function (selectors) {
    return document.querySelectorAll(selectors);
  },
  ecommerce_store_elementor_customCursor: function () {
    const ecommerce_store_elementor_cursorDot = this.select(".cursor-point");
    const ecommerce_store_elementor_cursorOutline = this.select(".cursor-point-outline");
    if (this.isVariableDefined(ecommerce_store_elementor_cursorDot) && this.isVariableDefined(ecommerce_store_elementor_cursorOutline)) {
      const cursor = {
        delay: 8,
        _x: 0,
        _y: 0,
        endX: window.innerWidth / 2,
        endY: window.innerHeight / 2,
        cursorVisible: true,
        cursorEnlarged: false,
        $dot: ecommerce_store_elementor_cursorDot,
        $outline: ecommerce_store_elementor_cursorOutline,

        init: function () {
          this.dotSize = this.$dot.offsetWidth;
          this.outlineSize = this.$outline.offsetWidth;
          this.setupEventListeners();
          this.animateDotOutline();
        },

        updateCursor: function (e) {
          this.cursorVisible = true;
          this.toggleCursorVisibility();
          this.endX = e.clientX;
          this.endY = e.clientY;
          this.$dot.style.top = `${this.endY}px`;
          this.$dot.style.left = `${this.endX}px`;
        },

        setupEventListeners: function () {
          window.addEventListener("load", () => {
            this.cursorEnlarged = false;
            this.toggleCursorSize();
          });

          ecommerce_store_elementor_customCursor.selectAll("a, button").forEach((el) => {
            el.addEventListener("mouseover", () => {
              this.cursorEnlarged = true;
              this.toggleCursorSize();
            });
            el.addEventListener("mouseout", () => {
              this.cursorEnlarged = false;
              this.toggleCursorSize();
            });
          });

          document.addEventListener("mousedown", () => {
            this.cursorEnlarged = true;
            this.toggleCursorSize();
          });
          document.addEventListener("mouseup", () => {
            this.cursorEnlarged = false;
            this.toggleCursorSize();
          });

          document.addEventListener("mousemove", (e) => {
            this.updateCursor(e);
          });

          document.addEventListener("mouseenter", () => {
            this.cursorVisible = true;
            this.toggleCursorVisibility();
            this.$dot.style.opacity = 1;
            this.$outline.style.opacity = 1;
          });

          document.addEventListener("mouseleave", () => {
            this.cursorVisible = false;
            this.toggleCursorVisibility();
            this.$dot.style.opacity = 0;
            this.$outline.style.opacity = 0;
          });
        },

        animateDotOutline: function () {
          this._x += (this.endX - this._x) / this.delay;
          this._y += (this.endY - this._y) / this.delay;
          this.$outline.style.top = `${this._y}px`;
          this.$outline.style.left = `${this._x}px`;

          requestAnimationFrame(this.animateDotOutline.bind(this));
        },

        toggleCursorSize: function () {
          if (this.cursorEnlarged) {
            this.$dot.style.transform = "translate(-50%, -50%) scale(0.75)";
            this.$outline.style.transform = "translate(-50%, -50%) scale(1.6)";
          } else {
            this.$dot.style.transform = "translate(-50%, -50%) scale(1)";
            this.$outline.style.transform = "translate(-50%, -50%) scale(1)";
          }
        },

        toggleCursorVisibility: function () {
          if (this.cursorVisible) {
            this.$dot.style.opacity = 1;
            this.$outline.style.opacity = 1;
          } else {
            this.$dot.style.opacity = 0;
            this.$outline.style.opacity = 0;
          }
        },
      };
      cursor.init();
    }
  },
};
ecommerce_store_elementor_customCursor.init();

//scrollToTop

const ecommerce_store_elementor_scrollToTop = {
  scrollToTop: {
    init() {
      this.button = document.getElementById("scrollToTopBtn");
      const svg = document.getElementById("progressCircle");
      this.circle = svg?.querySelector("circle");

      if (!this.button || !this.circle) return;

      this.radius = this.circle.r.baseVal.value;
      this.circumference = 2 * Math.PI * this.radius;

      this.circle.style.strokeDasharray = `${this.circumference}`;
      this.circle.style.strokeDashoffset = this.circumference;

      window.addEventListener("scroll", this.handleScroll.bind(this));
      this.button.addEventListener("click", this.scrollToTop.bind(this));
    },

    handleScroll() {
      const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;

      this.button.style.display = scrollTop > 100 ? "flex" : "none";
      requestAnimationFrame(this.updateProgress.bind(this));
    },

    scrollToTop() {
      window.scrollTo({ top: 0, behavior: "smooth" });
    },

    updateProgress() {
      if (!this.circle) return;

      const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
      const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
      const progress = scrollTop / scrollHeight;

      const offset = this.circumference * (1 - progress);
      this.circle.style.strokeDashoffset = offset;
    }
  }
};
document.addEventListener("DOMContentLoaded", () => ecommerce_store_elementor_scrollToTop .scrollToTop.init());

/* ===============================================
  Progress Bar
============================================= */
const ecommerce_store_elementor_progressBar = {
  init: function () {
      let ecommerce_store_elementor_progressBarDiv = document.getElementById("elemento-progress-bar");

      if (ecommerce_store_elementor_progressBarDiv) {
          let ecommerce_store_elementor_body = document.body;
          let ecommerce_store_elementor_rootElement = document.documentElement;

          window.addEventListener("scroll", function (event) {
              let ecommerce_store_elementor_winScroll = ecommerce_store_elementor_body.scrollTop || ecommerce_store_elementor_rootElement.scrollTop;
              let ecommerce_store_elementor_height =
              ecommerce_store_elementor_rootElement.scrollHeight - ecommerce_store_elementor_rootElement.clientHeight;
              let ecommerce_store_elementor_scrolled = (ecommerce_store_elementor_winScroll / ecommerce_store_elementor_height) * 100;
              ecommerce_store_elementor_progressBarDiv.style.width = ecommerce_store_elementor_scrolled + "%";
          });
      }
  },
};
ecommerce_store_elementor_progressBar.init();
