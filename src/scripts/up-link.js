function scrollToTop(anchorId) {
  const element = document.getElementsByTagName("main");
  element[0].scrollIntoView({ behavior: "smooth" });
}