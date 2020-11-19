@extends('layouts.master')
@section('content')
<div class="row padding" >
    <div class="side_filter col-lg-3 col-md-3 col-sm-12 col-12 mt-5">
            <div class=" row m-0">
                <form method="GET" action="{{ route('filter.properties') }}" style="width: 100%; display: flex; flex-direction: column;" >
                   @csrf
                    <div>
                <div class="filter">
                <p>City:</p>
                    <select name="city" id="city" class="form-control">
                        <option></option>
                    @foreach($cities as $city)
                        <option value="{{$city->id}}" {{ (old("city") == $city->id ? "selected":"") }}>{{$city->city}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="filter">
                <p>Property type:</p>

                <select name="type" >
                    <option></option>
                    @foreach($types as $type)
                    <option value="{{$type->id}}" {{ (old("type") == $type->id ? "selected":"") }}>{{$type->title}}</option>
                    @endforeach
                </select>
                </div>
                <div class="filter">
                <p>Price range:</p>
                    <label for="price-from">From:</label>
                <input type="number" name="priceFrom" class="price-input" value="{{old('priceFrom')}}">
                    <label for="price-to">To:</label>
                    <input type="number" name="priceTo" class="price-input" value="{{old('priceTo')}}">
                </div>
                <div class="filter">
                <p>Number of persons:</p>
                <input type="number" name="persons" value="{{old('persons')}}">
                </div>
                    </div>
                    <div class="button-form-submit">
                        <button class="btn btn-submit">Izlistaj</button>
                    </div>
                </form>
            </div>
    </div>

    <div class="properties_filter row specialProperties col-lg-9 col-md-9 col-sm-12 col-12 mt-5" >
        <?php
        $j = 1;
        ?>
        @forelse($properties as $property)
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
            if ($j++ == 16)
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
    </div>
@endsection
