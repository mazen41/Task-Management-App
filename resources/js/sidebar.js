const lines = document.getElementById('lines');
const overlay = document.getElementById('overlay');
const sidebar = document.getElementById('sidebar');
const closeBtn = document.getElementById('closeBtn');
lines.addEventListener('click', () => {
    overlay.style.display = 'block';
    sidebar.style.transform = 'translate(0)';
    sidebar.style.zIndex = '999';
    sidebar.style.position = 'fixed';
    sidebar.style.marginTop = '-89px';
    lines.style.display = 'none';
    closeBtn.style.display = 'block';
});

closeBtn.addEventListener('click', () => {
    overlay.style.display = 'none';
    sidebar.style.transform = 'translate(-250px)';
    sidebar.style.zIndex = '999';
    lines.style.display = 'flex';
    sidebar.style.marginTop = '-17px';

})