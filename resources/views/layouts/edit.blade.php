<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="not/changeTask.css">
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
                left: 0;
            }

            body .nav_container .nav_ul .links {
                display: flex;
                gap: 3px;
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


        body .container {
            display: flex;
            flex-direction: column;
            position: absolute;
            left: 35%;
            top: 30%;
        }

        body .container form {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: white;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            background: #21212B;
            border-radius: 6px;
            transition: 0.6s;
            flex-direction: column;
            animation: fadeIn;
            animation-duration: 1s;
            margin-left: 78px;
            margin-top: 69px;
            gap: 14px;
        }

        body .container form input {
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

        body .container form input:focus {
            -o-border-image: linear-gradient(34deg, rgb(206, 76, 205) 0%, rgb(252, 126, 152) 66%, rgb(239, 147, 120) 91%);
            border-image: linear-gradient(34deg, rgb(206, 76, 205) 0%, rgb(252, 126, 152) 66%, rgb(239, 147, 120) 91%);
            border-image-slice: 1;
            border-radius: 8px;
        }

        body .container form input[type=date]::-webkit-calendar-picker-indicator {
            filter: invert(1);
        }

        body .container form button {
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

        body .container form button:hover {
            background-color: hsla(0, 0%, 80%, 0.18);
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

        @media (max-width: 625px) {
            body .container {
                left: 20%;
            }
        }

        @media (max-width: 500px) {
            body .container {
                left: 0%;
            }
        }

        @media (max-width: 415px) {
            body .container form {
                margin-left: 0px;
            }
        }

        @media (max-width: 350px) {
            body .container form {
                width: 180px;
            }

            body .container form input {
                width: 170px;
            }

            body .container form {
                width: 142px;
                margin-left: 0px;
            }

            body .container form input {
                width: 140px;
            }
        }
    </style>
    <title></title>
</head>

<body>
    <div class="container">
        <form action="{{ route('Task.update') }}" method="POST">
            @csrf
            <input type="hidden" value="{{ $task->category_id }}" name="category_id">
            <input type="hidden" value="0" name="completed">
            <input type="hidden" value="{{ $task->id }}" name="id">
            <input type="text" placeholder="The new task" name="task_name" value="{{ $task->task_description }}">
            <input type="date" placeholder="When you have to do the task" name="task_date"
                value="{{ $task->task_date }}">
            <button>Edit The Task</button>
        </form>
    </div>

</body>

</html>
