<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- @vite(['resources/scss/collections.scss', 'resources/js/dashboard.js']); --}}
    <link rel="stylesheet" href="css/collections.css">
    <title></title>
</head>

<body>
    <div class="container">
        <form action="{{ route('categories.delete') }}" class="delete-form">
            @csrf
            <div class="title">
                <h2>Collections</h2>
            </div>
            <button type="submit">Delete all categorys?</button>
        </form>
        <div class="collections">
            @if ($categories->isEmpty())
            <div class="alert" style="">
                <p style="">No Categories Yet Create one :)</p>
            </div>
            @else
                @foreach ($categories as $category)
                    <div class="category">
                        <img src="icons/icons8-open-book-60.png" alt="">
                        <div class="deatils">
                            <p style="color: white;">{{ $category->category_name }}</p>
                        </div>
                        <a href="{{ route('Task.show', $category->id) }}"
                            style="align-self: end; margin-top: -5px; padding-right: 18px; text-decoration: none; color: white; font-size: 15px; text-align: center; border-radius: 8px; cursor: pointer;">Go
                            to this collection</a>
                            <a href="{{route('category.delete', $category->id)}}"
                                style="padding-left: 106px;
                                padding-top: 7px;
                                text-decoration: none;
                                color: white;
                                font-size: 15px;">
                                Delete this category</a>
                    </div>
                @endforeach
            @endif
            <div class="category" style="background: none; border: 1px solid #30303d;">
                <button id="plusButton"
                    style="cursor: pointer; background: none; border: none; color: #70707b; font-size: 30px; margin-left: -20px">+</button>
                <form method="POST" action="{{ route('category.store') }}" id="inputForm" action="" class="hidden"
                    style="display: none; flex-direction: column; gap: 20px;">
                    @csrf
                    <label for="inputField">CategoryName: </label>
                    <input name="category_name" type="text" id="inputField"
                        style="height: 33px; background-color: #0A0A0A; outline: none; border: 1px solid #30303d; border-radius: 5px; padding-left: 10px; color: white; transition: 0.6s ease; background: none; width: 188px;" />
                    <button type="submit"
                        style="width: 139px; text-align: center; height: 37px; border: 1px solid #30303d; border-radius: 11px; transition: 0.6s; background: none; color: white; align-self: center; cursor: pointer; font-family: 'Excon', sans-serif; margin-left: -124px;">Submit</button>
                    <p style="width: 139px; text-align: center; height: 26px; border: 1px solid #30303d; border-radius: 11px; transition: 0.6s; background: none; color: white; align-self: center; cursor: pointer; font-family: 'Excon', sans-serif; margin-left: -124px; margin-top: -11px; padding-top: 9px; font-size: 14px;"
                        id="cancel">Cancel</p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
