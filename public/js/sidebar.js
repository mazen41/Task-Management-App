/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./resources/js/sidebar.js ***!
  \*********************************/
var lines = document.getElementById('lines');
var overlay = document.getElementById('overlay');
var sidebar = document.getElementById('sidebar');
var closeBtn = document.getElementById('closeBtn');
lines.addEventListener('click', function () {
  overlay.style.display = 'block';
  sidebar.style.transform = 'translate(0)';
  sidebar.style.zIndex = '999';
  sidebar.style.position = 'fixed';
  sidebar.style.marginTop = '-89px';
  lines.style.display = 'none';
  closeBtn.style.display = 'block';
});
closeBtn.addEventListener('click', function () {
  overlay.style.display = 'none';
  sidebar.style.transform = 'translate(-250px)';
  sidebar.style.zIndex = '999';
  lines.style.display = 'flex';
  sidebar.style.marginTop = '-17px';
});
/******/ })()
;