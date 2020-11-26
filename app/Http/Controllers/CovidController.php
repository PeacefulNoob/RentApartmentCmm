<?php

namespace App\Http\Controllers;

use App\Covid;
use Validator;
use Auth;
use DB;
use Gate;
use Illuminate\Http\Request;

class CovidController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Covid  $covid
     * @return \Illuminate\Http\Response
     */
    public function show(Covid $covid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Covid  $covid
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $covid = Covid::find($id);
        return view('covid.editCovid',compact('covid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Covid  $covid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        DB::table('covids')->where('id', $id)->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
        ]);
        
        return redirect()->back()->with('success', 'Covid section updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Covid  $covid
     * @return \Illuminate\Http\Response
     */
    public function destroy(Covid $covid)
    {
        //
    }
}
