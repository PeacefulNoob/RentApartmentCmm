@extends('layouts.master')
@section('content')
<div class="row  m-0 pt-5" >

    <div class=" side_filter col-lg-3 col-md-3 col-sm-12 col-12 mt-5 py-3 pl-0 ">
    <div class="razmak my-4 desktop"></div>

            <div class=" filterMain " id="fbox">
                <form method="GET" action="{{ route('filter.properties') }}" style="width: 100%; display: flex; flex-direction: column;" >
                   @csrf
                   <div class="filter">
                   <h3>Detailed search</h3>
                   </div>
                <div class="filter">
                <label>City:</label>
                    <select name="city" id="city" class="form-control filterInput">
                        <option value="" disabled selected>Where would you like to rent real estate?</option>
                        @foreach($cities as $city)
                        <option value="{{$city->id}}" {{ (old("city") == $city->id ? "selected":"") }}>{{$city->city}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="filter">
                <label>Property type:</label>
                <select name="type" class="form-control filterInput" >
                    <option value="" disabled selected>Choose type of the property</option>
                    @foreach($types as $type)
                    <option value="{{$type->id}}" {{ (old("type") == $type->id ? "selected":"") }}>{{$type->title}}</option>
                    @endforeach
                </select>
                </div>
                <div class="filter">
                <label>Price range:</label>
                <div class="row m-0">
                   <div class="col-6 pl-0"> <input placeholder="From" type="number" name="priceFrom" class="price-input filterInput" value="{{old('priceFrom')}}"></div>
                   <div class="col-6 pr-0">   <input  placeholder="To" type="number" name="priceTo" class="price-input filterInput" value="{{old('priceTo')}}"></div>
                </div>
                </div>
                <div class="filter">
                <label>NUMBER OF GUESTS:</label>
                <input class="filterInput" type="number" name="persons" value="{{old('persons')}}">
                </div>
                    <div class="button-form-submit pt-4 pb-4" >
                        <button class="btn btn-submit">SEARCH</button>
                    </div>
                </form>
            </div>
    </div>

    <div class="properties_filter row specialProperties  mt-5  col-lg-9 col-md-9 col-sm-12 col-12  m-0 pr-0" >
    <h2 class="col-12 ">Results around  {{$city->city}} </h2>

    <div class="razmak my-4"></div>
        <?php
        $j = 1;
        ?>
        @forelse($properties as $property)
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 my-3 propertiesMain">

                <div class="property">
                    <div class="image-placeholder">
          
                        <div class="owl-navigation owl-carousel gallery_owl owl-theme">
                            @foreach($property->images as $image)
                                <img src="/assets/images/property_images/{{ $image->image }}" class="property_slide filterRental" alt="">
                            @endforeach
                        </div>

                  
                        <img class="map_icon " src="/assets/images/google-maps.svg" alt="">
                            <div class="peoples">
                                <h6>{{ $property->persons }}x</h6>
                                <img src="/assets/images/guest.svg" alt="">
                            </div>
                        </div>

                        <div class="property-title-top py-2">
                            <div class="property-location py-1">
                            <img src="/assets/images/iconfinder_pin_293694.svg" class="ikonica mr-1" alt="">
                              <h6>  {{ $property->location->city }} ,      {{ $property->street }}
                              </h6>
                            </div>
                            <div class="property-type py-1">
                            <img src="/assets/images/Property type.svg" class="ikonica mr-1" alt="">
                            <h6>   {{ $property->propertyType->title }}  </h6>
                            </div>
                        </div>

                        <div class="property-title py-1">
                                <a href="/properties/{{ $property->id }}">
                                <h3 class="mobile">{{ $property->title }}</h3>
                                <h5 class="desktop">{{ $property->title }}</h5>
                                 </a>
                                <h5 class="desktop"><bold> {{ $property->price }} &euro; </bold>/ night</h5>
                                <h3 class="mobile"><bold> {{ $property->price }} &euro; </bold>/ night</h3>
 
                   
                            </div>


                    @php
                        $amenities = $property->amenities()->get();
                        $k = 1;

                    @endphp
                    @foreach($amenities as $amenitie)
                        @if(!$amenitie->photoUrl == null )
                        <img src="/assets/images/{{ $amenitie->photoUrl }}" class="amenityHomeS"
                                alt={{ $amenitie->photoUrl }}>
                          @endif                     
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
                            <h4>Sorry, there are no properties</h4>
                        </div>

                    </div>
                </div>
            </div>
        @endforelse
    </div>
    </div>
    </div>
    <script>
        document.getElementById("fbox").addEventListener("click", function() {
	this.classList.toggle("is-active");
});
    </script>
@endsection
