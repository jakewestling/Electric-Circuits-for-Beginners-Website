document.addEventListener('DOMContentLoaded', () => {
  var pageTitle = document.getElementById("title").className;
  if(pageTitle === "index") {
    document.getElementById("home-nav").classList.toggle("selected-nav");
  }else if(pageTitle ==='lessons'){
    document.getElementById("lessons-nav").classList.toggle("selected-nav");
  }
})