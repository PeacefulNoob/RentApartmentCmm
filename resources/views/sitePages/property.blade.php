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
            <div class=" col-lg-7 col-md-7 col-sm-12 col-12">
                <div class="property-title">
                    <h3 class="desktop">{{ $property->title }}</h3>
                    <h1 class="mobile">{{ $property->title }}</h1>
                           
                </div>
                <div class="property-single-location py-2 d-flex">
                <img src="/assets/images/iconfinder_pin_293694.svg" class="ikonica mr-2" alt="">
                    {{ $property->location->city }} ,
                   {{ $property->street }} ,
                 {{ $property->location->zip }}
                </div>
                <div class="property-type py-2 d-flex">
                    <img src="/assets/images/Property type.svg" class="ikonica mr-2" alt="">
                    {{ $property->propertyType->title }}
                </div>
                <hr class="mobile "></hr>
                <div class="faciImg py-2">
                <h6>Facilities/Amenities</h6>
                @php
                            $amenities = $property->amenities()->get();
                            $k = 1;

                        @endphp
                        @foreach($amenities as $amenitie)
                            <img src="/assets/images/{{ $amenitie->photoUrl }}" class="amenityHome py-2 "
                                alt={{ $amenitie->photoUrl }}>
                            <?php
                                        if ($k++ == 8)
                                            break;
                                        ?>
                        @endforeach
                        </div>
                <p class="showMoreAm">Click here to see all fascilities / amenities.</p>
                <div class="property-single-facilities">
                <p> {{ implode(', ', $property->amenities()->get()->pluck('title')->toArray()) }}   </p>
                </div>
                <hr class="mobile "></hr>
                <h6 class="tdark">Property Description</h6>

                <div class="property-single-amenities my-4">

                    <p> {{$property->description}}  </p>
                </div>
            </div>
            <div class=" col-lg-5 col-md-5 col-sm-12 col-12">
           <form action="{{ route('contact.store.property') }}" method="POST" class="form-property">
                        {{ csrf_field() }}

                <div class="firstCarForm">
                            <div class="form-group text-center">
                            <h3 >      {{$property->price}} &euro; / night   </h3>
                            </div>
                            <div class="form_inquiry">
                                <div class="form-row m-0">
                                    <div class="form-group col-md-6 form_inquiry_left">
                                    <label for="checkin">CHECK-IN</label>
                                    <input name="checkin" type="date" class="form-control" id="checkin" placeholder="Put the C/I date please">
                                    </div>
                                    <div class="form-group col-md-6 form_inquiry_right ">
                                    <label name="ckeckout" for="ckeckout">CHECKOUT</label>
                                    <input type="date" class="form-control" id="ckeckout" placeholder="Put the C/O date please">
                                    </div>
                                </div>
                                <div class="form-group form_inquiry_bot">
                                    <label for="guests">Guests</label>
                                    <select id="guests" class="form-control" name="guests">
                                    <option selected>1 guest</option>
                                    <option>...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group btnI text-center">
                          <div  class="btn btn-inquiry nextCarForm">BOOK PROPERTY</div>
                          <p>Book your stay through email</p>
                      </div>
                    </div>
                      <div class="secondCarForm">
                        <div class="topForm stepBackCar"><p>step back</p></div>
                       <div class="form-group text-center">
                            <h3> Just one more step and you are done. Afterwards, we will contact you back. </h3>
                        </div>
                        <div class="form_inquiry">
                            <div class="form-row m-0">
                                <div class="form-group col-md-6 form_inquiry_left">
                                    <label for="name">NAME</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Put your real name">
                                </div>
                                <div class="form-group col-md-6 form_inquiry_right ">
                                    <label for="surname">SURNAME</label>
                                    <input type="text" class="form-control" name="surname" id="surname"
                                        placeholder="Put your surname">
                                </div>
                            </div>
                            <div class="form-row m-0">
                                <div class="form-group col-md-6 form_inquiry_left border-top">
                                    <label for="phoneNo">PHONE NUMBER</label>
                                    <input type="number" class="form-control" name="phoneNo" id="phoneNo"
                                        placeholder="Put your phone number">
                                </div>
                                <div class="form-group col-md-6 form_inquiry_right border-top">
                                    <label for="email">E-MAIL</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Put your e-mail adress">
                                </div>
                            </div>
                        </div>
                        <div class="form-group btnI text-center">
                          <button type="submit" class="btn btn-inquiry">SEND INQURY</button>
                          <p>Our representative will contact you back through e-mail with the confirmation as soon as possible.</p>
                      </div>

                      </div>

                </form>
            </div>

        </div>
    </div>
</div>
<div class="googleMap paddinglr my-5">
    <h2 class="py-4">Google maps location</h2>
<iframe src="https://www.google.com/maps/embed/v1/place?q={{$property->street}}&key=AIzaSyBxKQ25JRZ3zkWcgJ5mTfmSG85CxvYtcYs" width="100%" height="600" frameborder="0" style="border:1px solid #08338F;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
 </div>
<div class="properties my-5">
    <h2>More like this</h2>
    <p class="pgrey mb-1 mt-3">Review COVID-19 travel restrictions before you book. <a href="#" class=""  data-toggle="modal" data-target="#covid_modal"
            style="text-decoration:underline;">Learn more</a></p>
    <div class="row specialProperties" style="margin-bottom: 30px;">
        <?php
                        $colcount = count($properties);
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
