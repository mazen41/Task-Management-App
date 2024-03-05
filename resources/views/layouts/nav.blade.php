<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <a href="/dashboard" style="text-decoration: none; color: white; font-size: 19px; padding-top: 19px;">Dashboard</a> 
                </div>
                <div class="link">
                    <a href="/collections" style="text-decoration: none; color: white; font-size: 19px; padding-top: 19px;">Collections</a>
                </div>
            </div>
            <div class="user">
                <p id="userDropdown">{{ Auth::user()->name }} <span
                        class="material-symbols-outlined">arrow_drop_down</span></p>
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
        <div class="main">
            <div class="gretting" style="display: flex; flex-direction: column;">
                <div class="title">
                    <h2>Dashboard</h2>
                </div>
                <div class="welcome">
                    <h2>Welcome, {{ Auth::user()->name }}</h2>
                </div>
            </div>
            {{-- First Category --}}
            @if (isset($firstCategory))               
            <div class="dropdown-nav">
                <div class="collection">
                    <div class="buttons">
                        <img src="icons/icons8-grid-48.png" alt="">
                        <h2>
                            {{$firstCategory->category_name}}
                        </h2>
                    </div>
                </div>
                @if (isset($firstTaskOfFirstCategory)) 
                <ul id="slide">
                    <li>
                        <h3 style="color: rgba(252, 126, 152, 1)">First Task:</h3>
                        <h2>{{$firstTaskOfFirstCategory->task_description}}</h2>
                    </li>
                @endif
                    @if (isset($secondTaskOfFirstCategory))
                    <li>
                        <h3 style="color: rgba(252, 126, 152, 1)">Second Task:</h3>
                        <h2>{{$secondTaskOfFirstCategory->task_description}}</h2>
                    </li>
                    @endif
                    @if (isset($firstTaskOfFirstCategory)) 
                    <li class="line">
                        <div></div>
                    </li>
                    <li class="link">
                        <a href="{{route('Task.show', $firstCategory->id)}}">
                            Go to collection to see all tasks
                        </a>
                        <span class="material-symbols-outlined">
                            arrow_forward
                        </span>
                    </li>
                    @endif
                </ul>
            </div>
            @endif
            {{-- End First Category And Start SecondCategory--}}
            @if (isset($secondCategory))               
            <div class="dropdown-nav">
                <div class="collection">
                    <div class="buttons">
                        <img src="icons/icons8-grid-48.png" alt="">
                        <h2>
                            {{$secondCategory->category_name}}
                        </h2>
                    </div>
                </div>
                @if (isset($taskOneOfSecondCategory)) 
                <ul id="slide">
                    <li>
                        <h3 style="color: rgba(252, 126, 152, 1)">First Task:</h3>
                        <h2>{{$taskOneOfSecondCategory->task_description}}</h2>
                    </li>
                @endif
                    @if (isset($taskTwoOfSecondCategory))
                    <li>
                        <h3 style="color: rgba(252, 126, 152, 1)">Second Task:</h3>
                        <h2>{{$taskTwoOfSecondCategory->task_description}}</h2>
                    </li>
                    @endif
                    @if (isset($taskOneOfSecondCategory)) 
                    <li class="line">
                        <div></div>
                    </li>
                    <li class="link">
                        <a href="{{route('Task.show', $secondCategory->id)}}">
                            Go to collection to see all tasks
                        </a>
                        <span class="material-symbols-outlined">
                            arrow_forward
                        </span>
                    </li>
                    @endif
                </ul>
            </div>
            @endif
            {{-- End Second Category --}}
        </div>
    </div>
    <script src="notJs/dashboard.js"></script>
</body>

</html>
