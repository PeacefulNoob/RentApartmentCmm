@extends('layouts.master')
@section('content')
<div class="hero">
    <div class="hero-yacht-image change1">
        <div class="hero-div row">
        <div class="rentaYachDiv col-lg-6 col-md-6 col-sm-12 col-12 pl-0">
            <h2 class="blue ">Rent a yacht in Montenegro</h2>
            <h4 class="py-2">"A man is never lost at sea."</h4>
            <p>Yacht charter in Montenegro – it’s a decent choice that will make your stay even more luxurious and
memorable. Try to rent a boat and go sailing on the Montenegrin coast, and you will understand that
from now on you will not be able to refuse such pastime.</p>
     <p>Rentals also available for motor yachts, yachts
for comfortable rest or participating in regatta, yachts-restaurant for banquets, weddings and other
celebrations. Thanks to our team of professionals, we provide maintenance and warranty for the perfect
condition of the yacht.</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-0">
            <form action="{{route('contact.store.yacht')}}" method="POST" class="needs-validation form-property">
              {{ csrf_field() }}
              <input type="hidden" class="form-control" name="title" id="title" value="Rent a Yacht">

              <div class="firstCarForm">
                <div class="form-group text-center">
                    <h3>Enjoy blue colors of the Adriatic sea and relax your body and soul on a yacht. </h3>
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
                        <div class="form-group col-md-6  border-top">
                            <label for="nofpeople">NUMBER OF PEOPLE</label>
                            <input type="text" class="form-control" name="nofpeople" id="nofpeople"
                                placeholder="Put the number of people">
                        </div>
                    </div>
                  
                </div>
                <div class="form-group btnI text-center">
                  <div  class="btn btn-inquiry nextCarForm mb-3" >BOOK A YACHT</div>
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
                                    <input type="text" class="form-control" name="phoneNo" id="phoneNo"
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
                  <button type="submit" class="btn btn-inquiry sendInq" >SEND INQURY</button>
                  <p>Our representative will contact you back through e-mail with the confirmation as soon as possible.</p>
              </div>

              </div>

             
            </form>
        </div>

        </div>
    </div>
</div>
@endsection
