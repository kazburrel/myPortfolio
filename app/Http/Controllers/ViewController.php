<?php

namespace App\Http\Controllers;

use App\Models\ContactMe;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\profile;
use App\Models\Resume;
use App\Models\Skills;
use Illuminate\Http\Request;

class ViewController extends Controller
{

    // Index for the main website
    public function MainIndexView()
    {
        $profile = profile::first();
        $skills = Skills::all();
        $resumes = Resume::all();
        $portfolios = Portfolio::all();
        $portfolio_cats = PortfolioCategory::all();
        return view('main.index', [
            'profile' => $profile, 'skills' => $skills,
            'resumes' => $resumes, 'portfolios' => $portfolios, 'portfolio_cats' => $portfolio_cats
        ]);
    }

    // View for the Sign-Up
    public function SignUpView()
    {
        return view('admin.sign-up');
    }


    // View for the Sign-Up
    public function SignInView()
    {
        return view('admin.sign-in');
    }


    // Index view for the admin side
    public function AdminIndexView()
    {
        return view('admin.dashboard');
    }

    // Contact View
    public function ContactView()
    {
        $contactMe = ContactMe::all();
        return view('admin.contact', ['contactMe' => $contactMe]);
    }

    // View for profile update through Admin
    public function AdminProfileView()
    {
        $profile = profile::first();
        return view('admin.profile', ['profile' => $profile]);
    }

    // View for Resume Update through Admin
    public function AdminResumeView()
    {
        $resumes = Resume::all();
        $profile = profile::first();
        return view('admin.resume', ['resumes' => $resumes, 'profile' => $profile]);
    }

    // View for Skill Update through Admin
    public function AdminSkillsView()
    {
        $skills = Skills::paginate(4);
        $profile = profile::first();
        return view('admin.skills', ['skills' => $skills, 'profile' => $profile]);
    }

    // View for portfolio
    public function AddPortfolioView()
    {

        $category = PortfolioCategory::all();
        $portfolios = Portfolio::all();
        return view('admin.portfolio', ['category' => $category, 'portfolios' => $portfolios]);
    }

    public function EmailView()
    {

        return view('email');
    }
}
