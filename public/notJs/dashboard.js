/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************!*\
  !*** ./resources/js/dashboard.js ***!
  \***********************************/
document.getElementById('userDropdown').addEventListener('click', function () {
  var dropdownList = document.getElementById('dropdownList');
  if (dropdownList.style.display === 'none') {
    dropdownList.style.display = 'block';
  } else {
    dropdownList.style.display = 'none';
  }
});
var plusButton = document.getElementById('plusButton');
plusButton.onclick = function () {
  var inputForm = document.getElementById('inputForm');
  inputForm.style.display = 'flex';
  plusButton.style.display = 'none';
};
document.getElementById('cancel').addEventListener('click', function () {
  document.getElementById('inputForm').style.display = 'none';
  plusButton.style.display = '';
});
/******/ })()
;