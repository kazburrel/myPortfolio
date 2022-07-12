<?php

namespace App\Http\Controllers;

use App\Mail\ContactMe as MailContactMe;
use App\Models\ContactMe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    public function StoreMesaageDetails(Request $request)
    {
        $FormFields = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        ContactMe::create($FormFields);
        Mail::to('oegbosionu@gmail.com')->send(new MailContactMe($FormFields));
        return redirect('/#contact')->with('message', 'Thanks for reaching out!');
    }

    public function DestroyMessage(ContactMe $contactDets)
    {
        $contactDets->delete();
        Alert::success('Skill Deleted Successfully');
        return redirect()->back();
    }
}
