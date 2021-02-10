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
                <hr class="mobile "></hr>
                <a target="_blank" href="/terms"> <h6 class="tdark">Terms and Conditions</h6></a>
                <hr class="mobile "></hr>

            </div>
            <div class=" col-lg-5 col-md-5 col-sm-12 col-12">
           <form action="{{ route('contact.store.property') }}" method="POST" class="form-property">
           <input type="hidden" class="form-control" name="title" id="title" value="Property rent">

                        {{ csrf_field() }}

                <div class="firstCarForm">
                            <div class="form-group text-center">
                            <h3 >    &euro;   {{$property->price}} / night   </h3>
                            </div>
                            <div class="form_inquiry">
                                <div class="form-row m-0">

                                    <div class="form-group col-md-6 form_inquiry_left">
                                    <label for="checkin">CHECK-IN</label>
                                    <input  class="form-control" id="checkin" placeholder="Put the C/I date please">
                                    </div>
                                    <div class="form-group col-md-6 form_inquiry_right ">
                                    <label for="checkout">CHECKOUT</label>
                                    <input  class="form-control" id="checkout" placeholder="Put the C/O date please">
                                    </div>
                                </div>
                                <div class="form-group form_inquiry_bot">
                                <div class="calendar-main">
                                    <div class="calendar-child">
                                        <div class="form-row m-0">
                                            <!--calendar-wrapper-->
                                            <div class="form-group col-md-6 form_inquiry_left" style="display: block; ">
                                                <div id='calendar0' value="0"></div>
                                            </div>
                                            <!--calendar-wrapper-->
                                            <div class="form-group col-md-6 form_inquiry_right " style="display: block; border-left-style: none;">
                                                <div id='calendar1' value="0"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="form-group form_inquiry_bot">
                                    <label for="guests">Guests</label>
                                    <input type="number"  name="guests" class="form-control" id="guests" placeholder="Number of guests">


                                </div>
                            </div>
                            <div class="form-group btnI text-center">
                          <div  class="btn btn-inquiry nextCarForm">BOOK YOUR PROPERTY</div>
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
                                    <input type="text" class="form-control" name="phoneNo" id="phoneNo"
                                        placeholder="Put your phone number">
                                </div>
                                <div class="form-group col-md-6 form_inquiry_right border-top">
                                    <label for="email">E-MAIL</label>
                                    <input type="text" class="form-control" name="email" id="email"
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
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3718.9604097407932!2d18.85334240911809!3d42.28405578539378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1605286267549!5m2!1sen!2s" width="100%" height="600" frameborder="0" style="border:1px solid #08338F;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
                            <a href="/properties/{{ $property->id }}">

                                <img src="/assets/images/property_images/{{ $image->image }}" class="property_slide" alt="">
                                </a>

                            @endforeach

                        </div>

                        <img class="map_icon" src="/assets/images/google-maps.svg" alt="">
                        <div class="peoples">
                            <h6>{{ $property->persons }}x</h6>
                            <img src="poepe" alt="">
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
                        $colcount = count($properties);
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
<script> $(document).ready(function(){

        $('#checkin').on('click', function(){
            if($('#calendar0').val() == 0 && $('#calendar1').val() == 0) {
                $('.calendar-main').css("display", "block");
                $('#calendar0').css("display", "block");
                $('#calendar1').css("display", "block");
                $('#calendar0').val(1);
                $('#calendar1').val(1);

                calendar1.render();
                calendar.render();
                $('.fc-add_event-button').css("margin-right", "20px");
            }else{
                $('#calendar0').css("display", "none");
                $('#calendar1').css("display", "none");
                $('#calendar0').val(0);
                $('#calendar1').val(0);
            }
        });

        function checkEvents(datesBetween){
            for(var i = 0;i<eventList.length;i++){
                for(var j = 0; j<datesBetween.length;j++){
                    if(eventList[i].start == datesBetween[j] || eventList[i].end == datesBetween[j]){
                        return true;
                    }
                }
            }
            return false;
        }

        function destroCheckEvents(datesBetween){
            for(var j = 0; j<datesBetween.length;j++){
            //    console.log("unisti izmedju" + datesBetween[j]);
                $('.fc-day[data-date="'+ datesBetween[j] +'"]').removeClass('cellBgBetween');
            }
        }

        function destroyEvents(){
            if(checkOutInfo != null){
                checkOutInfo.dayEl.style.backgroundColor = "transparent";
            }
            if(checkInInfo != null){
                checkInInfo.dayEl.style.backgroundColor = "transparent";
            }
            checkIn = '';
            checkOut = '';
            $('#checkin').val("");
            $('#checkout').val("");
        }



        events = <?php echo json_encode($calendar); ?> ;
      //  console.log("json envenotvi " + events);
        eventList = [];
        for(var i =0; i<events.length;i++){
            console.log(events[i]);
            eventList.push({
                id: i,
                title: "",
                start:events[i].start.date.slice(0,10), // try timed. will fall back to all-day.slice(0,10)
                end: events[i].end.date.slice(0,10), // same.slice(0,10)
            });
        }
     //   console.log("dogadjaji"+eventList);

         
        

        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        var x = new Date();
        x.setDate(1);
        x.setMonth(x.getMonth() + 1);

        var checkIn = '';
        var checkOut = '';
        var checkInInfo = null;
        var checkOutInfo = null;
        var bool = false;

        var calendarEl1 = document.getElementById('calendar1');
        var calendar1 = new FullCalendar.Calendar(calendarEl1, {
            customButtons: {
                add_event: {
                    text: 'Clear',
                    click: function() {
                        destroyEvents();
                    }
                },
                add_close:{
                    text: 'X',
                    click: function(){
                        $('.calendar-main').css("display", "none");
                    }
                }
            },
            initialView: 'dayGridMonth',
            initialDate: x,
            headerToolbar: {
                left: 'title',
                center: '',
                right: 'add_event,add_close'
            },
            selectable: true,
            events: eventList,
            eventDisplay: 'background',
            eventColor: '#378006',
            eventClassNames: 'activeDay',
            dateClick: function(info) {
                var event = calendar1.getEventById('1'); // an event object!
                var start = event.start;
               // console.log(start);
                info.dayEl.style.backgroundColor = "#033382";
                if(checkIn == ''){
                    alert("checkIn je ''")

                    checkInInfo = info;
                    checkIn = info.dateStr;
                    $('#checkin').val(checkIn);
                }else if(checkOut == ''){
                    alert("checkout je ''")

                    if(info.date > checkInInfo.date){
                    checkOutInfo = info;
                    checkOut = info.dateStr;
                    $('#checkout').val(checkOut);
                    let datesBetween = [];
                    for (var m = moment(checkIn); m.isBefore(checkOut); m.add(1, 'days')) {
                        datesBetween.push(m.format('YYYY-MM-DD'));
                    }
                 bool = checkEvents(datesBetween);
                    if(bool){
                        checkOutInfo.dayEl.style.backgroundColor = "transparent";
                        checkInInfo.dayEl.style.backgroundColor = "transparent";
                        checkIn = '';
                        checkOut = '';
                        $('#checkin').val("");
                        $('#checkout').val("");
                    }else{
                      /*  for(var j = 0; j<datesBetween.length;j++){
                            $('.fc-day[data-date="'+ datesBetween[j] +'"]').addClass('cellBgBetween');
                        }*/
                    }
                }else{
                    alert("checkout je manji");
                        //checkOutInfo.dayEl.style.backgroundColor = "transparent";
                        checkInInfo.dayEl.style.backgroundColor = "transparent";
                        checkOut = '';
                        checkInInfo = info;
                        checkIn = info.dateStr;
                        $('#checkin').val(checkIn);
                        console.log("check in"+checkIn);
                        console.log("check out"+checkOut);
                        
            }
                }else if(checkIn != '' && checkOut != ''){
                    if(info.date > checkInInfo.date){
                        checkOutInfo.dayEl.style.backgroundColor = "transparent";
                        checkOutInfo = info;
                        checkOut = info.dateStr;
                        $('#checkout').val(checkOut);
                        let datesBetween = [];
                    for (var m = moment(checkIn); m.isBefore(checkOut); m.add(1, 'days')) {
                        datesBetween.push(m.format('YYYY-MM-DD'));
                    }
                        bool = checkEvents(datesBetween);
                        if(bool){
                        checkOutInfo.dayEl.style.backgroundColor = "transparent";
                        checkInInfo.dayEl.style.backgroundColor = "transparent";
                        checkIn = '';
                        checkOut = '';
                        $('#checkin').val("");
                        $('#checkout').val("");
                    }
                     
                    }else if(info.date < checkInInfo.date){
                        let datesBetween = [];
                        for (var m = moment(checkIn); m.isBefore(checkOut); m.add(1, 'days')) {
                            datesBetween.push(m.format('YYYY-MM-DD'));
                        }
                        destroCheckEvents(datesBetween);
                        checkInInfo.dayEl.style.backgroundColor = "transparent";
                        checkInInfo = info;
                        checkIn = info.dateStr;
                        $('#checkin').val(checkIn);
                    }else{

                        checkOutInfo.dayEl.style.backgroundColor = "transparent";
                        checkOut = '';
                        checkInInfo = info;
                        checkIn = info.dateStr;
                        $('#checkin').val(checkIn);
                        let datesBetween = [];
                        for (var m = moment(checkIn); m.isBefore(checkOut); m.add(1, 'days')) {
                            datesBetween.push(m.format('YYYY-MM-DD'));
                        }
                        destroCheckEvents(datesBetween);
                    }
                   /* let datesBetween = [];
                    for (var m = moment(checkIn); m.isBefore(checkOut); m.add(1, 'days')) {
                        datesBetween.push(m.format('YYYY-MM-DD'));
                    }
                    for(var j = 0; j<datesBetween.length;j++){
                        $('.fc-day[data-date="'+ datesBetween[j] +'"]').addClass('cellBgBetween');
                    }*/
                }
            },
            dayCellClassNames: function (date, cell) {
                date = checkIn;
                $('.fc-day[data-date="'+ date +'"]').addClass('cellBg');
                date = checkOut;
                $('.fc-day[data-date="'+ date +'"]').addClass('cellBg');
                let datesBetween = [];
                for (var m = moment(checkIn); m.isBefore(checkOut); m.add(1, 'days')) {
                    datesBetween.push(m.format('YYYY-MM-DD'));
                }
                datesBetween.shift();
                for(var j = 0; j<datesBetween.length;j++){
                    console.log(datesBetween[j]);
                  //  $('.fc-day[data-date="'+ datesBetween[j] +'"]').addClass('cellBgBetween');
                }
                for(var i=0;i<eventList.length;i++){
                    if(date==eventList[i].start || date==eventList[i].end){
                        $('.fc-day[data-date="'+ date +'"]').addClass('disabledCell');
                    }
                }
            },
            eventClick:function(){
                alert("OKS");
            }
        });
        calendar1.render();

        var calendarEl = document.getElementById('calendar0');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            initialDate: date,
            headerToolbar: {
                left: 'title',
                center: '',
                right: 'prev,next'
            },
            selectable: true,
            events: eventList,
            eventDisplay: 'background',
            eventColor: '#378006',
            datesSet: function(info) {
                month = info.endStr.slice(0,10);
                calendar1.changeView('dayGridMonth', month);
                calendar1.render();
            },
            dateClick: function(info) {
                var event = calendar1.getEventById('1'); // an event object!
                var start = event.start;
                console.log("prvi kalendar dogadjaji" + events);
                console.log(info.dateStr);
                info.dayEl.style.backgroundColor = "#033382";
                if(checkIn == ''){
                    checkInInfo = info;
                    checkIn = info.dateStr;
                    $('#checkin').val(checkIn);
                }else if(checkOut == ''){
                   if(info.date > checkInInfo.date){
                    checkOutInfo = info;
                    checkOut = info.dateStr;
                    $('#checkout').val(checkOut);
                    let datesBetween = [];
                    for (var m = moment(checkIn); m.isBefore(checkOut); m.add(1, 'days')) {
                        datesBetween.push(m.format('YYYY-MM-DD'));
                    }
                    datesBetween.shift();
                    bool = checkEvents(datesBetween);
                    if(bool){
                        checkOutInfo.dayEl.style.backgroundColor = "transparent";
                        checkInInfo.dayEl.style.backgroundColor = "transparent";
                        checkIn = '';
                        checkOut = '';
                        $('#checkout').val('');
                        $('#checkin').val('');
                    }else{
                    for(var j = 0; j<datesBetween.length;j++){
                        console.log(datesBetween[j]);
                     //   $('.fc-day[data-date="'+ datesBetween[j] +'"]').addClass('cellBgBetween');
                    }
                }
            }else{
                       // checkOutInfo.dayEl.style.backgroundColor = "transparent";
                        checkInInfo.dayEl.style.backgroundColor = "transparent";
                        checkOut = '';
                        checkInInfo = info;
                        checkIn = info.dateStr;
                        $('#checkin').val(checkIn);
                        console.log("check in"+checkIn);
                        console.log("check out"+checkOut);
            }
                }else if(checkIn != '' && checkOut != ''){
                    if(info.date > checkInInfo.date){
                        let datesBetween = [];
                        for (var m = moment(checkIn); m.isBefore(checkOut); m.add(1, 'days')) {
                            datesBetween.push(m.format('YYYY-MM-DD'));
                        }
                        destroCheckEvents(datesBetween);
                        checkOutInfo.dayEl.style.backgroundColor = "transparent";
                        checkOutInfo = info;
                        checkOut = info.dateStr;
                        $('#checkout').val(checkOut);
                    }else if(info.date < checkInInfo.date){
                        let datesBetween = [];
                        for (var m = moment(checkIn); m.isBefore(checkOut); m.add(1, 'days')) {
                            datesBetween.push(m.format('YYYY-MM-DD'));
                        }
                        destroCheckEvents(datesBetween);
                        checkInInfo.dayEl.style.backgroundColor = "transparent";
                        checkInInfo = info;
                        checkIn = info.dateStr;
                        $('#checkin').val(checkIn);
                    }else{
                        destroCheckEvents(datesBetween);
                        checkOutInfo.dayEl.style.backgroundColor = "transparent";
                        checkOut = '';
                        checkInInfo = info;
                        checkIn = info.dateStr;
                        $('#checkin').val(checkIn);

                    }
                    let datesBetween = [];
                    for (var m = moment(checkIn); m.isBefore(checkOut); m.add(1, 'days')) {
                        datesBetween.push(m.format('YYYY-MM-DD'));
                    }
                    datesBetween.shift();
                    for(var j = 0; j<datesBetween.length;j++){
                        console.log(datesBetween[j]);
                   //     $('.fc-day[data-date="'+ datesBetween[j] +'"]').addClass('cellBgBetween');
                    }
                }

              /*  console.log(checkIn + "IN");
                console.log(checkInInfo);
                console.log(checkOut + "OUT");
                console.log(checkOutInfo);
                checkOutInfo.dayEl.style.backgroundColor = "white";*/
            },
            dayCellClassNames: function (date, cell) {
                date = checkIn;
                $('.fc-day[data-date="'+ date +'"]').addClass('cellBg');
                date = checkOut;
                $('.fc-day[data-date="'+ date +'"]').addClass('cellBg');
                let datesBetween = [];
                for (var m = moment(checkIn); m.isBefore(checkOut); m.add(1, 'days')) {
                    datesBetween.push(m.format('YYYY-MM-DD'));
                }
                datesBetween.shift();
                for(var j = 0; j<datesBetween.length;j++){
                    console.log(datesBetween[j]);
                //    $('.fc-day[data-date="'+ datesBetween[j] +'"]').addClass('cellBgBetween');
                }
                for(var i=0;i<eventList.length;i++){
                    console.log(cell);
                    console.log(eventList[i].start + " " + date);
                    if(date==eventList[i].start || date==eventList[i].end){
                        $('.fc-day[data-date="'+ date +'"]').addClass('disabledCell');
                    }
                }
            },
            eventClick:function(){
                alert("OKS");
            },
            eventRender: function (event, element) {
                alert(event.start);
                var eventDate = event.start;
                var calendarDate = $('#calendar0').fullCalendar('getDate');
                if (eventDate.get('month') !== calendarDate.get('month')) {
                    return false;
                }
            }
        });
        calendar.render();


    });
</script>
@endsection
