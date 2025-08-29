<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class FrontController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function sponsorship()
    {
        return view('pages.sponsorship');
    }

    public function partnership()
    {
        return view('pages.partnership');
    }

    public function mentor()
    {
        return view('pages.mentor');
    }

    public function coach()
    {
        return view('pages.coach');
    }

    public function donation()
    {
        return view('pages.donation');
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function blogDetail()
    {
        return view('pages.details_blog');
    }
}
