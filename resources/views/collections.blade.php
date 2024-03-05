<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Collections</title>
</head>
<body>
    @include('layouts.navigation')
    @include('layouts.categories')
    <script>
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
    </script>
</body>
</html>