<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resume;
use App\Models\User;

class ResumeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('publicUrl');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user()->id;
        $resume = Resume::with('user')->where('user_id','=',$user)->get();

        return view('resumes.index', compact('resume'));
    }

    //Public URL method
    public function publicUrl($user)
    {
        $u = User::where('username',$user)->get();
        $resume = Resume::with('user')->where('user_id','=',$u[0]['id'])->get();

        return view('resumes.publicUrl.index', compact('resume'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $resume = Resume::findOrFail($id);

        if($request->work_experience == null || $request->education == null){
            return back()->with('error', 'You must fill in your Work Experience and Education record.');
        }

        $validatedDate = $request->validate([
            'work_experience' => 'required|string',
            'education' => 'required|string',
        ]);

        $resume->work_experience = $request->work_experience;
        $resume->education = $request->education;
        $resume->save();

        return back()->with('status', 'Record has been updated.');
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
