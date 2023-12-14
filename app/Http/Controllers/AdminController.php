<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function index(): View
    {
        $admins = User::all();
        return view ('admin.index')->with('admins', $admins);
    }
 
    public function create(): View
    {
        return view('admin.create');
    }
  
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        User::create($input);
        return redirect('admin')->with('flash_message', 'Admin Addedd!');
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
        $admins = User::find($id);
        $input = $request->all();
        $admins->update($input);
        return redirect('admin')->with('flash_message', 'Admin Updated!');  
    }
    
    public function destroy(string $id): RedirectResponse
    {
        User::destroy($id);
        return redirect('admin')->with('flash_message', 'Admin deleted!'); 
    }
}

