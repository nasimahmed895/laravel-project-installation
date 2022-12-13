<?php

namespace App\Http\Controllers\backend\job;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class JobePositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $career = Career::get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.job_position.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->input();
        $validator = \Validator::make($request->all(), [

            'title' => 'required|string|max:191',
            'company_name' => 'required',
            'location' => 'required',
            'vacancy' => 'required',
            'address' => 'required',
            'work_level' => 'required',
            'experience' => 'required',
            'job_time' => 'required',
            'salary' => 'required',
            'overview' => 'required',
            'requirements' => 'required',
            'overview_list' => 'required',
            'status' => 'required',

        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $overview_lists = [];
        foreach ($request->overview_list as $key => $value) {
            if ($value != null) {
                $overview_lists[] = [
                    'list' => $value,
                ];
            }
        }

        $job = new Career();
        $job->title = $request->title;
        $job->slug = Str::slug($request->title, '-') . '-' . uniqid();
        $job->company_name = $request->company_name;
        $job->location = $request->location;
        $job->vacancy = $request->vacancy;
        $job->date =  \Carbon\Carbon::parse($request->date)->timestamp;
        $job->address = $request->address;
        $job->work_level = $request->work_level;
        $job->experience = $request->experience;
        $job->job_time = $request->job_time;
        $job->salary = $request->salary;
        $job->overview = $request->overview;
        $job->requirements = $request->requirements;
        $job->overview_list =  json_encode($overview_lists);
        $job->status = $request->status;
        $job->save();

        return redirect()->back()->with('success', _lang('Information has been added success.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}