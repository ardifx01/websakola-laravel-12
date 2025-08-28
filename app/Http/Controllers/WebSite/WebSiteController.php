<?php

namespace App\Http\Controllers\WebSite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebSiteController extends Controller
{
    public function other()
    {
        return view('website.other');
    }
    public function alumni()
    {
        return view('website.alumni');
    }

    public function apply_now()
    {
        return view('website.apply-now');
    }

    public function campus_life()
    {
        return view('website.campus-life');
    }

    public function contacts()
    {
        return view('website.contacts');
    }

    public function current_students()
    {
        return view('website.current-students');
    }

    public function events()
    {
        return view('website.events');
    }

    public function faculty_and_staff()
    {
        return view('website.faculty-and-staff');
    }

    public function future_students()
    {
        return view('website.future-students');
    }

    public function help()
    {
        return view('website.help');
    }

    public function programs()
    {
        return view('website.programs');
    }

    public function research()
    {
        return view('website.research');
    }

    public function signin()
    {
        return view('website.signin');
    }
}
