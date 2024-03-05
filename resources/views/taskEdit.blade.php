<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Task</title>
</head>

<body>
    @include('layouts.edit')
    @include('layouts.navigation')
    @include('layouts.side')
    <script>
        

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
    </script>
</body>

</html>
