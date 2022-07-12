<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ResumeController extends Controller
{
    // Store resume data

    public function StoreResumeDetails(Request $request)
    {
        $formFields = $request->validate([
            'type' => 'required',
            'title' => 'required',
            'location' => 'required',
            'description' => 'required',
            'start' => 'required',
            'end' => 'required'

        ]);
        Resume::create($formFields);
        Alert::success('Resume Created Successfully');
        return redirect()->back();
    }
// Edit Resume
    public function EditResumeDetails(Request $request, Resume $resume) {
        $formFields = $request->validate([
            'type' => 'required',
            'title' => 'required',
            'location' => 'required',
            'description' => 'required',
            'start' => 'required',
            'end' => 'required'

        ]);

        // dd($id);
        $resume->update($formFields);
        Alert::success('Resume Updated Successfully');
        return redirect()->back();
    }
}
