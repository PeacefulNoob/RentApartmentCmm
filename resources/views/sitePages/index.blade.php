@extends('layouts.master')

@section('content')
@include('components.modal_covid')

<div class="homeMain">
    <div class="hero">
        <div class="hero-image">
            <div id="my-carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
                <ol class="carousel-indicators">
                    <li data-target="#my-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#my-carousel" data-slide-to="1"></li>
                    <li data-target="#my-carousel" data-slide-to="2"></li>
                    <li data-target="#my-carousel" data-slide-to="3"></li>

                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/assets/images/cover_image/slide1 (2).jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/images/cover_image/slide1 (1).jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/images/cover_image/slide1 (3).jpg" alt="Third slide">
                    </div>
                  
                </div>
                <a class="carousel-control-prev" href="#my-carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#my-carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>

            <div class="searchFormaHero desktop">
                <form method="GET" action="{{ route('filter.properties',app()->getLocale()) }}"  class="desktop">
                    @csrf
                        <div class="form-row m-0 mainsearch">
                            <div class="col-lg-4 col-md-12 col-sm-6 col-12  searchForm">
                                       <select name="city" id="city" class="form-control">
                                    <option value="" disabled selected>{{__('index_var.location')}}</option>
                                            @foreach($cities as $city)
                                            <option value="{{$city->id}}" {{ (old("city") == $city->id ? "selected":"") }}>{{$city->city}}</option>
                                            @endforeach
                                        </select>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 searchForm">
                                   <select name="type"  id="type" class="form-control" >
                                            <option value="" disabled selected>{{__('index_var.property_type')}}</option>
                                        @foreach($types as $type)
                                        <option value="{{$type->id}}" {{ (old("type") == $type->id ? "selected":"") }}>{{$type->title}}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12  searchForm">
                            <select name="persons"  id="persons" class="form-control" >
                                            <option value="" disabled selected>{{__('index_var.how_guests')}}</option>
                                        <option value="{{old('persons')}}"> {{old('persons')}}</option>
                                        <option value="1">1</option>
                                        <option value="2"> 2</option>
                                        <option value="3"> 3</option>
                                        <option value="4"> 4</option>
                                        <option value="5"> 5</option>
                                        <option value="6"> 6</option>
                                        <option value="7"> 7</option>
                                    </select>
                                         
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-6  searchForm">
    
                                    <div class="button-form-submit">
                                        <button class="btn btn-submit">{{__('index_var.button_go')}}</button>
                                    </div>
                                    </div>
    
                        </div>
    
                    </form>
              </div>
            <div class="hero-text">
                <h1 class="mobile">{{__('index_var.hero_mobile1')}}</h1 > <h1  class="mobile">{{__('index_var.hero_mobile2')}}</h1>
                <h1 class="desktop">{{__('index_var.hero_desktop')}}</h1>
                    </div>
                    <div class="mobile filterDivMob">
                    <div class="searchForm">
                    <a href="#" class="btn "  data-toggle="modal" data-target="#filter_inquiry">
                            <p>{{__('index_var.form_p1')}}</p> 
                        </a>
          </div>
      
            </div>
              
        
    </div>

    <div class="properties my-5">
        <h2>{{__('index_var.our_favourite_title')}}</h2>
        <p class="pgrey mb-1 mt-3">{{__('index_var.covid_section')}}<a href="#" class=""  data-toggle="modal" data-target="#covid_modal"
                style="text-decoration:underline;">{{__('index_var.learn_more')}}</a></p>
        <div class="row specialProperties" style="margin-bottom: 30px;">
            <?php
            $colcount = count($propertiesS);
            $j = 1;
            ?>
            @forelse($propertiesS as $property)
            @include('components.google_maps')

                <div class="col-lg-3 col-md-6 col-sm-6 col-12 my-3 propertiesMain">

                    <div class="property translate">
                        <div class="image-placeholder">
                            <div class="owl-navigation owl-carousel gallery_owl owl-theme">
                                @foreach($property->images as $image)
                             
                                <a href="/{{app()->getLocale()}}/properties/{{ $property->id }}">
                                <div class="propOverlay">                                 </div>

                                 <img src="/assets/images/property_images/{{ $image->image }}" class="property_slide" alt=""> 
                                </a>
                                @endforeach
                            </div>
                            <a href="#" class="map_icon"  data-toggle="modal" data-target="#google_maps">
                              <img class=" " src="/assets/images/google-maps.svg" alt="">
                            </a>
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
                                <a href="/{{app()->getLocale()}}/properties/{{ $property->id }}">
                                <h3 class="mobile">{{ $property->title }}</h3>
                                <h5 class="desktop">{{ $property->title }}</h5>
                                 </a>
                                <h5 class="desktop"><bold> {{ $property->price }} &euro; </bold>/ night</h5>
                                <h3 class="mobile"><bold> {{ $property->price }} &euro; </bold>/ night</h3>
 
                   
                            </div>
                      
                        @php
                            $amenities = $property->amenities()->get();
                            $colcount = count($propertiesS);
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
                if ($j++ == 8)
                    break;
                ?>
            @empty
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="property">
                        <div class="property-title">
                            <div>
                                <h4>{{__('index_var.property_title')}}</h4>
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
            <h1 style="color:white;">{{__('index_var.about_mne')}}</h1>
            <p>{{__('index_var.about_mne_p1')}}</p> 
        </div>
        </div>
        <div class="paddinglr blogs_main">
            <div class="owl-navigation owl-carousel blogs_owl owl-theme translate">
                @foreach($blogs as $blog)
                    <div class="card" style="border:none">
                    <a href="/{{app()->getLocale()}}/single_news/{{$blog->id}}">
                        <img class="card-img-top blog_image" src="/{{ $blog->image }}" alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                                        @php

                            echo substr($blog->title, 0, 60);
                            @endphp...</h4>
                            <p class="card-text">
                                @php

                                    echo substr($blog->description, 0, 55);
                                @endphp...
                            </p>
                        </div>
                        <div class="card-footer">
                        <p>   {{ $blog->created_at->formatLocalized('%a, %b %d, %Y ') }}</p> 
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
  @include('components.covid_section')
  @include('components.filter_inquiry')

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="/assets/js/formScript.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<script> 
$('.carousel').carousel({
  interval: 5000
})</script>
@endsection
