<?php

namespace App\Http\Controllers;

use App\Models\profile;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;


class ProfileController extends Controller
{
    // Store profile data
    public function StoreprofileDetails(Request $request)
    {
        $formFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'email'],
            'age' => 'required',
            'company_name' => ['required', Rule::unique('profile', 'company_name')],
            'phone' => 'required',
            'website' => 'required',
            'country' => 'required',
            'freelance' => 'required'
        ]);
        if ($request->hasFile('avatar')) {
            $formFields['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }

        profile::create($formFields);
        Alert::success('Profile Created Successfully');

        return redirect()->back();
    }

    public function EditprofileDetails(Request $request)
    {
        $formFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'email'],
            'age' => 'required',
            'company_name' => ['required'],
            'phone' => 'required',
            'website' => 'required',
            'country' => 'required',
            'freelance' => 'required'
        ]);
        if ($request->hasFile('avatar')) {
            $formFields['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }
      
        profile::first()->update($formFields);
        Alert::success('Profile Updated Successfully');

        return redirect()->back();
    }
}
