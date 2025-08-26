<?php

namespace App\Http\Controllers\WebSite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebSiteController extends Controller
{
    public function alumni()
    {
        return view('pages.website.alumni');
    }

    public function apply_now()
    {
        return view('pages.website.apply-now');
    }

    public function campus_life()
    {
        return view('pages.website.campus-life');
    }

    public function contacts()
    {
        return view('pages.website.contacts');
    }

    public function current_students()
    {
        return view('pages.website.current-students');
    }

    public function events()
    {
        return view('pages.website.events');
    }

    public function faculty_and_staff()
    {
        return view('pages.website.faculty-and-staff');
    }

    public function future_students()
    {
        return view('pages.website.future-students');
    }

    public function help()
    {
        return view('pages.website.help');
    }

    public function programs()
    {
        return view('pages.website.programs');
    }

    public function research()
    {
        return view('pages.website.research');
    }

    public function signin()
    {
        return view('pages.website.signin');
    }
}
