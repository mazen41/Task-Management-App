const plusButton = document.getElementById('plusButton');
const popupForm = document.getElementById('popupForm');
const overlay = document.getElementById('overlay');
const closeButton = document.getElementById('closeButton');
const completeBtn = document.getElementById('complete');
const button = document.getElementById('button');
plusButton.addEventListener('click', () => {
  popupForm.style.display = 'block';
  overlay.style.display = 'block';
});
closeButton.addEventListener('click', () => {
    // popupForm.style.transform = 'scale(0)';
    popupForm.style.display = 'none';
    overlay.style.display = 'none';
});