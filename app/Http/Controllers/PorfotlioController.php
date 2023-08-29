<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\PortfolioCategory;
use RealRashid\SweetAlert\Facades\Alert;

class PorfotlioController extends Controller
{
    public function StoreCat(Request $request)
    {

        $FormFields = $request->validate([
            'cat_name' => ['required', Rule::unique('portfolio', 'cat_name')]
        ]);
        PortfolioCategory::create($FormFields);
        Alert::success('Portfolio Category Created Successfully');
        return redirect()->back();
    }

    public function StoreProject(Request $request)
    {

        $FormFields = $request->validate([
            'pro_type' => 'required',
            'pro_name' => 'required',
            'pro_des' => 'required',
            'pro_url' => 'required',
            'pro_img' => 'required'
        ]);

        if ($request->hasFile('pro_img')) {
            $FormFields['pro_img'] = $request->file('pro_img')->store('ProImages', 'public');
        }

        Portfolio::create($FormFields);
        Alert::success('Portfolio Created Successfully');
        return redirect()->back();
    }

    // Update Portfolio
    public function UpdateProject(Request $request, Portfolio $portfolio)
    {
        $FormFields = $request->validate([
            'pro_type' => 'required',
            'pro_name' => 'required',
            'pro_des' => 'required',
            'pro_url' => 'required',
            'pro_img' => 'required'
        ]);

        if ($request->hasFile('pro_img')) {
            $FormFields['pro_img'] = $request->file('pro_img')->store('ProImages', 'public');
        }
        $portfolio->update($FormFields);
        Alert::success('Portfolio Updated Successfully');
        return redirect()->back();
    }


    // Delete Project
    public function DestroySkill(Portfolio $portfolio)
    {
        $portfolio->delete();
        Alert::success('Project Deleted Successfully');
        return redirect()->back();
    }
}
