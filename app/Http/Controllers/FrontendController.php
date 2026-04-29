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
        $practiceareas =Areaoflaw::oldest()->paginate(6);
        $title = 'Welcome to mmkAdvocates LLp';
        return view('frontend.pages.index', ['title' => $title, 'practiceareas' => $practiceareas]);
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
        $practiceareas = Areaoflaw::oldest()->paginate(6);
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
        $partners = Advocate::where('role', 'partner')->paginate(6);
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






    /* end Pages */

    
}
