<?php

namespace App\Http\Controllers;

use App\Blog_rus;
use Validator;
use Auth;
use DB;
use Gate;
use Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class BlogRusController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:adman')->except('show');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog_rus::all();
        return view('admin.allBlog_rus',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog_rus.createBlog');

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
            'title' => 'required',
            'photo' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        if ($request->hasFile('photo')) 
        {
        $file = $request->file('photo');
        $extension = $file->getclientOriginalExtension();
        $size = $file->getSize();
        $rand = Str::random(4);
        $photo_name = 'news-' . time() . '' . $rand . '.' . $extension;
        $path = 'assets/images/news/'. $photo_name;
        Image::make($file)->encode('jpg', 75)->resize(1200, null, function($constraint) {$constraint->aspectRatio();}) ->save($path);
        }
        else
        {
            $path= '';
        }
        // Create 
        $post = new Blog_rus;
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->image = $path;
        $post->user_id =  $userId;
        $post->save();


        return redirect()->back()->with('success', 'Blog_rus post addded');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog_rus  $blog_rus
     * @return \Illuminate\Http\Response
     */
    public function show(Blog_rus $blog_rus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog_rus  $blog_rus
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $blog = Blog_rus::find($id);
        return view('blog_rus.editBlog',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog_rus  $blog_rus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $blog = Blog_rus::find($id); 
        if ($request->hasFile('photo')) 
        {
        $file = $request->file('photo');
        $extension = $file->getclientOriginalExtension();
        $size = $file->getSize();
        $rand = Str::random(4);
        $photo_name = 'news-' . time() . '' . $rand . '.' . $extension;
        $path = 'assets/images/news/'. $photo_name;
        Image::make($file)->encode('jpg', 75)->resize(1200, null, function($constraint) {$constraint->aspectRatio();}) ->save($path);
        }
        else
        {
            $path= $blog->image;
        }
        $blog->update([
            'title' => $request->title,
            'image' => $path,
            'description' => $request->description,
        ]);
        
        return redirect()->back()->with('success', 'Blog post updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog_rus  $blog_rus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog_rus::find($id); 
        $blog->delete();
        return redirect()->back()->with('success', 'News post ' .$blog->title.' deleted.');
    
    }
}
