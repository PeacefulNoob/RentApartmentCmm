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
                    <h3>{{ $property->title }}</h3>

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


<div class="calendar-wrapper">
<div id='calendar0'></div>
</div>
<div class="calendar-wrapper">
    <div id='calendar1'></div>
</div>
{{--
<div class="calendar-wrapper">
    <div id='calendar1'></div>
</div>
--}}

{{--<div class="calendar-wrapper">
    {!! $calendar->calendar() !!}
    {!! $calendar->script() !!}
</div>--}}
{{--<div class="calendar-wrapper">
    {!! $calendar1->calendar() !!}
    {!! $calendar1->script() !!}
</div>--}}
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
                        <h5><bold> {{ $property->price }} &euro; </bold>/ night</h5>
                    </div>

                    @php
                        $amenities = $property->amenities()->get();
                        $k = 1;

                    @endphp
                    @foreach($amenities as $amenitie)
                        <img src="/assets/images/{{ $amenitie->photoUrl }}" class="amenityHomeS"
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
<script>


   /* var allEvents = [];
    allEvents = $('#calendar-1').fullCalendar('clientEvents');
    alert(allEvents);*/

   /* var obj = new Array();

    var evts = [];
for(var i = 0; i < 3; i++){
    evts.push({
        title: obj[i],
        start: obj[i],
        end: obj[i]
    });
    }
    console.log(evts);
    drawCalendar(obj);
    function drawCalendar(data){
*/

      $(document).ready(function(){


          events = <?php echo json_encode($calendar); ?> ;
          eventList = [];
          for(var i =0; i<events.length;i++){
              eventList.push({
                  title: events[i].title,
                  start:events[i].start.date.slice(0,10), // try timed. will fall back to all-day
                  end: events[i].end.date.slice(0,10), // same

              });
          }


          var date = new Date();
          alert(date);
          var d = date.getDate();
          var m = date.getMonth();
          var y = date.getFullYear();
          var x = new Date();
          x.setDate(1);
          x.setMonth(x.getMonth() + 1);



        var calendarEl = document.getElementById('calendar0');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            initialDate: date,
            headerToolbar: {
                left: 'title',
                center: '',
                right: 'prev,next today'
            },
            selectable: true,
            events: eventList,
            eventColor: '#378006',
            viewDidMount: function(view, element) {
                cur = view.intervalStart;
                d = moment(cur).add('months', 1);
                calendar1.fullCalendar('gotoDate', d);
            },
            dateClick: function(info) {
                alert('clicked ' + info.dateStr);
            },
            eventClick:function(){
                alert("OKS");
            }
        });
        calendar.render();

          var calendarEl1 = document.getElementById('calendar1');
          var calendar1 = new FullCalendar.Calendar(calendarEl1, {
              initialView: 'dayGridMonth',
              initialDate: x,
              headerToolbar: {
                  left: 'title',
                  center: '',
                  right: ''
              },
              selectable: true,
              events: eventList,
              eventColor: '#378006',
              dateClick: function(info) {
                  alert('clicked ' + info.dateStr);
              },
              eventClick:function(){
                  alert("OKS");
              }
          });
          calendar1.render();



      });

</script>


@endsection
