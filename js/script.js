function outsideClick(element, events, callback) {
  const html = document.documentElement;
  const outside = "data-outside";

  if (!element.hasAttribute(outside)) {
    events.forEach(userEvent => {
      setTimeout(() => html.addEventListener(userEvent, handleOutsideClick));
    });
    element.setAttribute(outside, "");
  }
  function handleOutsideClick(event) {
    if (!element.contains(event.target)) {
      element.removeAttribute(outside);
      events.forEach(userEvent => {
        html.removeEventListener(userEvent, handleOutsideClick);
      });
      callback();
    }
  }
}

const debounce = function(func, wait, immediate) {
  let timeout;
  return function(...args) {
    const context = this;
    const later = function() {
      timeout = null;
      if (!immediate) func.apply(context, args);
    };
    const callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
  };
};

function headerScroll() {
  const header = document.querySelector("header");
  if (window.pageYOffset >= 100) {
    header.style.padding = "5px 0px 5px 0px";
    header.style.borderBottom = "1px solid rgba(203, 172, 149, 0.3)";
  } else {
    header.style.padding = "25px 0px 25px 0px";
    header.style.borderBottom = "none";
  }
}

const menuButton = document.querySelector('[data-menu="button"]');
const menuList = document.querySelector('[data-menu="list"]');
const events = ["click"];

function openMenu() {
  menuList.classList.add("active");
  menuButton.classList.add("active");
  outsideClick(menuList, events, () => {
    menuList.classList.remove("active");
    menuButton.classList.remove("active");
  });
}
events.forEach(event => menuButton.addEventListener(event, openMenu));

function animateScroll() {
  const elementAnimated = document.querySelectorAll(".js-scroll");
  const windowHalf = window.innerHeight * 0.8;
  elementAnimated.forEach(element => {
    const elementTop = element.getBoundingClientRect().top;
    const isElementVisible = elementTop - windowHalf;
    if (isElementVisible < 0) {
      element.classList.add("active-scroll");
    }
  });
}

headerScroll();
animateScroll();
window.addEventListener("scroll", headerScroll);
window.addEventListener("scroll", debounce(animateScroll, 50));
