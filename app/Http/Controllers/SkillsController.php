<?php

namespace App\Http\Controllers;

use App\Models\Skills;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SkillsController extends Controller
{
    public function StoreSkillsDetails(Request $request)
    {
        $formFields = $request -> validate([
            'type'=>'required',
            'language'=>'required',
            'percentage'=>'required'
        ]);
        dd($formFields);
        Skills::create($formFields);
        Alert::success('Skills Created Successfully');
        return redirect()->back();
    }

    public function EditSkillsDetails(Request $request, Skills $skills)
    {
        $formFields = $request -> validate([
            'type'=>'required',
            'language'=>'required',
            'percentage'=>'required'
        ]);
        $skills->update($formFields);
        Alert::success('Skills Updated Successfully');
        return redirect()->back();
    }

    public function DestroySkill(Skills $skills)
    {
        $skills->delete();
        Alert::success('Skill Deleted Successfully'); 
        return redirect()->back();
    }
}

