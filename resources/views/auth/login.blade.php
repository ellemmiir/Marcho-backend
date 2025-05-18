@extends('layouts.main')

@section('title', 'Login')

@section('content')
    <section class="top">
        <div class="top__container" style="background-image: url('images/top-bg.jpg');">
            <div class="container">
                <h2 class="top__title title">LOG IN</h2>
                <div class="breadcrumbs">
                    <ul class="breadcrumbs__list">
                        <li class="breadcrumbs__item">
                            <a class="breadcrumbs__link" href="/">Home</a>
                        </li>
                        <li class="breadcrumbs__item">
                            <span class="breadcrumbs__link">Log in</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="modal section">
        <div class="container">
            <div class="modal__links">
                <a class="modal__link" href="{{ route('register') }}">REGISTER</a>
                <a class="modal__link modal__link--active" href="{{ route('login') }}">LOGIN</a>
            </div>
            <form class="modal__form" method="POST" action="{{ route('login') }}">
                @csrf
                @if ($errors->has('email'))
                    <div class="modal__error">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <label class="modal__label">
                    Email address*
                    <input class="modal__input" type="email" name="email" value="{{ old('email') }}" required>

                </label>
                <label class="modal__label">
                    Password*
                    <input class="modal__input" type="password" name="password" required>
                    @if ($errors->has('password'))
                        <div class="modal__error">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                </label>
                <label class="modal__label">
                    <input type="checkbox" name="remember"> Remember me
                </label>
                <button class="modal__btn" type="submit">LOG IN</button>
                <a class="modal__error" href="{{ route('password.request') }}">Lost your password?</a>
            </form>
        </div>
    </section>
@endsection
