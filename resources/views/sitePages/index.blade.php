@extends('layouts.master')

@section('content')
@include('components.modal_covid')
<div class="homeMain">
    <div class="hero">
        <div class="hero-image">
            <div class="hero-text">
                <h1 c>Rent real estate in Montenegro!</h1>
                    <form method="GET" action="{{ route('filter.properties') }}" style="width: 100%; display: flex; flex-direction: column;" >
                    @csrf
                        <div class="form-row m-0">
                            <div class=" col-md-6 searchForm">
<!--                                 <label for="city" class="labelNew">City</label>
 -->                                        <select name="city" id="city" class="form-control">
                                    <option value="" disabled selected>Where would you like to rent real estate?</option>
                                            @foreach($cities as $city)
                                            <option value="{{$city->id}}" {{ (old("city") == $city->id ? "selected":"") }}>{{$city->city}}</option>
                                            @endforeach
                                        </select>
                            </div>
                            <div class=" col-md-5 searchForm">
<!--                             <label for="type" class="labelNew">Property type</label>
 -->                                    <select name="type"  id="type" class="form-control" >
                                            <option value="" disabled selected>Pick property type that fits you.</option>
                                        @foreach($types as $type)
                                        <option value="{{$type->id}}" {{ (old("type") == $type->id ? "selected":"") }}>{{$type->title}}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class=" col-md-1 searchForm">

                                    <div class="button-form-submit">
                                        <button class="btn btn-submit">GO</button>
                                    </div>
                                    </div>

                        </div>

                    </form>
            </div>
        </div>
    </div>
    <div class="properties my-5">
        <h2>Special price</h2>
        <p class="pgrey mb-1 mt-3">Review COVID-19 travel restrictions before you book. <a href="#" class=""  data-toggle="modal" data-target="#covid_modal"
                style="text-decoration:underline;">Learn more</a></p>
        <div class="row specialProperties" style="margin-bottom: 30px;">
            <?php
            $colcount = count($propertiesS);
            $j = 1;
            ?>
            @forelse($propertiesS as $property)
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 my-3 propertiesMain">

                    <div class="property">
                        <div class="image-placeholder">
                            <div class="owl-navigation owl-carousel gallery_owl owl-theme">
                                @foreach($property->images as $image)
                                <a href="/properties/{{ $property->id }}">  <img src="/assets/images/property_images/{{ $image->image }}" class="property_slide" alt=""> </a>
                                @endforeach
                            </div>

                            <img class="map_icon" src="/assets/images/google-maps.svg" alt="">
                            <div class="peoples">
                                <h6>{{ $property->persons }}x</h6>
                                <img src="poepe" alt="">
                            </div>
                        </div>
                        <div class="property-title-top">
                            <div class="property-location py-1">
                            <img src="/assets/images/iconfinder_pin_293694.svg" class="ikonica mr-1" alt="">
                                {{ $property->location->city }} ,      {{ $property->street }}

                            </div>
                            <div class="property-type py-1">
                            <img src="/assets/images/Property type.svg" class="ikonica mr-1" alt="">
                                {{ $property->propertyType->title }}
                            </div>
                        </div>
                            <div class="property-title py-1">
                                <a href="/properties/{{ $property->id }}">

                                <h5>{{ $property->title }}</h5>
                                 </a>
                                <p> {{ $property->price }} &euro; / night</p>
                            </div>
                      
                        @php
                            $amenities = $property->amenities()->get();
                            $colcount = count($propertiesS);
                            $k = 1;
 
                        @endphp
                        @foreach($amenities as $amenitie)
                            <img src="/assets/images/{{ $amenitie->photoUrl }}" class="amenityHomeS"
                                alt={{ $amenitie->photoUrl }}>
                            <?php
                                        if ($k++ == 8)
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
            <h1 style="color:white;">ABOUT MONTENEGRO</h1>
            <p>Events / Festivals / Parties / Holidays
            </p> 
        </div>
        </div>
        <div class="paddinglr blogs_main">
            <div class="owl-navigation owl-carousel blogs_owl owl-theme ">
                @foreach($blogs as $blog)
                    <div class="card" style="border:none">
                    <a href="/single_news/{{$blog->id}}">
                        <img class="card-img-top" src="/{{ $blog->image }}" alt="Card image cap">
                        </a>
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
  @include('components.covid_section')

</div>
@endsection
