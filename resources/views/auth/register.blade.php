@extends('layouts.main')

@section('title', 'Register')

@section('content')
    <main class="main">
        <section class="top">
            <div class="top__container" style="background-image: url('images/top-bg.jpg');">
                <div class="container">
                    <h2 class="top__title title">REGISTER</h2>
                    <div class="breadcrumbs">
                        <ul class="breadcrumbs__list">
                            <li class="breadcrumbs__item">
                                <a class="breadcrumbs__link" href="index.html">Home</a>
                            </li>
                            <li class="breadcrumbs__item">
                                <a class="breadcrumbs__link" href="#">Register</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="modal section">
            <div class="container">
                <div class="modal__links">
                    <a class="modal__link modal__link--active" href="{{route('register')}}">REGISTER</a>
                    <a class="modal__link" href="{{route('login')}}">LOGIN</a>
                </div>
                <form class="modal__form" action="{{ route('register') }}" method="POST">
                    @csrf
                    <label class="modal__label">
                        Username* <input class="modal__input" name="name" type="text" value="{{ old('name') }}" required>
                        @error('name')
                        <div class="modal__error">{{ $message }}</div>
                        @enderror
                    </label>
                    <label class="modal__label">
                        Email address* <input class="modal__input" name="email" type="email" value="{{ old('email') }}" required>
                        @error('email')
                        <div class="modal__error">{{ $message }}</div>
                        @enderror
                    </label>
                    <label class="modal__label">
                        Password* <input class="modal__input" name="password" type="password" required>
                        @error('password')
                        <div class="modal__error">{{ $message }}</div>
                        @enderror
                    </label>
                    <label class="modal__label">
                        Confirm Password*
                        <input class="modal__input" name="password_confirmation" type="password" required>
                    </label>
                    <p class="modal__text">A password will be sent to your email address.</p>
                    <p class="modal__text">Your personal data will be used to support your experience throughout this website, to manage
                        access to your account, and for other purposes described in our privacy policy.</p>
                    <label class="modal__label">
                        <input type="checkbox" name="agree"> Agree with Terms & Conditions
                        @error('agree')
                        <div class="modal__error">{{ $message }}</div>
                        @enderror
                    </label>
                    <button class="modal__btn" type="submit">REGISTER</button>
                </form>
            </div>
        </section>
    </main>
@endsection

