@extends('layouts.master')
@section('content')
<div class="hero">
    <div class="hero-car-image change1">
        <div class="hero-div row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 pl-0 rentText">
                <h2>{{__('rent_car_var.rent_car_title')}} </h2>
                <h4 class="py-2">{{__('rent_car_var.rent_car_subtitle')}}</h4>
                <p class="py-2">{{__('rent_car_var.rent_car_p')}} </p>
                <p class="py-2">{{__('rent_car_var.rent_car_p2')}}</p>
            </div>
            <div class=" col-lg-6 col-md-6 col-sm-12 col-12 pr-0 ">
                <form action="{{ route('contact.store.main') }}" method="POST" class="form-property needs-validation">
                    {{ csrf_field() }}
                    <input type="hidden" class="form-control" name="title" id="title" value="Rent a Car">
                    <div class="firstCarForm">
                        <div class="form-group text-center">
                            <h3> {{__('rent_car_var.form_title')}} </h3>
                        </div>
                        <div class="form_inquiry">
                            <div class="form-row m-0">
                                <div class="form-group col-md-6 form_inquiry_left">
                                    <label for="pud">{{__('rent_car_var.pick_up_date')}}</label>
                                    <input type="date" class="form-control" name="pud" id="pud"
                                        placeholder="Put the pick up date" required>
                                        <div class="valid-feedback">
                                            {{__('rent_car_var.valid_confirm')}}
                                        </div>
                                </div>
                                <div class="form-group col-md-6 form_inquiry_right ">
                                    <label for="dofd">{{__('rent_car_var.drop_off_date')}}</label>
                                    <input type="date" class="form-control" name="dofd" id="dofd"
                                        placeholder="Put the drop off date" required>
                                        <div class="valid-feedback">
                                            {{__('rent_car_var.valid_confirm')}}
                                        </div>
                                </div>
                            </div>
                            <div class="form-row m-0">
                                <div class="form-group col-md-6 form_inquiry_left border-top">
                                    <label for="put">{{__('rent_car_var.pick_up_time')}}</label>
                                    <input type="time" class="form-control" name="put" id="put"
                                        placeholder="Put the pick up time" required>
                                        <div class="valid-feedback">
                                            {{__('rent_car_var.valid_confirm')}}
                                        </div>
                                </div>
                                <div class="form-group col-md-6 form_inquiry_right border-top">
                                    <label for="doft">{{__('rent_car_var.drop_off_time')}}</label>
                                    <input type="time" class="form-control" name="doft" id="doft"
                                        placeholder="Put the drop off time" required>
                                        <div class="valid-feedback">
                                            {{__('rent_car_var.valid_confirm')}}
                                        </div>
                                </div>
                            </div>
                            <div class="form-row m-0">
                                <div class="form-group col-md-6 form_inquiry_left border-top">
                                    <label for="pul">{{__('rent_car_var.pick_up_location')}}</label>
                                    <input type="text" class="form-control" name="pul" id="pul"
                                        placeholder="Put the pick up location" required>
                                        <div class="valid-feedback">
                                            {{__('rent_car_var.valid_confirm')}}
                                        </div>
                                </div>
                                <div class="form-group col-md-6 form_inquiry_right border-top">
                                    <label for="dofl">{{__('rent_car_var.drop_off_location')}}</label>
                                    <input type="text" class="form-control" name="dofl" id="dofl"
                                        placeholder="Put the drop off location" required>
                                        <div class="valid-feedback">
                                            {{__('rent_car_var.valid_confirm')}}
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group btnI text-center">
                          <div  class="btn btn-inquiry nextCarForm mb-3">{{__('rent_car_var.book_your_car')}}</div>
                          <p>{{__('rent_car_var.book_your_stay')}}</p>
                      </div>
                    </div>
                      <div class="secondCarForm">
                        <div class="topForm stepBackCar"><p>{{__('rent_car_var.step_back')}}</p></div>
                       <div class="form-group text-center">
                            <h3> {{__('rent_car_var.one_more_step')}} </h3>
                        </div>
                        <div class="form_inquiry">
                            <div class="form-row m-0">
                                <div class="form-group col-md-6 form_inquiry_left">
                                    <label for="name">{{__('rent_car_var.form_name')}}</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Put your real name" required> 
                                        <div class="valid-feedback">
                                            {{__('rent_car_var.valid_confirm')}}
                                        </div>
                                </div>
                                <div class="form-group col-md-6 form_inquiry_right ">
                                    <label for="surname">{{__('rent_car_var.form_surname')}}</label>
                                    <input type="text" class="form-control" name="surname" id="surname"
                                        placeholder="Put your surname" required>
                                        <div class="valid-feedback">
                                            {{__('rent_car_var.valid_confirm')}}
                                        </div>
                                </div>
                            </div>
                            <div class="form-row m-0">
                                <div class="form-group col-md-6 form_inquiry_left border-top">
                                    <label for="phoneNo">{{__('rent_car_var.form_phone')}}</label>
                                    <input type="text" class="form-control" name="phoneNo" id="phoneNo"
                                        placeholder="Put your phone number" required>
                                        <div class="valid-feedback">
                                            {{__('rent_car_var.valid_confirm')}}
                                        </div>
                                </div>
                                <div class="form-group col-md-6 form_inquiry_right border-top">
                                    <label for="email">E-{{__('rent_car_var.form_email')}}</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Put your e-mail adress" required>
                                        <div class="valid-feedback">
                                            {{__('rent_car_var.valid_confirm')}}
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group btnI text-center">
                          <button type="submit" class="btn btn-inquiry sendInq" >{{__('rent_car_var.form_send')}}</button>
                          <p>{{__('rent_car_var.form_p')}}</p>
                      </div>

                      </div>

                     

                </form>
            </div>

        </div>
    </div>
</div>
@endsection
