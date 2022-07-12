<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    // Create Admin and Sign In
    public function CreateAdmin(Request $request)
    {
        $FormFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'email', Rule::unique('admins', 'email')],
            'password' => ['required', 'confirmed', 'min:6']
        ]);

        $FormFields['password'] = bcrypt($FormFields['password']);
        $admin = Admin::create($FormFields);
        auth()->login($admin);
        // Alert::success('Admin Created Successfully');
        return redirect('/admin/dashboard');
    }

    // Sign out Admin
    public function Logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/sign-in');
    }

    // Sign In
    public function authenticate(Request $request)
    {
        $FormFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        // dd(auth()->attempt($FormFields));
        if (auth()->attempt($FormFields)) {
            $request->session()->regenerate();

            return redirect('/admin/profile');
        }

        return back()->withErrors(['email'=>'Invalid Credentials'], 'login')->onlyInput('email');
    }
}
