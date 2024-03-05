<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    
    <title>Document</title>
    <style>
        body {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            color: white;
            transition: 0.6s;
        }

        body .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 998;
        }

        body .lines {
            display: none;
        }

        body .container_side {
            background-color: #21212B;
            padding-left: 16px;
            width: 197px;
            min-height: 823px;
            margin-top: -17px;
            transition: 0.8s;
        }

        body .container_side .title {
            padding-top: 19px;
            display: flex;
            justify-content: space-between;
        }

        body .container_side .title h2 {
            font-size: 16px;
            font-family: "Excon", sans-serif;
        }

        body .container_side .title span {
            align-self: center;
            padding-right: 10px;
            cursor: pointer;
            color: rgb(252, 126, 152);
            display: none;
        }

        body .container_side .categories {
            list-style: none;
            cursor: pointer;
            display: flex;
            flex-direction: column;
        }

        body .container_side .categories .category {
            display: flex;
            transition: 0.6s;
            opacity: 0.6;
            gap: 6px;
        }

        body .container_side .categories .category:hover {
            opacity: 1;
        }

        body .container_side .categories img {
            height: 20px;
            padding-top: 14px;
        }

        body .container_side .categories a {
            font-size: 19px;
            font-family: "Excon", sans-serif;
            text-decoration: none;
            color: white;
            padding-top: 13px;
        }

        body .container_side .categories a:hover {
            opacity: 1;
        }

        

        body {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            background-color: #181820;
        }

        body .nav_container {
            color: white;
            padding-right: 28px;
            margin-top: -20px;
        }

        body .nav_container .nav_ul {
            display: flex;
            justify-content: space-between;
            width: 99%;
            background-color: #21212B;
            padding-top: 6px;
            flex-wrap: wrap;
        }

        body .nav_container .nav_ul .links {
            display: flex;
            gap: 30px;
            flex-wrap: wrap;
        }

        body .nav_container .nav_ul .link {
            display: flex;
            opacity: 0.7;
            transition: 0.6s;
            gap: 7px;
            cursor: pointer;
        }

        body .nav_container .nav_ul .link p {
            font-size: 18px;
            padding-top: 2px;
        }

        body .nav_container .nav_ul .link img {
            height: 24px;
            padding-top: 18px;
        }

        body .nav_container .nav_ul .link:hover {
            opacity: 1;
        }

        body .nav_container .nav_ul .user {
            position: relative;
            display: inline-block;
            left: -45px;
        }

        body .nav_container .nav_ul .user form {
            background-color: #21212B;
        }

        body .nav_container .nav_ul .user p {
            cursor: pointer;
            display: flex;
            font-size: 18px;
            opacity: 0.7;
            transition: 0.6s;
        }

        body .nav_container .nav_ul .user p:hover {
            opacity: 1;
        }

        body .nav_container .nav_ul .user #dropdownList {
            display: none;
            position: absolute;
            top: 86%;
            left: -8px;
            list-style: none;
            padding: 0;
            margin: 0;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.1);
            border-radius: 4px;
            z-index: 1;
        }

        body .nav_container .nav_ul .user #dropdownList li {
            padding: 10px;
            cursor: pointer;
            transition: background-color 0.6s;
            border-radius: 6px;
            width: 106px;
        }

        body .nav_container .nav_ul .user #dropdownList li:hover {
            background-color: hsla(0, 0%, 80%, 0.18);
        }

        body .nav_container .main {
            display: flex;
            flex-direction: column;
            position: absolute;
            left: 35%;
            margin-top: 18px;
        }

        body .nav_container .main .gretting {
            animation-name: fadeIn;
            animation-duration: 1s;
        }

        body .nav_container .main .gretting .title {
            font-size: 20px;
            font-family: "Excon", sans-serif;
        }

        body .nav_container .main .gretting .welcome {
            font-family: "Excon", sans-serif;
            width: 190px;
            margin-top: -20px;
        }

        body .nav_container .main .dropdown-nav {
            animation-name: fadeInLeft;
            animation-duration: 1s;
            padding-bottom: 15px;
        }

        body .nav_container .main .dropdown-nav .collection {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #272733;
            min-width: 360px;
            flex-wrap: wrap;
            padding-left: 17px;
            padding-right: 17px;
            height: 59px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            margin-left: 1px;
        }

        body .nav_container .main .dropdown-nav .collection .buttons {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        body .nav_container .main .dropdown-nav .collection .buttons img {
            height: 20px;
        }

        body .nav_container .main ul {
            list-style: none;
            margin-top: 0px;
            margin-left: 1px;
            background: #21212B;
            display: flex;
            flex-direction: column;
            padding-left: 14px;
            padding-top: 19px;
            font-size: 19px;
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 8px;
        }

        body .nav_container .main ul .line div {
            width: 103%;
            margin-left: -12px;
            height: 2px;
            background-color: #252531;
        }

        body .nav_container .main ul li h2 {
            font-size: 22px;
        }

        body .nav_container .main ul li p {
            font-size: 16px;
            color: #803E43;
        }

        body .nav_container .main ul .link {
            display: flex;
            margin-top: 15px;
            justify-content: center;
            align-items: center;
            padding-bottom: 20px;
            transition: 0.6s;
            gap: 2px;
        }

        body .nav_container .main ul .link a {
            text-decoration: none;
            color: white;
            font-size: 20px;
            transition: 0.6s;
        }

        body .nav_container .main ul .link span {
            font-size: 20px;
            padding-top: 3px;
        }

        body .nav_container .main ul .link:hover {
            transform: scale(1.04);
        }

        @keyframes fadeInLeft {
            0% {
                opacity: 0;
                transform: translateX(-20px);
            }

            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translate3d(0, -20%, 0);
            }

            to {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }

        @media (max-width: 733px) {
            body .nav_container .main .dropdown-nav .collection {
                min-width: 0px;
                max-width: 360px;
            }
            
            .container_side {
                transform: translate(-250px);
            }

            body .nav_container .nav_ul .user {
                position: relative;
                display: inline-block;
                left: -31px;
            }

            body .nav_container .nav_ul .links {
                display: flex;
                gap: 5px;
                margin-left: -35px;
            }
        }

        @media (max-width: 475px) {
            body .nav_container .main {
                left: 60px;
            }
        }

        @media (max-width: 475px) and (max-width: 390px) {
            body .nav_container .main {
                left: 10px;
            }
        }

        ::-moz-selection {
            background-color: rgb(252, 126, 152);
            -moz-transition: background-color 1s ease;
            transition: background-color 1s ease;
        }

        ::selection {
            background-color: rgb(252, 126, 152);
            transition: background-color 1s ease;
        }

        body {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            background-color: #181820;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
        }


        /* Try Another Something  */
        ::-moz-selection {
            background-color: rgb(252, 126, 152);
            -moz-transition: background-color 1s ease;
            transition: background-color 1s ease;
        }

        ::selection {
            background-color: rgb(252, 126, 152);
            transition: background-color 1s ease;
        }

        body {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            background-color: #181820;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
        }

        body .category_container {
            display: flex;
            flex-direction: column;
            position: absolute;
            left: 30%;
            top: 11%;
            
        }

        body .category_container .title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 395px;
            min-width: 600px;
            flex-wrap: wrap;
        }

        body .category_container .title .delete button {
            width: 167px;
            text-align: center;
            height: 43px;
            padding-top: 2px;
            border: 1px solid #30303d;
            border-radius: 11px;
            transition: 0.2s;
            background: none;
            color: white;
            align-self: center;
            margin-top: 11px;
            cursor: pointer;
            font-family: "Excon", sans-serif;
        }

        body .category_container .title .delete button:hover {
            background-color: hsla(0, 0%, 80%, 0.18);
            transform: scale(1.02);
        }

        body .category_container .category {
            background: none;
            border: 1px solid #30303d;
            border-radius: 23px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            margin-top: 28px;
            padding-left: 18px;
            gap: 15px;
        }

        body .category_container .category button {
            cursor: pointer;
            border: none;
            color: black;
            font-size: 32px;
            background: #F87AA6;
            border-radius: 12px;
            height: 35px;
            width: 35px;
            text-align: center;
            align-self: center;
            padding-top: 0px;
            padding-left: 6px;
            font-weight: 400;
        }

        body .category_container #overlay,
        body .category_container #edit_overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 998;
        }

        body .category_container #popupForm,
        body .category_container #edit_popupForm {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            z-index: 999;
            animation: fadeIn 0.3s ease-in-out;
            background: #21212B;
            border-radius: 6px;
            transition: 0.6s;
        }

        body .category_container #popupForm form,
        body .category_container #edit_popupForm form {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        body .category_container #popupForm form input,
        body .category_container #edit_popupForm form input {
            height: 36px;
            line-height: 28px;
            border: 2px solid transparent;
            border-radius: 8px;
            outline: none;
            color: white;
            transition: 0.3s ease;
            background: no-repeat;
            border: 1px solid #30303d;
            padding-left: 10px;
            width: 254px;
            padding-right: 12px;
        }

        body .category_container #popupForm form input:focus,
        body .category_container #edit_popupForm form input:focus {
            -o-border-image: linear-gradient(34deg, rgb(206, 76, 205) 0%, rgb(252, 126, 152) 66%, rgb(239, 147, 120) 91%);
            border-image: linear-gradient(34deg, rgb(206, 76, 205) 0%, rgb(252, 126, 152) 66%, rgb(239, 147, 120) 91%);
            border-image-slice: 1;
            border-radius: 8px;
        }

        body .category_container #popupForm form input[type=date]::-webkit-calendar-picker-indicator,
        body .category_container #edit_popupForm form input[type=date]::-webkit-calendar-picker-indicator {
            filter: invert(1);
        }

        body .category_container #popupForm form button,
        body .category_container #edit_popupForm form button {
            min-width: 100px;
            height: 45px;
            padding: 8px;
            border-radius: 5px;
            border: 1.5px solid #30303d;
            box-shadow: 0px 0px 20px -20px;
            cursor: pointer;
            transition: all 0.6s ease-in-out 0ms;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            font-family: "Poppins", sans-serif;
            background: none;
            color: white;
        }

        body .category_container #popupForm form button:hover,
        body .category_container #edit_popupForm form button:hover {
            background-color: hsla(0, 0%, 80%, 0.18);
        }

        body .category_container .tasks .task {
            background: none;
            border: 1px solid #30303d;
            border-radius: 23px;
            display: flex;
            margin-top: 25px;
            padding-left: 18px;
            gap: 15px;
            flex-direction: column;
        }

        body .category_container .tasks .task .add {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        body .category_container .tasks .task .time {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: -33px;
            margin-left: 52px;
            font-size: 14px;
        }

        body .category_container .tasks .task .time span {
            font-size: 19px;
        }

        body .category_container .tasks .completedTasks {
            background: none;
            border: 1px solid #30303d;
            border-radius: 23px;
            display: flex;
            margin-top: 25px;
            padding-left: 18px;
            gap: 15px;
            flex-direction: column;
        }

        body .category_container .tasks .completedTasks .add {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translate(-50%, -50%) scale(0.8);
            }

            100% {
                opacity: 1;
                transform: translate(-50%, -50%) scale(1);
            }
        }

        @media (max-width: 879px) {
            body .category_container .title {
                min-width: 500px;
            }
        }

        @media (max-width: 733px) {
            body .category_container {
                left: 6%;
                top: 15%;
            }
        }

        @media (max-width: 551px) {
            body .category_container .title {
                min-width: 400px;
            }
        }

        @media (max-width: 446px) {
            body .category_container .title {
                min-width: 350px;
            }
            body .category_container .title .greet {
                margin-top: 10px;
            }
            body .category_container {
                top: 15%;
            }

            body .category_container .title .delete button {
                margin-left: 0;
            }
        }


        /*  */
    </style>
</head>

<body>
    <div class="category_container">
        <div class="title" style="display: flex; justify-content: space-between; gap: 0;">
            <div class="greet">
                @foreach ($category as $item)
                    <h2>
                        {{ $item->category_name }}
                    </h2>
                @endforeach
            </div>
            <form action="{{ route('Task.destroy') }}" method="post" class="delete">
                @csrf
                <input type="hidden" value="{{ $item->id }}" name="category_id">
                <button>Delete All Tasks</button>
            </form>
        </div>
        <div class="category" style="background: none; border: 1px solid #30303d;">
            <button id="plusButton"
                onclick="
                var popupForm = document.getElementById('popupForm')
                popupForm.style.display = 'block'
                overlay.style.display = 'block';
                var overlay = document.getElementById('overlay');
                ">+</button>
            <p>Add New Task</p>
        </div>
        <div id="overlay"></div>
        <div id="popupForm">
            @foreach ($category as $cat)
                <form action="{{ route('Task.store') }}" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $cat->id }}" name="category_id">
                    <input type="hidden" value="0" name="completed">
                    <input type="text" placeholder="The task" name="task_name">
                    <input type="date" placeholder="When you have to do this task" name="task_date">
                    <button>Add Task</button>
                    <div class="closeBtn" id="closeButton"
                        onclick="
                        var popupForm = document.getElementById('popupForm')
                        var overlay = document.getElementById('overlay');
                        popupForm.style.display = 'none';
                        overlay.style.display = 'none';
                    "
                        style="cursor: pointer; border: 1.5px solid #30303d; border-radius: 5px; display: flex; justify-content: center; height: 44px; align-items: center;">
                        Close
                    </div>
                </form>
            @endforeach
        </div>

        <div class="tasks">
            <div class="title">
                <h3 style="font-size: 22px; padding-left: 15px; font-weight: 400;">Tasks - {{ $count }}</h3>
            </div>
            @foreach ($tasks as $task)
                <div class="task" style="background: none; border: 1px solid #30303d;">
                    <div class="add">
                        <a id="complete" href="{{ route('task.complete', $task->id) }}"
                            style="text-decoration: none; color: black;  display: flex; justify-content: center; align-items: center; border-radius: 12px; width: 25px; height: 25px; border: 3px solid #F87aa6;">

                        </a>
                        <p>{{ $task->task_description }}</p>
                    </div>
                    <div class="time">
                        <span class="material-symbols-outlined">
                            today
                        </span>
                        <p style="color: gray;">{{ $task->task_date }}</p>
                        <a style="text-decoration: none; color: #F87AA6; font-size: 15px;"
                            href="{{ route('Task.edit', $task->id) }}">Edit</a>
                        <a style="text-decoration: none; color: #F87AA6; font-size: 15px;"
                            href="{{ route('Task.delete', ['category_id' => $task->category_id, 'task_id' => $task->id]) }}">delete</a>
                    </div>
                </div>
            @endforeach
            <div class="title" style="margin-top: 40px">
                <h3 style="font-size: 22px; padding-left: 15px; font-weight: 400;">Completed - {{ $completed_count }}
                </h3>
            </div>
            @foreach ($completed_tasks as $task)
                <div class="completedTasks">
                    <div class="add">
                        <a id="complete" href="#"
                            style="text-decoration: none; color: black;  display: flex; justify-content: center; align-items: center; border-radius: 12px; width: 25px; height: 25px; border: 3px solid #F87aa6;">

                        </a>
                        <p style="text-decoration: line-through #F87AA6; color: #F87AA6;">{{ $task->task_description }}
                        </p>
                        <a style="text-decoration: none; color: #F87AA6; font-size: 15px;"
                            href="{{ route('Task.delete', ['category_id' => $task->category_id, 'task_id' => $task->id]) }}">delete</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>

</html>
