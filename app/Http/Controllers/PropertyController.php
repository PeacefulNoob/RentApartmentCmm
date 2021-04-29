<?php

namespace App\Http\Controllers;

use App\FullCalendar as FullCalendar;
use App\Property;
use App\Blog;
use App\Blog_rus;
use App\PropertyImage;
use Illuminate\Http\Request;
use Gate;
use DB;
use App\Location;
use App\PropertyType;
use Validator;
use App\Amenity;
use Intervention\Image\Facades\Image;
use App\PropertyFilters;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('can:adman')->except('show', 'showAllPropertyFilter', 'showPropertyByFilter');
    }
    public function index()
    {
        $properties = Property::all();
        return view('admin.properties', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locations = Location::all();
        $types = PropertyType::all();
        $amenities = Amenity::all();
        return view('admin.property.create', compact('locations', 'types', 'amenities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'file[]' => 'mimes:mp4,mov,ogg,jpeg,png,jpg,svg',
            'cover-photo' => 'mimes:mp4,mov,ogg,jpeg,png,jpg,svg',
            'description' => 'required',
            'persons' => 'required',
            'price' => 'required',
            'size' => 'required',
            'floor' => 'required',
            'room_count' => 'required',
            /*             'google_maps' => 'required',
 */          'street' => 'required',
            'location_id' => 'required',
            'property_type_id' => 'required',
            'calendar_id' => 'required',


        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $property = new Property;
        $property->title = $request->input('title');
        $property->description = $request->input('description');
        $property->price = $request->input('price');
        $property->persons = $request->input('persons');
        $property->size = $request->input('size');
        $property->floor = $request->input('floor');
        $property->room_count = $request->input('room_count');
        $property->location_id = $request->input('location_id');
        $property->google_maps = $request->input('google_maps');
        $property->street = $request->input('street');
        $property->calendar_id = $request->input('calendar_id');

        $property->property_type_id = $request->input('property_type_id');
        $property->user_id = auth()->user()->id;
        $property->save();

        /*  $request= array_merge($request->all(),[
            "image" => $fileNameToStore,
            "user_id" => auth()->user()->id,
        ]);
        $property1 = Property::create($request); */
        if ($request->hasFile('file') && $request->hasFile('cover-photo')) {
            foreach ($request->file('file') as $image) {
                $name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $fileName = time() . '_' . Str::random(5) . '.' . $extension;
                Image::make($image)->encode('jpg', 75)->resize(1200, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('assets/images/property_images/' . $fileName);
                $data[] = $name;
                $image1 = new Image;
                $image1->title = json_encode($data);
                // cover photo
                $coverPhoto = $request->file('cover-photo');
                $name1 = $coverPhoto->getClientOriginalName();
                $extension1 = $coverPhoto->getClientOriginalExtension();
                $fileName1 = time() . '_' . Str::random(5) . '.' . $extension1;
                Image::make($coverPhoto)->encode('jpg', 75)->resize(1200, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('assets/images/property_images/' . $fileName1);
                // $data[] = $name1;
                // $image2 = new Image;
                // $image2->title = json_encode($data);

                DB::table('property_images')
                    ->insert(
                        [
                            'image' => $fileName,
                            'property_id' => $property->id,
                            'cover_photo' => $fileName1
                        ]
                    );
            }
        }
        $property->amenities()->sync((array)$request->input('amenity'));

        return redirect()->back()->with('success', 'Success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show($lang, $id)
    {
        $images = DB::table('property_images')->where('property_id', '=', $id)->get();
        $properties = Property::orderBy('created_at', 'DESC')->get();
        $property = Property::findOrFail($id);
        // $cover_photo = DB::table('property_images')->where('property_id', '=', $id)->first();
        if (app()->getLocale() == 'en') {
            $blogs = Blog::orderBy('id', 'DESC')->get();
        } else {

            $blogs = Blog_rus::orderBy('id', 'DESC')->get();
        }

        $calendar = FullCalendar::getCalendar($property->calendar_id);
        return view('sitePages.property', compact('property', 'properties', 'images', 'calendar', 'blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property, Request $request)
    {
        $locations = Location::all();
        $types = PropertyType::all();
        $amenities = Amenity::all();
        $property = Property::findOrFail($property->id);
        $image = PropertyImage::where('property_id', $property->id)->paginate(8);

        return view('admin.property.edit', compact('property', 'locations', 'types', 'amenities', 'image'));
    }
    public function changeCoverPhoto(Request $request)
    {
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        if (Gate::denies('edit-property')) {
            return redirect(route('admin.users.index'));
        }
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'file[]' => 'mimes:mp4,mov,ogg,jpeg,png,jpg,svg',
            'description' => 'required',
            'persons' => 'required',
            'price' => 'required',
            'size' => 'required',
            'floor' => 'required',
            'room_count' => 'required',
            /*          'google_maps' => 'required',
 */         'street' => 'required',
            'location_id' => 'required',
            'property_type_id' => 'required',
            'calendar_id' => 'required',

        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        Property::find($property->id)->update($request->all());
        /* DB::table('properties')->where('id', $property->id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'size' => $request->size,
            'floor' => $request->floor,
            'room_count' => $request->roomcount,
            'location_id' => $request->location,
            'street' => $request->street,
            'property_type_id' => $request->type,
            'google_maps' => $request->google_maps,
            'user_id' => auth()->user()->id,
    ]);  */
        if ($request->hasFile('file')) {
            DB::table('property_images')->where('property_id', $property->id)->delete();
            foreach ($request->file('file') as $image) {
                $name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $fileName = time() . '_' . Str::random(5) . '.' . $extension;
                Image::make($image)->encode('jpg', 75)->resize(1200, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('assets/images/property_images/' . $fileName);
                $data[] = $name;
                $image1 = new Image;
                $image1->title = json_encode($data);
                DB::table('property_images')
                    ->insert(
                        [
                            'image' => $fileName,
                            'property_id' => $property->id
                        ]
                    );
            }
        }
        if ($request->hasFile('cover-photo')) {
            // DB::table('property_images')->where('property_id',$property->id)->delete();

            $coverPhoto = $request->file('cover-photo');
            $name1 = $coverPhoto->getClientOriginalName();
            $extension1 = $coverPhoto->getClientOriginalExtension();
            $fileName1 = time() . '_' . Str::random(5) . '.' . $extension1;
            Image::make($coverPhoto)->encode('jpg', 75)->resize(1200, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save('assets/images/property_images/' . $fileName1);
            $data[] = $name1;
            $image1 = new Image;
            $image1->title = json_encode($data);
            DB::table('property_images')->updateOrInsert(['property_id' => $property->id], ['cover_photo' => $fileName1]);
        }


        $property->amenities()->sync((array)$request->input('amenity'));

        return redirect()->back()->with('success', 'Ažuriranje uspješno');
    }


    public function favourite($id)
    {
        Property::where('id', $id)
            ->update(['favourites' => 1]);
        return back()->with('success', 'Property is in favourites group now!');
    }

    public function notFavourite($id)
    {
        Property::where('id', $id)
            ->update(['favourites' => 0]);

        return back()->with('success', 'Property is removed from favourites group!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        if (Gate::denies('delete-property')) {
            return redirect(route('admin.users.index'));
        }

        $property->amenities()->detach();
        $property->delete();
        return redirect()->route('admin.users.index');
    }


    public function delete(Request $request, Property $property)
    {
        if ($request) {
            DB::table('property_images')->where('id', $request->id)->delete();
        }
        return redirect()->back()->with('success', 'Birsanje je uspješno');
    }

    public function showAllPropertyFilter()
    {


        return view(
            'sitePages.rentProperty',
            [
                'properties' => Property::all(),
                'cities' => Location::all(),
                'types' => PropertyType::all(),
                'blogs' => Blog::all()
            ]
        );
    }

    public function showPropertyByFilter(PropertyFilters $filters)
    {
        session()->flashInput($filters->filters());
        return view(
            'sitePages.rentProperty',
            [
                'properties' => Property::filter($filters)->get(),
                'cities' => Location::all(),
                'types' => PropertyType::all(),
                'blogs' => Blog::all()

            ]
        );
    }
    /*         public function uploadImage(Request $request) { 
            if($request->hasFile('upload')) {
                       $originName = $request->file('upload')->getClientOriginalName();
                       $fileName = pathinfo($originName, PATHINFO_FILENAME);
                       $extension = $request->file('upload')->getClientOriginalExtension();
                       $fileName = $fileName.'_'.time().'.'.$extension;
                   
                       $request->file('upload')->move(public_path('images/news'), $fileName);
              
                       $CKEditorFuncNum = $request->input('CKEditorFuncNum');
                       $url = asset('/assets/images/news'.$fileName); 
                       $msg = 'Image uploaded successfully'; 
                       $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
                          
                       @header('Content-type: text/html; charset=utf-8'); 
                       echo $response;
                   }
            } */
}
