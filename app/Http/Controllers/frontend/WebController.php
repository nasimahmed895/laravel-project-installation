<?php

namespace App\Http\Controllers\frontend;


use Share;
use Validator;
use App\Models\Career;
use App\Models\Client;
use App\Models\Featured;
use App\Models\Applicant;
use App\Models\ContactUs;

use Illuminate\Http\Request;
use function Termwind\render;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class WebController extends Controller
{
    public function index()
    {

        return view('frontend.pages.index');
    }
}
