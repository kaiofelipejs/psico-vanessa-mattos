window.onscroll = function() {
  scrollFunction();
};

const menuLogo = document.querySelector(".menu-logo img");
const menu = document.querySelector(".menu");
const menuFixed = document.querySelector(".menu-fixed");
const menuList = document.querySelector(".menu-list");

function scrollFunction() {
  if (window.innerWidth < 768) {
    scrollFunctionMobile();
  } else {
    scrollFunctionDesktop();
  }
}

function scrollFunctionMobile() {
  menuList.style.top = "300%";
}

function scrollFunctionDesktop() {
  if (
    document.body.scrollTop > 150 ||
    document.documentElement.scrollTop > 150
  ) {
    menuLogo.setAttribute("src", "../assets/icons/logotipo.png");
    menu.style.top = "25px";
    menuList.style.top = "250%";
  } else {
    menuLogo.setAttribute("src", "../assets/icons/logo_horizontal.png");
    menu.style.top = "40px";
    menuList.style.top = "200%";
  }
}
