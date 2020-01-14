window.onscroll = function() {
  scrollFunction();
};

const menuLogo = document.querySelector(".menu-logo");
const menu = document.querySelector(".menu");
const menuFixed = document.querySelector(".menu-fixed");
const menuList = document.querySelector(".menu-list");

function scrollFunction() {
  if (
    document.body.scrollTop > 100 ||
    document.documentElement.scrollTop > 100
  ) {
    menuLogo.style.backgroundImage = "url('../assets/icons/logotipo.png')";
    menuLogo.style.width = "90px";
    menuLogo.style.height = "90px";
    menu.style.top = "25px";
    menuList.style.top = "250%";
  } else {
    menuLogo.style.backgroundImage =
      "url('../assets/icons/logo_horizontal.png')";
    menuLogo.style.width = "297px";
    menuLogo.style.height = "125px";
    menu.style.top = "40px";
    menuList.style.top = "200%";
  }
}
