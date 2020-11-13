@extends('layouts.master')

@section('content')
<style>
    .header{
  position: relative !important;

} 

</style>
<div class="propertyMain">
    <div class="property-single">
        <div class="owl-navigation owl-carousel gallery_single_owl owl-theme">
            @foreach($property->images as $image)
                <img src="/assets/images/property_images/{{ $image->image }}" class="property_single_slide" alt="">
            @endforeach
        </div>
        <div class="row  mt-5">
            <div class="col-8">
                <div class="property-title">
                    <h3>{{ $property->title }}</h3>
                   
                </div>
                <div class="property-single-location py-1 d-flex">
                <img src="/assets/images/iconfinder_pin_293694 (1).svg" class="" alt="">
                    {{ $property->location->city }} ,
                   {{ $property->street }} ,
                 {{ $property->location->zip }}
                </div>
                <div class="property-type py-1 d-flex">
                    <img src="/assets/images/iconfinder_pin_293694.svg" class="" alt="">
                    {{ $property->propertyType->title }}
                </div>
                <div class="property-single-amenities">
                    <p> {{$property->description}}  </p>
                    <p> {{ implode(', ', $property->amenities()->get()->pluck('title')->toArray()) }}   </p>
                </div>
            </div>
            <div class="col-4">
                <form action="" class="form-property">
                    <div class="form-group text-center">
                     <h3 >      {{$property->price}} &euro; / night   </h3>
                      </div>
                      <div class="form_inquiry">
                    <div class="form-row m-0">
                        <div class="form-group col-md-6 form_inquiry_left">
                          <label for="checkin">CHECK-IN</label>
                          <input type="email" class="form-control" id="checkin" placeholder="Put the C/I date please">
                        </div>
                        <div class="form-group col-md-6 form_inquiry_right ">
                          <label for="ckeckout">CHECKOUT</label>
                          <input type="password" class="form-control" id="ckeckout" placeholder="Put the C/O date please">
                        </div>
                      </div>
                      <div class="form-group form_inquiry_bot">
                        <label for="guests">Guests</label>
                        <select id="guests" class="form-control">
                          <option selected>1 guest</option>
                          <option>...</option>
                        </select>
                      </div>
                    </div>
                      <div class="form-group btnI text-center">
                        <button type="submit" class="btn btn-inquiry">SEND INQUIRY</button>
                        <p>Book your stay through email</p>
                        </div>
                </form>
            </div>

        </div>
    </div>
</div>
<div class="googleMap paddinglr my-5">
    <h2 class="py-2">Google maps location</h2>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3718.9604097407932!2d18.85334240911809!3d42.28405578539378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1605286267549!5m2!1sen!2s" width="100%" height="600" frameborder="0" style="border:1px solid #08338F;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<div class="properties my-5">
    <h2>More like this</h2>
    <p class="pgrey mb-1 mt-3">Review COVID-19 travel restrictions before you book. <a href=""
            style="text-decoration:underline;">Learn more</a></p>
    <div class="row specialProperties" style="margin-bottom: 30px;">
        <?php
                        $colcount = count($properties);
                        $j = 1;
                        ?>
        @forelse($properties as $property)
            <div class="col-l-3 col-md-3 col-sm-6 col-xs-12 my-3">

                <div class="property">
                    <div class="image-placeholder">
                        {{-- /// --}}
                        <div class="owl-navigation owl-carousel gallery_owl owl-theme">
                            @foreach($property->images as $image)
                                <img src="/assets/images/property_images/{{ $image->image }}" class="property_slide" alt="">
                            @endforeach
                        </div>

                        {{-- /// --}}
                        <img class="map_icon" src="/assets/images/iconfinder_pin_293694.svg" alt="">
                        <div class="peoples">
                            <h6>{{ $property->persons }}x</h6>
                            <img src="poepe" alt="">
                        </div>
                    </div>


                    <div class="property-title-top">
                        <div class="property-location py-1">
                            <img src="/assets/images/iconfinder_pin_293694.svg" class="" alt="">
                            {{ $property->location->city }}
                        </div>
                        <div class="property-type py-1">
                            <img src="ikonica" class="amenityHome" alt="">
                            {{ $property->propertyType->title }}
                        </div>

                    </div>

                    <div class="property-title py-1">
                        <a href="/properties/{{ $property->id }}">

                            <h4>{{ $property->title }}</h4>
                        </a>
                        <p> {{ $property->price }} / night</p>
                    </div>

                    @php
                        $amenities = $property->amenities()->get();
                        $colcount = count($properties);
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

@endsection
