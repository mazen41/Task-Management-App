document.getElementById('userDropdown').addEventListener('click', function() {
    var dropdownList = document.getElementById('dropdownList');
    if (dropdownList.style.display === 'none') {
        dropdownList.style.display = 'block';
    } else {
        dropdownList.style.display = 'none';
    }
});
let plusButton = document.getElementById('plusButton');
plusButton.onclick = () => {
    var inputForm = document.getElementById('inputForm');
    inputForm.style.display = 'flex';
    plusButton.style.display = 'none'
}
document.getElementById('cancel').addEventListener('click', () => {
    document.getElementById('inputForm').style.display = 'none';
    plusButton.style.display = '';
})