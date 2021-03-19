@extends('layouts.master')
@section('content')
<div class="hero">
    <div class="hero-yacht-image change1">
        <div class="hero-div row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 pl-0 rentaYachDiv">
            <h2 class="blue ">{{__('rentYacht_var.rent_a_yacht_title')}}</h2>
            <h4 class="py-2">{{__('rentYacht_var.rent_a_yacht_subtitle')}}</h4>
            <p>{{__('rentYacht_var.rent_a_yacht_p1')}}</p>
            <p>{{__('rentYacht_var.rent_a_yacht_p2')}}</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-0">
            <form action="{{route('contact.store.yacht')}}" method="POST" class="needs-validation form-property">
              {{ csrf_field() }}
              <input type="hidden" class="form-control" name="title" id="title" value="Rent a Yacht">

              <div class="firstCarForm">
                <div class="form-group text-center">
                    <h3>{{__('rentYacht_var.form_title1')}}</h3>
                </div>
                <div class="form_inquiry">
                    <div class="form-row m-0">
                        <div class="form-group col-md-6 form_inquiry_left">
                            <label for="pud">{{__('rentYacht_var.pickup_date')}}</label>
                            <input type="date" class="form-control" name="pud" id="pud"
                                placeholder="Put the pick up date">
                        </div>
                        <div class="form-group col-md-6 form_inquiry_right ">
                            <label for="dofd">{{__('rentYacht_var.dropoff_date')}}</label>
                            <input type="date" class="form-control" name="dofd" id="dofd"
                                placeholder="Put the drop off date">
                        </div>
                    </div>
                    <div class="form-row m-0">
                        <div class="form-group col-md-6  border-top">
                            <label for="nofpeople">{{__('rentYacht_var.num_of_people')}}</label>
                            <input type="text" class="form-control" name="nofpeople" id="nofpeople"
                                placeholder="Put the number of people">
                        </div>
                    </div>
                  
                </div>
                <div class="form-group btnI text-center">
                  <div  class="btn btn-inquiry nextCarForm mb-3" >{{__('rentYacht_var.book_button')}}</div>
                  <p>{{__('rentYacht_var.book_p1')}}</p>
              </div>
            </div>
              <div class="secondCarForm">
                <div class="topForm stepBackCar"><p>{{__('rentYacht_var.step_back_button')}}</p></div>
               <div class="form-group text-center">
                    <h3>{{__('rentYacht_var.form_title2')}}</h3>
                </div>
                <div class="form_inquiry">
                            <div class="form-row m-0">
                                <div class="form-group col-md-6 form_inquiry_left">
                                    <label for="name">{{__('rentYacht_var.form_name')}}</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Put your real name" required> 
                                        <div class="valid-feedback">
                                        {{__('rentYacht_var.validation_text')}}
                                        </div>
                                </div>
                                <div class="form-group col-md-6 form_inquiry_right ">
                                    <label for="surname">{{__('rentYacht_var.form_surname')}}</label>
                                    <input type="text" class="form-control" name="surname" id="surname"
                                        placeholder="Put your surname" required>
                                        <div class="valid-feedback">
                                        {{__('rentYacht_var.validation_text')}}
                                        </div>
                                </div>
                            </div>
                            <div class="form-row m-0">
                                <div class="form-group col-md-6 form_inquiry_left border-top">
                                    <label for="phoneNo">{{__('rentYacht_var.form_number')}}</label>
                                    <input type="text" class="form-control" name="phoneNo" id="phoneNo"
                                        placeholder="Put your phone number" required>
                                        <div class="valid-feedback">
                                        {{__('rentYacht_var.validation_text')}}
                                        </div>
                                </div>
                                <div class="form-group col-md-6 form_inquiry_right border-top">
                                    <label for="email">{{__('rentYacht_var.form_mail')}}</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Put your e-mail adress" required>
                                        <div class="valid-feedback">
                                        {{__('rentYacht_var.validation_text')}}
                                        </div>
                                </div>
                            </div>
                        </div>
                <div class="form-group btnI text-center">
                  <button type="submit" class="btn btn-inquiry sendInq" >{{__('rentYacht_var.send_button')}}</button>
                  <p>{{__('rentYacht_var.send_p1')}}</p>
              </div>

              </div>

             
            </form>
        </div>

        </div>
    </div>
</div>
@endsection
