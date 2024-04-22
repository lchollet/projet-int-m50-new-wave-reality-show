@extends('layouts.default')
@section('content')
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Connexion</title>
</head>
<body>
    <div class="contact-container">
        <h1>Connexion</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="form-group">
                <label for="email">{{ __('Email') }}</label>
                <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
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
                                required autocomplete="current-password" />
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a href="{{ route('register') }}">
                    <button type="button" class="ms-3">
                        {{ __('Register') }}
                    </button>
                </a>
                <button type="submit" class="ms-3">
                    {{ __('Log in') }}
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
    width: 100%;
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

.contact-container button[type="button"] {
    padding: 10px;
    background-color: var(--grey);
    color: var(--white);
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    font-weight: var(--paragraphe-font-weight);
}

.contact-container button[type="button"]:hover {
    background-color: var(--grey-dark);
}

</style>
@stop
