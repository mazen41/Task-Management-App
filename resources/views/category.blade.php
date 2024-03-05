<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Category</title>
</head>

<body>

    @include('layouts.category')
    @include('layouts.navigation')
    @include('layouts.side')

    <script>
        
        var plusButton = document.getElementById('plusButton');
        var popupForm = document.getElementById('popupForm');
        var overlay = document.getElementById('overlay');
        var closeButton = document.getElementById('closeButton');
        var completeBtn = document.getElementById('complete');
        var button = document.getElementById('button');
        plusButton.addEventListener('click', function() {
            popupForm.style.display = 'block';
            overlay.style.display = 'block';
        });
        closeButton.addEventListener('click', function() {
            popupForm.style.display = 'none';
            overlay.style.display = 'none';
        });



        document.getElementById('userDropdown').addEventListener('click', function() {
            var dropdownList = document.getElementById('dropdownList');
            if (dropdownList.style.display === 'none') {
                dropdownList.style.display = 'block';
            } else {
                dropdownList.style.display = 'none';
            }
        });
        let Button = document.getElementById('plusButton');
        Button.onclick = () => {
            var inputForm = document.getElementById('inputForm');
            inputForm.style.display = 'flex';
            Button.style.display = 'none'
        }
        document.getElementById('cancel').addEventListener('click', () => {
            document.getElementById('inputForm').style.display = 'none';
            Button.style.display = '';
        })
    </script>
</body>

</html>
