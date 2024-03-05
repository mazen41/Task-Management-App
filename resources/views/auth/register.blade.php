<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    {{-- @vite('resources/scss/register.scss') --}}
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <div class="container">
        
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="title">
                <h2>Sign Up</h2>
            </div>
            <!-- Name -->
            <div class="inputGroup">
                <x-input-label for="name" :value="__('Name')"  class="input_label"/>
                <x-text-input id="name" class="" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
                
            <!-- Email Address -->
            <div class="inputGroup">
                <x-input-label for="email" :value="__('Email')" class="input_label"/>
                <x-text-input id="email" class="" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                
                <!-- Password -->
                <div class="inputGroup">
                    <x-input-label for="password" :value="__('Password')" class="input_label"/>
                    
                    <x-text-input id="password" class="block mt-1 w-full"
                    type="password"
                    name="password"
                    required autocomplete="new-password" />
    
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
    
            <!-- Confirm Password -->
            <div class="inputGroup">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="input_label"/>
                
                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                type="password"
                name="password_confirmation" required autocomplete="new-password" />
                
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
                
                <div class="end-section">
                    <a class="" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                    
                    <x-primary-button class="ml-4" style="transition: 0.6s;">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
            <div class="background">
                <img src="imgs/jess-bailey-94Ld_MtIUf0-unsplash.jpg" alt="">
            </div>
        </div>
    </body>
    </html>
    
    
    