class ParallaxEffect {
    constructor() {
      this.devided = 5;
      this.target = '.js-paralax';
      this.setBackgroundPosition();
    }
  
    getScrollTop() {
      return Math.max(
        window.pageYOffset,
        document.documentElement.scrollTop,
        document.body.scrollTop,
        window.scrollY
      );
    }
  
    setBackgroundPosition() {
      document.addEventListener('scroll', e => {
        const scrollTop = this.getScrollTop();
        const position = scrollTop / this.devided;
        if (position) {
          document.querySelectorAll(this.target).forEach(element => {
            element.style.top = '-' + position + 'px';
          });
        }
      });
    }
  }
  
  document.addEventListener('DOMContentLoaded', event => {
    new ParallaxEffect();
  });