window.onscroll = function() {
  scrollFunction();
};

const menuLogo = document.querySelector(".menu-logo img");

function scrollFunction() {
  if (
    document.body.scrollTop > 200 ||
    document.documentElement.scrollTop > 200
  ) {
    menuLogo.style.width = "150px";
  } else {
    menuLogo.style.width = "";
  }
}
