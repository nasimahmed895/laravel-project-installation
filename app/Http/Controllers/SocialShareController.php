<?php

namespace App\Http\Controllers;

use Jorenvh\Share\Share;
use Illuminate\Http\Request;

class SocialShareController extends Controller
{
    public function share()
    {
        $twitter =  Share::page('http://jorenvanhocht.be', 'Your share text can be placed here')->twitter();
        return view('frontend.pages.job_details', compact('twitter'));
    }
}