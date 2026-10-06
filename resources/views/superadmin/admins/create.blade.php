@extends('layouts.superadmin')

@section('title', __('superadmin.create_title'))

@section('content')
<section class="page-hero">
    <div class="page-hero__inner reveal">
        <nav class="breadcrumb label-nav" aria-label="Breadcrumb">
            <a href="{{ route('superadmin.admins.index') }}">{{ __('superadmin.manage_admins') }}</a>
            <span aria-hidden="true">/</span>
            <span>{{ __('superadmin.create_heading_1') }}</span>
        </nav>
        <h1 class="page-hero__title">{{ __('superadmin.create_heading_1') }}<br>{{ __('superadmin.create_heading_2') }}</h1>
        <p class="page-hero__lead">{{ __('superadmin.create_lead') }}</p>
    </div>
</section>

<section class="sa-page">
    <div class="container-site">
        <form class="contact-form sa-form reveal" method="POST" action="{{ route('superadmin.admins.store') }}" novalidate>
            @csrf
            <div class="form-field">
                <label for="name">{{ __('superadmin.name') }}</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required autocomplete="name">
                @error('name')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-field">
                <label for="email">{{ __('superadmin.email') }}</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-field">
                <label for="password">{{ __('superadmin.password') }}</label>
                <input type="password" id="password" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-field">
                <label for="password_confirmation">{{ __('superadmin.password_confirm') }}</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required autocomplete="new-password">
            </div>
            <div class="sa-actions">
                <button type="submit" class="btn btn-primary">{{ __('superadmin.save') }}</button>
                <a href="{{ route('superadmin.admins.index') }}" class="btn btn-ghost">{{ __('superadmin.cancel') }}</a>
            </div>
        </form>
    </div>
</section>
@endsection
