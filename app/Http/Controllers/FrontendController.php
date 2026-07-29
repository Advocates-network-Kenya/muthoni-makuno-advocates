<?php

namespace App\Http\Controllers;

use App\Models\Advocate;
use App\Models\Areaoflaw;

//use Illuminate\Support\Str;


class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $partners = Advocate::query()
            ->oldest()
            ->take(4)
            ->get();
        $practiceareas =Areaoflaw::oldest()->paginate(6);
        $title = 'Welcome to mmkAdvocates LLp';
        return view('frontend.pages.index', ['title' => $title, 'practiceareas' => $practiceareas, 'partners' => $partners]);
    }

    /* Pages  */
    //About Us 
    public function aboutus()
    {
        //
        $title = 'About Us';
        return view('frontend.pages.about', ['title' => $title]);
    }

    //Practice Areas
    public function practiceareas()
    {
        //
        $practiceareas = Areaoflaw::oldest()->paginate(20);
        $title = 'Practice Areas';
        return view('frontend.pages.practice', [
            'title' => $title,
            'practiceareas' => $practiceareas
        ]);
    }

    //Our Team
    public function ourteam()
    {
        //
        $title = 'Our Team';
        //team where role = partner
        $partners = Advocate::oldest()->paginate(6); //get all advocates order by oldest and paginate
        //team where role = associate
        $associates = Advocate::where('role', 'associate')->paginate(6);
        //team where role = lawyer
        $lawyers = Advocate::where('role', 'lawyer')->paginate(6);
        //team where role = other
        $others = Advocate::where('role', 'other')->paginate(6);
        //team where role =paralegal
        $paralegals = Advocate::where('role', 'paralegal')->paginate(6);

        return view('frontend.pages.team',compact('title', 'partners', 'associates', 'lawyers', 'others', 'paralegals'));
    }


    //Contact Us
    public function contact()
    {
        //
        $title = 'Contact  Us';
        return view('frontend.pages.contact', ['title' => $title]);
    }

    //Consultation
    public function consultation()
    {
        //
        $title = 'consultation';
        return view('frontend.pages.consultation', ['title' => $title]);
    }

    //apointment
    public function appointment()
    {
        //
        $title = 'Apointment';
        return view('frontend.pages.appointment', ['title' => $title]);
    }


//Practice Area Details
    public function practiceareadetails($slug)
    {
        //
        $practicearea = Areaoflaw::where('slug', $slug)->firstOrFail();
        $otherareas = Areaoflaw::oldest()->get();
        $title = $practicearea->title;
        return view('frontend.pages.practice-details', ['title' => $title, 'practicearea' => $practicearea, 'otherareas' => $otherareas]);
    }

//  team detail
    public function teamdetails($slug)
    {
        //
        $team = Advocate::where('slug', $slug)->firstOrFail();
        $title = $team->name;
        return view('frontend.pages.team-details', ['title' => $title, 'team' => $team]);
    }

    /* end Pages */

    
}
