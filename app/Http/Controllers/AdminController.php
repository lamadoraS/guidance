<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function index(): View
    {
        $admins = User::all();
        return view('admin.index')->with('admins', $admins);
    }

    public function create(): View
    {
        return view('admin.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);

        $input = $request->all();
        User::create($input);

        return redirect('admin')->with('flash_message', 'Admin successfully added!');
    }

    public function show(string $id): View
    {
        $admins = User::find($id);
        return view('admin.show')->with('admins', $admins);
    }

    public function edit(string $id): View
    {
        $admins = User::find($id);
        return view('admin.edit')->with('admins', $admins);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($id),
            ],
        ]);

        $admin = User::find($id);

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();

            $avatar->storeAs('avatars', $avatarName, 'public');

            if ($admin->avatar) {
                Storage::disk('public')->delete($admin->avatar);
            }

            $admin->avatar = 'avatars/' . $avatarName;
        }

        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->save();

        return redirect('admin')->with('flash_message', 'Admin Updated successfully!');
    }

    public function destroy(string $id): RedirectResponse
    {
        $admins = User::find($id);
        $admins->delete();

        return redirect('admin')->with('flash_message', 'Admin deleted successfully!');
    }
}
