<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Enums\UserRole;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __invoke(): View
    {
        return view('superadmin.dashboard', [
            'adminCount' => User::query()->where('role', UserRole::Admin)->count(),
            'superAdminCount' => User::query()->where('role', UserRole::SuperAdmin)->count(),
        ]);
    }
}
