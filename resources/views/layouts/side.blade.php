<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    {{-- @vite(['resources/scss/sidebar.scss', 'resources/js/sidebar.js']) --}}
    {{-- <link rel="stylesheet" href="css/app.css"> --}}
    <link rel="stylesheet" href="css/sidebar.css">
    <title></title>
</head>
<body>
    @if (isset($firstCategory) && isset($secondCategory) && isset($taskTwoOfSecondCategory))
    
    <div class="overlay" id="overlay"></div>
    <div class="container_side" id="sidebar">
        <div class="title">
            <h2>Collections</h2>
            <span class="material-symbols-outlined" id="closeBtn">close</span>
        </div>
        <div class="categories" style="">
         

            @foreach ($categories as $category)
            <div class="category">
                <img src="icons/icons8-grid-48.png" alt="">
                <a href="{{route('Task.show', $category->id)}}">{{$category->category_name}}</a>
            </div>
            @endforeach
        </div>
    </div>
    @else
    
    <div class="overlay" id="overlay"></div>
    <div class="container_side" id="sidebar">
        <div class="title">
            <h2>Collections</h2>
            <span class="material-symbols-outlined" id="closeBtn">close</span>
        </div>
        <div class="categories" style="">
           

            @foreach ($categories as $category)
            <div class="category">
                <img src="icons/icons8-grid-48.png" alt="">
                <a href="{{route('Task.show', $category->id)}}">{{$category->category_name}}</a>
            </div>
            @endforeach
        </div>
    </div>
    @endif
    {{-- <script src="{{mix('js/sidebar.js')}}"></script> --}}
    <script src="notJs/sidebar.js"></script>
</body>
</html>
