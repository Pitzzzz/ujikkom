@extends('layouts.superadmin')

@section('title', __('superadmin.login_title'))

@section('content')
<section class="page-hero">
    <div class="page-hero__inner reveal">
        <nav class="breadcrumb label-nav" aria-label="Breadcrumb">
            <a href="{{ route('home') }}">{{ __('nav.home') }}</a>
            <span aria-hidden="true">/</span>
            <span>{{ __('superadmin.panel') }}</span>
        </nav>
        <h1 class="page-hero__title">{{ __('superadmin.login_heading_1') }}<br>{{ __('superadmin.login_heading_2') }}</h1>
        <p class="page-hero__lead">{{ __('superadmin.login_lead') }}</p>
    </div>
</section>

<section class="sa-page">
    <div class="container-site">
        <form class="contact-form sa-form reveal" method="POST" action="{{ route('superadmin.login.submit') }}" novalidate>
            @csrf
            <div class="form-field">
                <label for="email">{{ __('superadmin.email') }}</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-field">
                <label for="password">{{ __('superadmin.password') }}</label>
                <input type="password" id="password" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>
            <label class="sa-remember">
                <input type="checkbox" name="remember" value="1">
                <span>{{ __('superadmin.remember') }}</span>
            </label>
            <button type="submit" class="btn btn-primary">{{ __('superadmin.login') }}</button>
        </form>
    </div>
</section>
@endsection
