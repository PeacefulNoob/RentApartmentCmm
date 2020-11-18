<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Blog;
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
       $propertiesS = Property::where('favourites', '=', '1')->get();
       $blogs = Blog::all();
       $cities = Location::all();
       $types = PropertyType::all();
        return view ('sitePages.index',compact('properties','propertiesS','covid','blogs','cities','types'));
    }
    public function transfers()
    {
       $covid = Covid::find('1')->first();
       $properties = Property::all();
       $propertiesS = Property::where('special', '=', '1')->get();
       $blogs = Blog::all();

        return view ('sitePages.transfers',compact('properties','propertiesS','covid','blogs'));
    }
    public function excoursions()
    {
       $covid = Covid::find('1')->first();
       $properties = Property::all();
       $propertiesS = Property::where('special', '=', '1')->get();
       $blogs = Blog::all();

        return view ('sitePages.excoursions',compact('properties','propertiesS','covid','blogs'));
    }
    public function rentCar()
    {
       $covid = Covid::find('1')->first();
       $properties = Property::all();
       $propertiesS = Property::where('special', '=', '1')->get();
       $blogs = Blog::all();

        return view ('sitePages.rentCar',compact('properties','propertiesS','covid','blogs'));
    }
    public function rentYacht()
    {
       $covid = Covid::find('1')->first();
       $properties = Property::all();
       $propertiesS = Property::where('special', '=', '1')->get();
       $blogs = Blog::all();

        return view ('sitePages.rentYacht',compact('properties','propertiesS','covid','blogs'));
    }
    public function about()
    {

        return view ('sitePages.about');
    }

    public function news()
    {
        $blogs = Blog::all();
        return view ('sitePages.news',compact('blogs'));
    }
    public function single_news($id)
    {
        $blog = Blog::find($id);
        $blogs = Blog::all();
        return view ('sitePages.single_news',compact('blog','blogs'));
    }
    
}
