function outsideClick(element, events, callback) {
  const html = document.documentElement;
  const outside = "data-outside";
  console.log("outside click done");

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

function headerScroll() {
  console.log("header scroll done");
  const header = document.querySelector("header");
  if (document.documentElement.scrollTop >= 20) {
    header.style.padding = "5px 0px 5px 0px";
  } else {
    header.style.padding = "25px 0px 25px 0px";
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
  console.log("animate scroll done");
  const windowHalf = window.innerHeight * 0.75;
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
window.addEventListener("scroll", animateScroll);
window.addEventListener("scroll", headerScroll);
