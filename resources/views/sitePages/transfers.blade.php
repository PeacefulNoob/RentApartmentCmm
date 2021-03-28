@extends('layouts.master')
@section('content')
<div class="hero">
    <div class="hero-tran-image change1">
        <div class="hero-div row">
        
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 p-0 pr-3">
            <h2>{{__('transfers_var.transfers_title')}}</h2>
            <h4>{{__('transfers_var.transfers_subtitle')}}</h4>
            <p>{{__('transfers_var.transfers_p1')}} </p>
            <p>{{__('transfers_var.transfers_p2')}}</p>
     
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 p-0 p-0">
            <form action="{{ route('contact.store.main') }}" method="POST" class="form-property">
                {{ csrf_field() }}
                <input type="hidden" class="form-control" name="title" id="title" value="Transfer ">

                <div class="firstCarForm">
                    <div class="form-group text-center">
                        <h3>{{__('transfers_var.form_title1')}}</h3>
                    </div>
                    <div class="form_inquiry">
                        <div class="form-row m-0">
                            <div class="form-group col-md-6 form_inquiry_left">
                                <label for="pud">{{__('transfers_var.pickup_date')}}</label>
                                <input type="date" class="form-control" name="pud" id="pud"
                                    placeholder="Put the pick up date">
                            </div>
                            <div class="form-group col-md-6 form_inquiry_right ">
                                <label for="dofd">{{__('transfers_var.dropoff_date')}}</label>
                                <input type="date" class="form-control" name="dofd" id="dofd"
                                    placeholder="Put the drop off date">
                            </div>
                        </div>
                        <div class="form-row m-0">
                            <div class="form-group col-md-6 form_inquiry_left border-top">
                                <label for="put">{{__('transfers_var.pickup_time')}}</label>
                                <input type="time" class="form-control" name="put" id="put"
                                    placeholder="Put the pick up time">
                            </div>
                            <div class="form-group col-md-6 form_inquiry_right border-top">
                                <label for="doft">{{__('transfers_var.dropoff_time')}}</label>
                                <input type="time" class="form-control" name="doft" id="doft"
                                    placeholder="Put the drop off time">
                            </div>
                        </div>
                        <div class="form-row m-0">
                            <div class="form-group col-md-6 form_inquiry_left border-top">
                                <label for="pul">{{__('transfers_var.pickup_location')}}</label>
                                <input type="text" class="form-control" name="pul" id="pul"
                                    placeholder="{{__('others.pickupl')}}">
                            </div>
                            <div class="form-group col-md-6 form_inquiry_right border-top">
                                <label for="dofl">{{__('transfers_var.dropoff_location')}}</label>
                                <input type="text" class="form-control" name="dofl" id="dofl"
                                    placeholder="{{__('others.dropupl')}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group btnI text-center">
                      <div  class="btn btn-inquiry nextCarForm  mb-3">{{__('transfers_var.book_button')}}</div>
                      <p>{{__('transfers_var.book_p1')}}</p>
                  </div>
                </div>
                  <div class="secondCarForm">
                    <div class="topForm stepBackCar"><p>{{__('transfers_var.step_back_button')}}</p></div>
                   <div class="form-group text-center">
                        <h3>{{__('transfers_var.form_title2')}}</h3>
                    </div>
                    <div class="form_inquiry">
                            <div class="form-row m-0">
                                <div class="form-group col-md-6 form_inquiry_left">
                                    <label for="name">{{__('transfers_var.form_name')}}</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="{{__('others.real_name')}}" required> 
                                        <div class="valid-feedback">
                                        {{__('transfers_var.validation_text')}}
                                        </div>
                                </div>
                                <div class="form-group col-md-6 form_inquiry_right ">
                                    <label for="surname">{{__('transfers_var.form_surname')}}</label>
                                    <input type="text" class="form-control" name="surname" id="surname"
                                        placeholder="{{__('others.surname')}}" required>
                                        <div class="valid-feedback">
                                        {{__('transfers_var.validation_text')}}
                                        </div>
                                </div>
                            </div>
                            <div class="form-row m-0">
                                <div class="form-group col-md-6 form_inquiry_left border-top">
                                    <label for="phoneNo">{{__('transfers_var.form_number')}}</label>
                                    <input type="text" class="form-control" name="phoneNo" id="phoneNo"
                                        placeholder="{{__('others.phone_no_f')}}" required>
                                        <div class="valid-feedback">
                                        {{__('transfers_var.validation_text')}}
                                        </div>
                                </div>
                                <div class="form-group col-md-6 form_inquiry_right border-top">
                                    <label for="email">{{__('transfers_var.form_mail')}}</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="{{__('others.e-adress')}}" required>
                                        <div class="valid-feedback">
                                        {{__('transfers_var.validation_text')}}
                                        </div>
                                </div>
                            </div>
                        </div>
                    <div class="form-group btnI text-center">
                      <button type="submit" class="btn btn-inquiry sendInq" >{{__('transfers_var.send_button')}}</button>
                      <p>{{__('transfers_var.send_p1')}}</p>
                  </div>

                  </div>

                 

            </form>
        </div>

            </div>
    </div>
</div>
@endsection
