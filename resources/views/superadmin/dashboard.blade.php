@extends('layouts.superadmin')

@section('title', __('superadmin.dashboard').' '.__('superadmin.panel'))

@section('content')
<section class="page-hero">
    <div class="page-hero__inner reveal">
        <nav class="breadcrumb label-nav" aria-label="Breadcrumb">
            <span>{{ __('superadmin.panel') }}</span>
            <span aria-hidden="true">/</span>
            <span>{{ __('superadmin.dashboard') }}</span>
        </nav>
        <h1 class="page-hero__title">{{ __('superadmin.dashboard') }}</h1>
        <p class="page-hero__lead">{{ __('superadmin.welcome', ['name' => auth()->user()->name]) }}</p>
    </div>
</section>

<section class="sa-page">
    <div class="container-site">
        <div class="sa-stats reveal">
            <article class="sa-stat">
                <p class="label-nav text-[var(--accent-soft)]">{{ __('superadmin.active_admins') }}</p>
                <p class="sa-stat__value">{{ $adminCount }}</p>
                <p class="sa-stat__desc">{{ __('superadmin.active_admins_desc') }}</p>
            </article>
            <article class="sa-stat">
                <p class="label-nav text-[var(--accent-soft)]">{{ __('superadmin.superadmins') }}</p>
                <p class="sa-stat__value">{{ $superAdminCount }}</p>
                <p class="sa-stat__desc">{{ __('superadmin.superadmins_desc') }}</p>
            </article>
        </div>

        <div class="sa-actions reveal">
            <a href="{{ route('superadmin.admins.index') }}" class="btn btn-primary">{{ __('superadmin.manage_admins') }}</a>
            <a href="{{ route('superadmin.admins.create') }}" class="btn btn-ghost">{{ __('superadmin.add_admin') }}</a>
            <a href="{{ url('/admin') }}" class="btn btn-ghost" target="_blank" rel="noopener">{{ __('superadmin.open_filament') }}</a>
        </div>
    </div>
</section>
@endsection
