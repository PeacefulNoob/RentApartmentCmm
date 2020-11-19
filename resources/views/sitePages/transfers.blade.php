@extends('layouts.master')
@section('content')
<div class="hero">
    <div class="hero-tran-image">
        <div class="hero-div row">
        
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 p-0">
            <h2>Transfers in Montenegro</h2>
            <h4>Schedule your transfer and have a relaxing stay in Montenegro.</h4>
            <p>Rent-a-car is one of the most required services of our company. The area of the country will allow you to visit most of the parts of Montenegro, while enjoying the beauty and discovering new landscapes at every turn of the winding mountain road. </p>
              <p>Using the service of car rental, you acquire the freedom of movement. We offer a large selection of vehicles to suit every taste - from inexpensive compact cars worth 35-40 Euros per day to jeeps and convertibles of premium-class.</p>
     
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 p-0 p-0">
            <form action="{{ route('contact.store.main') }}" method="POST" class="form-property">
                {{ csrf_field() }}
                <div class="firstCarForm">
                    <div class="form-group text-center">
                        <h3> Find a perfect car for your stay in Montenegro </h3>
                    </div>
                    <div class="form_inquiry">
                        <div class="form-row m-0">
                            <div class="form-group col-md-6 form_inquiry_left">
                                <label for="pud">PICK-UP DATE</label>
                                <input type="text" class="form-control" name="pud" id="pud"
                                    placeholder="Put the pick up date">
                            </div>
                            <div class="form-group col-md-6 form_inquiry_right ">
                                <label for="dofd">DROP-OFF DATE</label>
                                <input type="text" class="form-control" name="dofd" id="dofd"
                                    placeholder="Put the drop off date">
                            </div>
                        </div>
                        <div class="form-row m-0">
                            <div class="form-group col-md-6 form_inquiry_left border-top">
                                <label for="put">PICK-UP TIME</label>
                                <input type="text" class="form-control" name="put" id="put"
                                    placeholder="Put the pick up time">
                            </div>
                            <div class="form-group col-md-6 form_inquiry_right border-top">
                                <label for="doft">DROP-OFF TIME</label>
                                <input type="text" class="form-control" name="doft" id="doft"
                                    placeholder="Put the drop off time">
                            </div>
                        </div>
                        <div class="form-row m-0">
                            <div class="form-group col-md-6 form_inquiry_left border-top">
                                <label for="pul">PICK-UP LOCATION</label>
                                <input type="text" class="form-control" name="pul" id="pul"
                                    placeholder="Put the pick up location">
                            </div>
                            <div class="form-group col-md-6 form_inquiry_right border-top">
                                <label for="dofl">DROP-OFF LOCATION</label>
                                <input type="text" class="form-control" name="dofl" id="dofl"
                                    placeholder="Put the drop off location">
                            </div>
                        </div>
                    </div>
                    <div class="form-group btnI text-center">
                      <div  class="btn btn-inquiry nextCarForm  mb-3">BOOK TRANSFER</div>
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
@endsection
