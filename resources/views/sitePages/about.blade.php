@extends('layouts.master')
@section('content')
<div class="homeMain">
<div class="abouts1 padding row m-0">
        <div class=" col-lg-6 col-md-6 col-sm-12 col-12 pt-5 px-0 tekstAbout">
            <h1 class="pb-2">{{__('about_page.title_about') }}</h1>
            <p class="pb-2">{{__('about_page.about_us_description1') }}</p>
            <p> {{__('about_page.about_us_description2') }}</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 ">
            </div>
            <img src="/assets/images/about/Office copy.png" alt="">

        </div>
    <div class="abouts2 padding cblue">
        <p class= "py-2">{{__('about_page.about_us_description3') }} </p>
        <p>{{__('about_page.about_us_description4') }}</p>
        <img  src="/assets/images/about/map.png" alt="">
    </div>
    <div class="abouts3 padding">
        <h1>{{__('about_page.title_our_awards') }}</h1>
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-6 col-6"> <img src="/assets/images/about/Mask Group 5.png" alt=""></div>
            <div class="col-lg-2 col-md-2 col-sm-6 col-6"> <img src="/assets/images/about/Mask Group 4.png" alt=""></div>
            <div class="col-lg-2 col-md-2 col-sm-6 col-6"> <img src="/assets/images/about/Mask Group 3.png" alt=""></div>
            <div class="col-lg-2 col-md-2 col-sm-6 col-6"> <img src="/assets/images/about/Mask Group 2.png" alt=""></div>
            <div class="col-lg-2 col-md-2 col-sm-12 col-12 m-auto"> <img src="/assets/images/about/Mask Group 1.png" alt=""></div>
        </div>
    </div>
    <div class="row m-0 abouts5 padding">
        <div class="col-lg-4 col-md-4 col-sm-6 col-12 my-2">
            <h2>{{__('about_page.title_cmm_montenegro') }}</h2>
                <p>{{__('about_page.cmm_montenegro_description') }}</p>
               <a target="_blank" href="https://www.cmm-montenegro.com/">  <button class="buttonBlue">{{__('footer.check_more') }}</button></a>
               
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12 my-2">
                <h2>{{__('about_page.title_cmm_management') }}</h2>
                <p>{{__('about_page.cmm_management_description') }}</p>
                    <a target="_blank" href="https://cmm-management.com/">      <button class="buttonBlue">{{__('footer.check_more') }}</button></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 my-2">
            <h2>{{__('about_page.title_cmm_rental') }}</h2>
                <p>{{__('about_page.cmm_rental_description') }}</p>
                    <a target="_blank" href="https://cmm-rental.com/">   <button class="buttonBlue">{{__('footer.check_more') }}</button></a>
            </div>
    </div>
    <div class="lineB"></div>
        <div class="row m-0 abouts7 padding justify-content-center">
        <h1 class="col-12 pb-5 pt-2">{{__('about_page.title_cmm_team') }}</h1>
        <div class="col-lg-4 col-md-4 col-sm-6 col-6 my-2">
          <img class="noImage" src="/assets/images/about/Mask Group 6.png" alt="">
            <h4>Anđela Jovanović</h4>
            <p>Head of Management Department </p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-6 my-2">
            <img class="noImage" src="/assets/images/about/Mask Group 7.png" alt="">
              <h4>Ivana Vidaković</h4>
              <p> Management Maintenance Coordinator </p>
          </div>      
           <div class="col-lg-4 col-md-4 col-sm-6 col-6 my-2">
            <img class="noImage" src="/assets/images/about/Mask Group 8.png" alt="">
              <h4>Milica Đurović</h4>
              <p> Account Manager</p>
          </div>      
           <div class="col-lg-4 col-md-4 col-sm-6 col-6 my-2">
            <img class="noImage" src="/assets/images/about/Mask Group 9.png" alt="">
              <h4>Danijel Ješovnik</h4>
              <p>Interior Design Manager</p>
          </div>     
            <div class="col-lg-4 col-md-4 col-sm-6 col-6 my-2">
            <img class="noImage" src="/assets/images/about/Mask Group 10.png" alt="">
              <h4>Stefan Vidaković</h4>
              <p>Service Manager </p>
          </div>    
             <div class="col-lg-4 col-md-4 col-sm-6 col-6 my-2">
            <img class="noImage" src="/assets/images/about/Mask Group 11.png" alt="">
              <h4>Vukman Radenović</h4>
              <p>Management Operative ASsistant</p>
          </div>
          <div class="col-12 pt-5">
            <img class="" style="width:100%;border-radius:5px;" src="/assets/images/about/1_0006.png" alt="">
             
          </div>


    </div>
    <div class="lineB"></div>
    <div class="row m-0 abouts6 padding justify-content-center " id="about_contact">
        <h4 class="col-12 py-3">{{__('about_page.title_contact_us') }}</h4>

        <div class="col-6">
            <h6 class="bold"> Russia:</h6>
            <p>+7 (499) 685 14 96</p>
            <p> +7 (926)
                889 80 14</p>
            <p> E-mail: info@cmm-montenegro.ru </p>
            <p> www.cmm-montenegro.ru </p>
            <p>{{__('about_page.contact_adresa_russia') }}</p>
            <p> Srednyaya Pereyaslavskaya 13/2, Moscow </p>
        </div>


        <div class="col-6">
            <h6 class="bold"> Montenegro:</h6>
            <p> + 382 68 010 879</p>
            <p> E-mail: office@cmm-montenegro.com </p>
            <p> www.cmm-montenegro.com </p>
            <p>{{__('about_page.contact_adresa_montenegro') }}</p>
            <p> Jadranski put b.b. Budva </p>
        </div>
    </div>
</div>
@endsection
