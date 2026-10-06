@extends('layouts.superadmin')

@section('title', 'Ubah Admin')

@section('content')
<section class="page-hero">
    <div class="page-hero__inner reveal">
        <nav class="breadcrumb label-nav" aria-label="Breadcrumb">
            <a href="{{ route('superadmin.admins.index') }}">Kelola Admin</a>
            <span aria-hidden="true">/</span>
            <span>Ubah</span>
        </nav>
        <h1 class="page-hero__title">Ubah<br>Admin</h1>
        <p class="page-hero__lead">Perbarui data akun {{ $admin->name }}.</p>
    </div>
</section>

<section class="sa-page">
    <div class="container-site">
        <form class="contact-form sa-form reveal" method="POST" action="{{ route('superadmin.admins.update', $admin) }}" novalidate>
            @csrf
            @method('PUT')
            <div class="form-field">
                <label for="name">Nama</label>
                <input type="text" id="name" name="name" value="{{ old('name', $admin->name) }}" required autocomplete="name">
                @error('name')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-field">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email', $admin->email) }}" required autocomplete="email">
                @error('email')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-field">
                <label for="password">Password baru</label>
                <input type="password" id="password" name="password" autocomplete="new-password">
                <span class="form-hint">Kosongkan jika tidak ingin mengubah password.</span>
                @error('password')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-field">
                <label for="password_confirmation">Konfirmasi Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" autocomplete="new-password">
            </div>
            <div class="sa-actions">
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="{{ route('superadmin.admins.index') }}" class="btn btn-ghost">Batal</a>
            </div>
        </form>
    </div>
</section>
@endsection
