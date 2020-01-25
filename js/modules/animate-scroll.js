const sections = document.querySelectorAll(".js-scroll");

export default function initAnimateScroll() {
  if (sections.length) {
    const windowHalf = window.innerHeight * 0.75;

    function animateScroll() {
      sections.forEach(section => {
        const sectionTop = section.getBoundingClientRect().top;
        const isSectionVisible = sectionTop - windowHalf;
        if (isSectionVisible < 0) {
          section.classList.add("active-scroll");
        }
      });
    }

    animateScroll();

    window.addEventListener("scroll", animateScroll);
  }
}
