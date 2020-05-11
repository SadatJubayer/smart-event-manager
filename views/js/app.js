// Select
document.addEventListener("DOMContentLoaded", function () {
  var elements = document.querySelectorAll("select");
  var instances = M.FormSelect.init(elements);
});

// Material select
$(document).ready(function () {
  $("select").material_select();
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
  interval: 6000,
});

//Scrollspy
const ss = document.querySelectorAll(".scrollspy");
M.ScrollSpy.init(ss, {});

//tabs
const tabs = document.querySelectorAll(".tabs");
var instance = M.Tabs.init(tabs);

var currYear = new Date().getFullYear();

$(document).ready(function () {
  console.log("Test");
  $(".datepicker").datepicker({
    defaultDate: new Date(currYear - 5, 1, 31),
    // setDefaultDate: new Date(2000,01,31),
    maxDate: new Date(currYear - 5, 12, 31),
    yearRange: [1928, currYear - 5],
    format: "yyyy/mm/dd",
  });
});
