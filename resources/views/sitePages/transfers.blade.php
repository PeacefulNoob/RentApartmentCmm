@extends('layouts.master')
@section('content')
<div class="hero">
    <div class="hero-tran-image">
        <div class="hero-div row">
        
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 p-0">
            <h2>Transfers in Montenegro</h2>
            <h4>Schedule your transfer and have a relaxing stay in Montenegro.</h4>
            <p>If you have planned a long passage through the country or you want to go to the neighboring country,
you need a transfer! Turning to our company, you can choose from two vehicle types, depending on the
number of people. Private transfer involves following visitors at any time and in any direction. Group
transfers consist in servicing a group of passengers which is performed in accordance with the previously
approved schedule. </p>
              <p>Note that in addition to transfers to and from the airport, transfers to resorts and
historical centers of the country are also quite popular. People who value every minute of their time on
vacation prefer to order the transfer and to make excursions to the cities of Montenegro. We have
comfortable, clean vehicles and professional and courteous drivers.</p>
     
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 p-0 p-0">
            <form action="{{ route('contact.store.main') }}" method="POST" class="form-property">
                {{ csrf_field() }}
                <input type="hidden" class="form-control" name="title" id="title" value="Transfer ">

                <div class="firstCarForm">
                    <div class="form-group text-center">
                        <h3> Find a perfect car for your stay in Montenegro </h3>
                    </div>
                    <div class="form_inquiry">
                        <div class="form-row m-0">
                            <div class="form-group col-md-6 form_inquiry_left">
                                <label for="pud">PICK-UP DATE</label>
                                <input type="date" class="form-control" name="pud" id="pud"
                                    placeholder="Put the pick up date">
                            </div>
                            <div class="form-group col-md-6 form_inquiry_right ">
                                <label for="dofd">DROP-OFF DATE</label>
                                <input type="date" class="form-control" name="dofd" id="dofd"
                                    placeholder="Put the drop off date">
                            </div>
                        </div>
                        <div class="form-row m-0">
                            <div class="form-group col-md-6 form_inquiry_left border-top">
                                <label for="put">PICK-UP TIME</label>
                                <input type="time" class="form-control" name="put" id="put"
                                    placeholder="Put the pick up time">
                            </div>
                            <div class="form-group col-md-6 form_inquiry_right border-top">
                                <label for="doft">DROP-OFF TIME</label>
                                <input type="time" class="form-control" name="doft" id="doft"
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
                                        placeholder="Put your real name" required> 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                </div>
                                <div class="form-group col-md-6 form_inquiry_right ">
                                    <label for="surname">SURNAME</label>
                                    <input type="text" class="form-control" name="surname" id="surname"
                                        placeholder="Put your surname" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                </div>
                            </div>
                            <div class="form-row m-0">
                                <div class="form-group col-md-6 form_inquiry_left border-top">
                                    <label for="phoneNo">PHONE NUMBER</label>
                                    <input type="number" class="form-control" name="phoneNo" id="phoneNo"
                                        placeholder="Put your phone number" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                </div>
                                <div class="form-group col-md-6 form_inquiry_right border-top">
                                    <label for="email">E-MAIL</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Put your e-mail adress" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                </div>
                            </div>
                        </div>
                    <div class="form-group btnI text-center">
                      <button type="submit" class="btn btn-inquiry sendInq" disabled>SEND INQURY</button>
                      <p>Our representative will contact you back through e-mail with the confirmation as soon as possible.</p>
                  </div>

                  </div>

                 

            </form>
        </div>

            </div>
    </div>
</div>
@endsection
