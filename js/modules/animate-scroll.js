const elementAnimated = document.querySelectorAll(".js-scroll");

export default function initAnimateScroll() {
  if (elementAnimated.length) {
    const windowHalf = window.innerHeight * 0.75;

    function animateScroll() {
      elementAnimated.forEach(element => {
        const elementTop = element.getBoundingClientRect().top;
        const isElementVisible = elementTop - windowHalf;
        if (isElementVisible < 0) {
          element.classList.add("active-scroll");
        }
      });
    }

    animateScroll();

    window.addEventListener("scroll", animateScroll);
  }
}
