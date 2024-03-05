<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile Page</title>
</head>
<body>
    <x-app-layout>
        {{-- <x-slot name="header"> --}}
            <div class="profile" style="background: #21212B; padding-left: 30px; display: flex; text-align: center; height: 74px; flex-wrap: wrap; justify-content: space-between;">
                <h2 class="font-semibold text-xl  leading-tight" style="color: white; align-self: center;">
                    {{ __('Profile') }}
                </h2>
                <a href="{{route('dashboard')}}" class="font-semibold text-xl  leading-tight" style="padding-right: 25px;color: white; align-self: center;">Dashboard</a>
            </div>
        {{-- </x-slot> --}}
    
        <div class="py-12" style="background: #181820;">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
    
                <div class="p-4 sm:p-8 dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
    
                <div style="color: white;" class="p-4 sm:p-8  shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>
</html>
