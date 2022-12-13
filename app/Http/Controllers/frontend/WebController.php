<?php

namespace App\Http\Controllers\frontend;


use App\Models\Career;
use App\Models\Client;
use App\Models\Featured;
use App\Models\Applicant;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Validator;

use function Termwind\render;
use App\Http\Controllers\Controller;

class WebController extends Controller
{
    public function index()
    {
        $featured = Featured::all();
        $client = Client::all();
        return view('frontend.pages.index', compact('featured', 'client'));
    }

    public function about()
    {
        return view('frontend.pages.about');
    }
    public function case_study()
    {
        return view('frontend.pages.Casestudy');
    }
    public function case_study_view()
    {
        return view('frontend.pages.casestydyview.view');
    }
    public function how_we_work()
    {
        return view('frontend.pages.howwework');
    }
    public function project_base()
    {
        return view('frontend.pages.projectbase');
    }
    public function dedicated_team()
    {
        return view('frontend.pages.hirededicatedteam');
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }
    public function career()
    {
        $career = Career::all();
        return view('frontend.pages.career', compact('career'));
    }
    public function job_details(request $request, $id)
    {
        $career = Career::where("slug", '=', $id)->first();
        return view('frontend.pages.job_details', compact('career'));
    }
    public function basicInformation(request $request, $id)
    {
        $career = Career::where("slug", '=', $id)->first();
        return view('frontend.pages.basicInformation', compact('id'));
    }
    public function apply_now(request $request)
    {


        $Applicant = new Applicant();
        $Applicant->name = $request->name;
        $Applicant->email = $request->email;
        $Applicant->number = $request->number;
        //$Applicant->file = $request->file;
        $Applicant->application = $request->application;
        $Applicant->slug = $request->slug;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = rand() . '.' .  $file->getClientOriginalName();
            $file->move(public_path('uploads/images/application'), $filename);
            $Applicant->file = $filename;
        }
        $Applicant->save();

        if (!$request->ajax()) {
            return redirect('/')->with('success', _lang('Your application has been submitted successfully.'));
        } else {
            return response()->json(['result' => 'success', 'redirect' => route('index'), 'message', _lang('Your application has been submitted successfully.')]);
        }
    }
    public function uploadToServer(request $request)
    {
        $name = ' /^[A-Za-z .-]+$/';
        $email_valid = '/^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/';
        $validator = \Validator::make($request->all(), [

            'name' => 'required|regex:' . $name,
            'email' => 'required|email|regex:' . $email_valid,
            'message' => 'required',


        ]);

        if ($validator->fails()) {
            if ($request->ajax()) {
                return response()->json(['result' => 'error', 'message' => $validator->errors()->all()]);
            } else {
                return back()->withErrors($validator)->withInput();
            }
        }

        $contactUs = new ContactUs();
        $contactUs->name = $request->name;
        $contactUs->email = $request->email;
        $contactUs->link = $request->link;
        $contactUs->message = $request->message;
        $contactUs->meeting = $request->meeting;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = time() . '.' .  $file->getClientOriginalName();
            $file->move(public_path('uploads/images/contact'), $filename);
            $contactUs->image =  $filename;
        }
        $contactUs->save();

        if (!$request->ajax()) {
            return redirect('/')->with('success', _lang('Your application has been submitted successfully.'));
        } else {
            return response()->json(['result' => 'success',  'redirect' => route('index'), 'message' => 'Your application has been submitted successfully.']);
        }
    }
}