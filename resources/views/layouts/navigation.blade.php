

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    {{-- @vite(['resources/scss/dashboard.scss', 'resources/js/dashboard.js']) --}}
    {{-- <link rel="stylesheet" href="css/app.css"> --}}
    <link rel="stylesheet" href="css/dashboard.css">
    <title></title>
</head>
<body>
    <div class="nav_container">
        <ul class="nav_ul">
            <div class="links">
                <div class="link">
                    <img src="icons/page-layout (1).png" alt="">
                    <a href="/dashboard" style="text-decoration: none; color: white; font-size: 19px; padding-top: 19px;">Dashboard</a>
                </div>
                <div class="link">
                    <img src="icons/document.png" alt="">
                    <a href="/collections" style="text-decoration: none; color: white; font-size: 19px; padding-top: 19px;">Collections</a>
                </div>
            </div>
            <div class="user">
                <p id="userDropdown">{{ Auth::user()->name }} <span class="material-symbols-outlined">arrow_drop_down</span></p>
                <form class="logout-form" id="dropdownList" method="POST" action="{{ route('logout') }}">
                    @csrf
                    @method('POST')
                    <a href="{{ route('profile.edit') }}" style="text-decoration: none; color: white;">
                        <li>Profile</li>
                    </a>
                    <a href="#" onclick="document.querySelector('.logout-form').submit(); return false;"
                        style="text-decoration: none; color: white;">
                        <li>Logout</li>
                    </a>
                </form>
            </div>
        </ul>
    </div>
    <script src="notJs/dashboard.js"></script>
</body>
</html>
