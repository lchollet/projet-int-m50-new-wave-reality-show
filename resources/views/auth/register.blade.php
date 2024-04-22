@extends('layouts.default')
@section('content')
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Inscription</title>
</head>
<body>
    <div class="contact-container">
        <h1>Inscription</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="form-group">
                <label for="name">{{ __('Nom') }}</label>
                <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Email Address -->
            <div class="form-group mt-4">
                <label for="email">{{ __('Email') }}</label>
                <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Password -->
            <div class="form-group mt-4">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="form-group mt-4">
                <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                <input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />
                @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="flex items-center justify-end mt-4">
                <a href="{{ route('login') }}" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Already registered?') }}
                </a>
                <button type="submit" class="ms-4">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
</body>
</html>

<style>
.contact-container {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    background-color: var(--white);
    border-radius: 10px;
    /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); ca peux etre beau */
    color: var(--orange-1);
}

.contact-container h1 {
    text-align: left;
    color: var(--black);
}

.contact-container form {
    padding-right: 20px;
    padding-left: 20px;
}

.contact-container .form-group {
    margin-bottom: 20px;
}

.contact-container label {
    display: block;
    margin-bottom: 5px;
    font-weight: var(--paragraphe-font-weight);
}

.contact-container input[type="text"],
.contact-container input[type="email"],
.contact-container input[type="password"],
.contact-container textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid var(--grey);
    border-radius: 5px;
    color: var(--black); 
}

.contact-container textarea {
    resize: vertical;
}

.contact-container button[type="submit"] {
    padding: 10px;
    background-color: var(--orange-1);
    color: var(--white);
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    font-weight: var(--paragraphe-font-weight);
}

.contact-container button[type="submit"]:hover {
    background-color: var(--orange-2);
}

.contact-container a {
    padding: 10px;
    color: var(--grey);
    text-decoration: none;
}

.contact-container a:hover {
    color: var(--grey-dark);
}

</style>
@stop
