<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Enums\UserRole;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function index(): View
    {
        $admins = User::query()
            ->where('role', UserRole::Admin)
            ->orderBy('name')
            ->paginate(10);

        return view('superadmin.admins.index', compact('admins'));
    }

    public function create(): View
    {
        return view('superadmin.admins.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'role' => UserRole::Admin,
        ]);

        return redirect()
            ->route('superadmin.admins.index')
            ->with('success', 'Admin berhasil ditambahkan.');
    }

    public function edit(User $admin): View
    {
        abort_unless($admin->isAdmin(), 404);

        return view('superadmin.admins.edit', compact('admin'));
    }

    public function update(Request $request, User $admin): RedirectResponse
    {
        abort_unless($admin->isAdmin(), 404);

        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users', 'email')->ignore($admin->id),
            ],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
        ]);

        $admin->name = $data['name'];
        $admin->email = $data['email'];

        if (! empty($data['password'])) {
            $admin->password = $data['password'];
        }

        $admin->role = UserRole::Admin;
        $admin->save();

        return redirect()
            ->route('superadmin.admins.index')
            ->with('success', 'Admin berhasil diperbarui.');
    }

    public function destroy(User $admin): RedirectResponse
    {
        abort_unless($admin->isAdmin(), 404);

        $admin->delete();

        return redirect()
            ->route('superadmin.admins.index')
            ->with('success', 'Admin berhasil dihapus.');
    }
}
