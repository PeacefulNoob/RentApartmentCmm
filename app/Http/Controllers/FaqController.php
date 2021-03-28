<?php

namespace App\Http\Controllers;

use App\Faq;
use App\Blog;

use Illuminate\Http\Request;
use Validator;
use Auth;
use DB;
use Gate;

class FaqController extends Controller
{
 
    public function __construct()
    {

        $this->middleware('can:adman', ['except' => ['index']]);
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs= Faq::all();
        $blogs = Blog::all();

        return view ('sitePages.faq',compact('faqs','blogs'));

    }
    $classes = TrainingClass::whereHas('user', function($query) use ($type, $gender) {
        $query->whereIn('type', $type);
        $query->whereIn('gender' , $gender);
        })
    ->whereHas('sessions', function($query) use ($priceRange, $timeRange, $classDuration) {
    $query->whereBetween('price', $priceRange);
    $query->where('time_from', '>', gmdate("H:i:s", mktime($timeRange[0], 0, 0)));
    $query->whereRaw('(time_to_sec(time_to)/60)-(time_to_sec(time_from)/60) <=' . $classDuration[1]);
    $query->whereRaw( '(time_to_sec(time_to)/60)-(time_to_sec(time_from)/60) >=' . $classDuration[0]);
})
    //->where('name', 'like', $search)
    ->whereRaw($targetRadius[1] . ' * acos(cos(radians(' . $userLat . ')) * cos(radians(lat)) *
            cos(radians(lng) - radians(' . $userLng . ')) +
            sin(radians(' . $userLat . ')) * sin(radians(lat))) <' . $targetRadius[1])
    ->whereIn('indoor_outdoor' , $areaType)
    ->with('user', 'location', 'sessions', 'media')->get();
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
              //  $this->authorize('adman', App\Faq::class);

        return view('admin.createFaq');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userId = Auth::id();

        $validator = Validator::make($request->all(), [
            'answer' => 'required|string',
            'question' => 'required|string',
           

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        // Create ad
        $faq = new Faq;
        $faq->question = $request->input('question');
        $faq->answer = $request->input('answer');
        $faq->user_id =  $userId;
        $faq->save();


        return redirect()->back()->with('success', 'Faq uspesno dodat');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Faq  $Faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Faq  $Faq
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Gate::denies('adminPriv')){
            return redirect(route('admin.users.index'));
        }
        $faq = Faq::find($id);
        return view('admin.editFaq',compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Faq  $Faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'answer' => 'required|string',
            'question' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        DB::table('faqs')->where('id', $id)->update([
            'answer' => $request->answer,
            'question' => $request->question,
        ]);
        
        return redirect()->back()->with('success', 'Faq uspesno azuriran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Faq  $Faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        if(Gate::denies('adminPriv')){
            return redirect(route('admin.users.index'));
        }
            $faq->delete();
            return redirect()->back()->with('success', 'Faq uspesno obrisan');
        
    }
}
