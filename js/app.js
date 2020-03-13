// Select
document.addEventListener("DOMContentLoaded", function() {
  var elements = document.querySelectorAll("select");
  var instances = M.FormSelect.init(elements);
});

// Navbar
const sideNav = document.querySelector(".sidenav");
M.Sidenav.init(sideNav, {});

// Slider
const slider = document.querySelector(".slider");
M.Slider.init(slider, {
  indicators: false,
  height: 500,
  transition: 500,
  interval: 6000
});

//Scrollspy
const ss = document.querySelectorAll(".scrollspy");
M.ScrollSpy.init(ss, {});

//tabs
const tabs = document.querySelectorAll(".tabs");
var instance = M.Tabs.init(tabs);
