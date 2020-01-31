window.onscroll = function() {
  headerScroll();
};

const header = document.querySelector("header");

export default function headerScroll() {
  if (document.documentElement.scrollTop >= 20) {
    header.style.padding = "8px 0";
  } else {
    header.style.padding = "25px 0";
  }
}
