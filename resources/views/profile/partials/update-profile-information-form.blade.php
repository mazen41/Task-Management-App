<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body >
    <section >
        <header >
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Profile Information') }}
            </h2>
    
            <p class="" style="color: white;">
                {{ __("Update your account's profile information and email address.") }}
            </p>
        </header>
    
        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>
    
        <form  method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" id="email">
            @csrf
            @method('patch')
    
            <div>
                <x-input-label for="name" :value="__('Name')" style="color:white;"/>
                <x-text-input style="border: 2px solid transparent;border-radius: 8px;outline: none;color: white;transition: 0.3s ease;background: no-repeat;border: 1px solid #30303d;" :value="old('name', $user->name)" required autofocus autocomplete="username" class="mt-1 block w-full" name="name"/>
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>
    
            <div>
                <x-input-label style="color: white;" for="email" :value="__('Email')" />
                <x-text-input style="border: 2px solid transparent;border-radius: 8px;outline: none;color: white;transition: 0.3s ease;background: no-repeat;border: 1px solid #30303d;" id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="email" />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />
    
                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                    <div>
                        <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                            {{ __('Your email address is unverified.') }}
    
                            <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                {{ __('Click here to re-send the verification email.') }}
                            </button>
                        </p>
    
                        @if (session('status') === 'verification-link-sent')
                            <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                {{ __('A new verification link has been sent to your email address.') }}
                            </p>
                        @endif
                    </div>
                @endif
            </div>
    
            <div class="flex items-center gap-4">
                <x-primary-button style="border: 1px solid #30303d; border-radius: 11px; transition: 0.6s; background: none; color: white;">{{ __('Save') }}</x-primary-button>
    
                @if (session('status') === 'profile-updated')
                    <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600 dark:text-gray-400"
                    >{{ __('Saved.') }}</p>
                @endif
            </div>
        </form>
    </section>
</body>
</html>
