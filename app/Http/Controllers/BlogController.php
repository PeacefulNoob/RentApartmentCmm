<?php

namespace App\Http\Controllers;

use App\Blog;
use Validator;
use Auth;
use DB;
use Gate;
use Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;


class BlogController extends Controller
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
        
        $blogs = Blog::all();
         return view('admin.allBlog',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.createBlog');
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

        $file = $request->file('photo');
        $extension = $file->getclientOriginalExtension();
        $size = $file->getSize();
        $rand = Str::random(4);
        $photo_name = 'news-' . time() . '' . $rand . '.' . $extension;
        $path = 'assets/images/news/'. $photo_name;
        Image::make($file)->encode('jpg', 75)->resize(1200, null, function($constraint) {$constraint->aspectRatio();}) ->save($path);

        // Create 
        $post = new Blog;
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->image = $path;
        $post->user_id =  $userId;
        $post->save();


        return redirect()->back()->with('success', 'Blog post addded');
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('blog.editBlog',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
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

        $file = $request->file('photo');
        $extension = $file->getclientOriginalExtension();
        $size = $file->getSize();
        $rand = Str::random(4);
        $photo_name = 'news-' . time() . '' . $rand . '.' . $extension;
        $path = 'assets/images/news/'. $photo_name;
        Image::make($file)->encode('jpg', 75)->resize(1200, null, function($constraint) {$constraint->aspectRatio();}) ->save($path);

        DB::table('blogs')->where('id', $id)->update([
            'title' => $request->title,
            'photo' => $request->path,
            'description' => $request->description,
        ]);
        
        return redirect()->back()->with('success', 'Blog post updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->back()->with('success', 'News post ' .$blog->title.' deleted.');
    
    }
}
