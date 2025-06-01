"use strict";

var isFluid = JSON.parse(localStorage.getItem('isFluid'));
if (isFluid) {
  var container = document.querySelector('[data-layout]');
  container.classList.remove('container');
  container.classList.add('container-fluid');
}

var navbarStyle = localStorage.getItem("navbarStyle");
if (navbarStyle && navbarStyle !== 'transparent') {
  document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
}
