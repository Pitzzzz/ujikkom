@extends('layouts.superadmin')

@section('title', __('superadmin.manage_admins'))

@section('content')
<section class="page-hero">
    <div class="page-hero__inner reveal">
        <nav class="breadcrumb label-nav" aria-label="Breadcrumb">
            <a href="{{ route('superadmin.dashboard') }}">{{ __('superadmin.dashboard') }}</a>
            <span aria-hidden="true">/</span>
            <span>{{ __('superadmin.manage_admins') }}</span>
        </nav>
        <h1 class="page-hero__title">{{ __('superadmin.manage_heading_1') }}<br>{{ __('superadmin.manage_heading_2') }}</h1>
        <p class="page-hero__lead">{{ __('superadmin.manage_lead') }}</p>
    </div>
</section>

<section class="sa-page">
    <div class="container-site">
        <div class="sa-toolbar reveal">
            <p class="text-sm text-[var(--text-muted)]">{{ __('superadmin.admins_count', ['count' => $admins->total()]) }}</p>
            <a href="{{ route('superadmin.admins.create') }}" class="btn btn-primary">{{ __('superadmin.add_admin') }}</a>
        </div>

        <div class="sa-table-wrap reveal">
            <table class="sa-table">
                <thead>
                    <tr>
                        <th>{{ __('superadmin.name') }}</th>
                        <th>{{ __('superadmin.email') }}</th>
                        <th>{{ __('superadmin.created') }}</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($admins as $admin)
                        <tr>
                            <td data-label="{{ __('superadmin.name') }}">{{ $admin->name }}</td>
                            <td data-label="{{ __('superadmin.email') }}">{{ $admin->email }}</td>
                            <td data-label="{{ __('superadmin.created') }}">{{ $admin->created_at?->format('d M Y') }}</td>
                            <td class="sa-table__actions">
                                <a href="{{ route('superadmin.admins.edit', $admin) }}" class="btn btn-ghost">{{ __('superadmin.edit') }}</a>
                                <form method="POST" action="{{ route('superadmin.admins.destroy', $admin) }}" onsubmit="return confirm(@json(__('superadmin.delete_confirm')))">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-ghost sa-btn-danger">{{ __('superadmin.delete') }}</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="sa-table__empty">{{ __('superadmin.empty') }}</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if ($admins->hasPages())
            <div class="sa-pagination reveal">
                {{ $admins->links() }}
            </div>
        @endif
    </div>
</section>
@endsection
