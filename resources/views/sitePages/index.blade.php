@extends('layouts.master')

@section('content')
@include('components.modal_covid')
<div class="homeMain">
    <div class="hero">
        <div class="hero-image">
            <div class="hero-text">
                <h1 style="font-size:50px">TAGLINE GOES HERE</h1>

            </div>
        </div>
    </div>
    <div class="properties my-5">
        <h2>Special price</h2>
        <p class="pgrey mb-1 mt-3">Review COVID-19 travel restrictions before you book. <a href=""
                style="text-decoration:underline;">Learn more</a></p>
        <div class="row specialProperties" style="margin-bottom: 30px;">
            <?php
            $colcount = count($propertiesS);
            $j = 1;
            ?>
            @forelse($propertiesS as $property)
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 my-3">

                    <div class="property">
                        <div class="image-placeholder">
                            {{-- /// --}}
                            <div class="owl-navigation owl-carousel gallery_owl owl-theme">
                                @foreach($property->images as $image)
                                    <img src="/assets/images/property_images/{{ $image->image }}" class="property_slide" alt="">
                                @endforeach
                            </div>

                            {{-- /// --}}
                            <img class="map_icon" src="/assets/images/google-maps.svg" alt="">
                            <div class="peoples">
                                <h6>{{ $property->persons }}x</h6>
                                <img src="poepe" alt="">
                            </div>
                        </div>


                        <div class="property-title-top">
                            <div class="property-location py-1">
                                <img src="/assets/images/iconfinder_pin_293694.svg" class="" alt="">
                                {{ $property->location->city }} ,      {{ $property->street }}

                            </div>
                            <div class="property-type py-1">
                                <img src="ikonica" class="amenityHome" alt="">
                                {{ $property->propertyType->title }}
                            </div>

                        </div>

                            <div class="property-title py-1">
                                <a href="/properties/{{ $property->id }}">

                                <h5>{{ $property->title }}</h5>
                                 </a>
                                <p> {{ $property->price }}  / night</p>
                            </div>
                      
                        @php
                            $amenities = $property->amenities()->get();
                            $colcount = count($propertiesS);
                            $k = 1;

                        @endphp
                        @foreach($amenities as $amenitie)
                            <img src="/assets/images/{{ $amenitie->photoUrl }}" class="amenityHome"
                                alt={{ $amenitie->photoUrl }}>
                            <?php
                                        if ($k++ == 4)
                                            break;
                                        ?>
                        @endforeach
                    </div>

                </div>
                <?php
                if ($j++ == 8)
                    break;
                ?>
            @empty
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="property">
                        <div class="property-title">
                            <div>
                                <h4>Sorry, there are no special properties</h4>
                            </div>

                        </div>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
    <div class="all_aboutMne">
        <div class="aboutMne">
            <div class="text">
            <h1>ABOUT MONTENEGRO</h1>
            <p>Events / Festivals / Parties / Holidays
            </p> 
        </div>
        </div>
        <div class="paddinglr blogs_main">
            <div class="owl-navigation owl-carousel blogs_owl owl-theme ">
                @foreach($blogs as $blog)
                    <div class="card" style="border:none">
                        <img class="card-img-top" src="/assets/images/{{ $blog->image }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $blog->title }}</h5>
                            <p class="card-text">
                                @php

                                    echo substr($blog->description, 0, 135);
                                @endphp...
                            </p>
                        </div>
                        <div class="card-footer">
                        <p>  By {{$blog->user->name}} on {{ $blog->created_at }}</p> 
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
    <div class="coronaSection mt-5 py-5">
                <div class="covid-header">
                    <img src="/assets/images/covidIcon.svg" class="mr-2" alt="">
                    <h2 class="m-0">{{ $covid->title }}</h2>
                </div>
                <div class="covid-body my-4">
                    <p class="covid-text">
                        @php
                            echo substr($covid->subtitle, 0, 333);
                        @endphp...</p>
                        <a href="#" class=""  data-toggle="modal" data-target="#covid_modal">+ Read more details</a>
                        @can('admin')

                            <a href="{{ route('covids.edit',$covid->id) }}"><button
                                    type="button" class="btn btn-warning">Edit</button></a> </td>
                        @endcan
                </div>
       

    </div>
</div>
@endsection