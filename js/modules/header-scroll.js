window.onscroll = function() {
  headerScroll();
};

const header = document.querySelector("header");

export default function headerScroll() {
  if (document.documentElement.scrollTop >= 20) {
    header.style.padding = "5px 0px 5px 0px";
  } else {
    header.style.padding = "25px 0px 25px 0px";
  }
}
