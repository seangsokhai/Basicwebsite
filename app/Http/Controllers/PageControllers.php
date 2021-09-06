<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageControllers extends Controller
{
    //
    public  function getHome() {
        return view('Home');
    }
    public  function getAbout() {
        return view('about');
    }
    public  function getContact() {
        return view('contact');
    }
}
