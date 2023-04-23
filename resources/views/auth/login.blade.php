@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full ">
        <div>
            <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                {{ __('Login') }}
            </h2>
        </div>
        <form  method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <div>
                    <label for="email" class="sr-only ">{{ __('Email address') }}</label>
                    <input id="email" name="email" type="email" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="{{ __('Email address') }}" value="{{ old('email') }}">
                    @error('email')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="password" class="sr-only">{{ __('Password') }}</label>
                    <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="{{ __('Password') }}">
                    @error('password')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="flex items-center mx-8 my-8 justify-between">
                <div class="flex items-center">
                    <input id="remember_me" name="remember" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                    <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                        {{ __('Remember me') }}
                    </label>
                </div>

                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <div>
    <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
            <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M2.025 8.818C.906 8.818 0 7.91 0 6.818s.906-2 2.025-2C3.144 4.818 4.05 5.725 4.05 6.818s-.906 2-2.025 2zM17.182 7.818c-1.118 0-2.025.908-2.025 2s.907 2 2.025 2c1.12 0 2.025-.908 2.025-2s-.906-2-2.025-2zM2.025 12.818C.906 12.818 0 13.726 0 14.818s.906 2 2.025 2C3.144 16.818 4.05 15.91 4.05 14.818s-.906-2-2.025-2zM17.182 13.818c-1.118 0-2.025.908-2.025 2s.907 2 2.025 2c1.12 0 2.025-.908 2.025-2s-.906-2-2.025-2z" clip-rule="evenodd" />
            </svg>
        </span>
        {{ __('Login') }}
    </button>
</div>
</div>
</form>

</div>
@endsection