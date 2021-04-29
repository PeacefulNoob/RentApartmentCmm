<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Blog;
use App\Blog_rus;
use App\Location;
use App\PropertyType;
use App\Covid;

use DB;

class SiteController extends Controller
{
    public function index()
    {
       $covid = Covid::find('1')->first();
       $properties = Property::all();
       $propId = Property::first();
    //    $cover_photo = DB::table('property_images')->where('property_id', '=',  $propId->id)->first();
       $propertiesS = Property::where('favourites', '=', '1')->get();
       if(app()->getLocale()== 'en'){
        $blogs = Blog::orderBy('id', 'DESC')->get();

        }else{

        $blogs = Blog_rus::orderBy('id', 'DESC')->get();

    }
       $cities = Location::all();
       $types = PropertyType::all();
        return view ('sitePages.index',compact('properties','propertiesS','covid','blogs','cities','types'));
    }
    public function transfers()
    {
       $covid = Covid::find('1')->first();
       $properties = Property::all();
       $propertiesS = Property::where('special', '=', '1')->get();
       if(app()->getLocale()== 'en'){
        $blogs = Blog::orderBy('id', 'DESC')->get();

        }else{

        $blogs = Blog_rus::orderBy('id', 'DESC')->get();

    }       return view ('sitePages.transfers',compact('properties','propertiesS','covid','blogs'));
    }
    public function excoursions()
    {
       $covid = Covid::find('1')->first();
       $properties = Property::all();
       $propertiesS = Property::where('special', '=', '1')->get();
       if(app()->getLocale()== 'en'){
        $blogs = Blog::orderBy('id', 'DESC')->get();

        }else{

        $blogs = Blog_rus::orderBy('id', 'DESC')->get();

    }
        return view ('sitePages.excoursions',compact('properties','propertiesS','covid','blogs'));
    }
    public function rentCar()
    {
       $covid = Covid::find('1')->first();
       $properties = Property::all();
       $propertiesS = Property::where('special', '=', '1')->get();
       if(app()->getLocale()== 'en'){
        $blogs = Blog::orderBy('id', 'DESC')->get();

        }else{

        $blogs = Blog_rus::orderBy('id', 'DESC')->get();

    }
        return view ('sitePages.rentCar',compact('properties','propertiesS','covid','blogs'));
    }
    public function rentYacht()
    {
       $covid = Covid::find('1')->first();
       $properties = Property::all();
       $propertiesS = Property::where('special', '=', '1')->get();
       if(app()->getLocale()== 'en'){
        $blogs = Blog::orderBy('id', 'DESC')->get();

        }else{

        $blogs = Blog_rus::orderBy('id', 'DESC')->get();

    }
        return view ('sitePages.rentYacht',compact('properties','propertiesS','covid','blogs'));
    }
    public function about()
    {
        if(app()->getLocale()== 'en'){
            $blogs = Blog::orderBy('id', 'DESC')->get();
    
            }else{
    
            $blogs = Blog_rus::orderBy('id', 'DESC')->get();
    
        }        return view ('sitePages.about',compact('blogs'));
    }
    public function terms()
    {
        if(app()->getLocale()== 'en'){
            $blogs = Blog::orderBy('id', 'DESC')->get();
    
            }else{
    
            $blogs = Blog_rus::orderBy('id', 'DESC')->get();
    
        }        return view ('sitePages.terms',compact('blogs'));
    }
    public function news()
    {
        if(app()->getLocale()== 'en'){
            $blogs = Blog::orderBy('id', 'DESC')->get();
    
            }else{
    
            $blogs = Blog_rus::orderBy('id', 'DESC')->get();
    
        }        return view ('sitePages.news',compact('blogs'));
    }
    public function single_news($lang,$id)
    {

        if(app()->getLocale()== 'en'){
            $blogs = Blog::orderBy('id', 'DESC')->get();
            $blog = Blog::find($id);

            }else{
            $blog = Blog_rus::find($id);
            $blogs = Blog_rus::orderBy('id', 'DESC')->get();
    
        }        return view ('sitePages.single_news',compact('blog','blogs'));
    }
    
}
