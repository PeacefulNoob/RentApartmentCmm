@extends('layouts.master')
@section('content')
@include('components.modal_cetinje')
@include('components.modal_dubrovnik')
@include('components.modal_kotor')
@include('components.modal_lake')
@include('components.modal_manastir')

<div class="hero">
    <div class="hero-exc-image change1">
        <div class="hero-div ">
            <h2>{{__('excoursions_var.page_title')}}</h2>
            <p>{{__('excoursions_var.page_title_p')}} </p>
     <p>{{__('excoursions_var.page_title_p2')}}</p>
        <div class="row my-5">
<div class="col-25">
  <a href="#" class=""  data-toggle="modal" data-target="#excoursions_cetinje_modal">
    <div class="card" >
        <img class="card-img-top" src="/assets/images/cetinje.png" alt="Cetinje and Mountain Lovćen">
        <div class="card-body">
          <p class="card-text">{{__('excoursions_var.cetinje')}}</p>
        </div>
      </div>
    </a>
</div>
<div class="col-25">
  <a href="#" class=""  data-toggle="modal" data-target="#excoursions_dubrovnik_modal">

    <div class="card" >
        <img class="card-img-top" src="/assets/images/dubrovnik.png" alt="Dubrovnik">
        <div class="card-body">
          <p class="card-text">{{__('excoursions_var.dubrovnik')}} </p>
        </div>
      </div>
    </a>

</div>
<div class="col-25">
  <a href="#" class=""  data-toggle="modal" data-target="#excoursions_kotor_modal">

    <div class="card" >
        <img class="card-img-top" src="/assets/images/kotor.png" alt="Stari grad Kotor">
        <div class="card-body">
          <p class="card-text">{{__('excoursions_var.kotor')}}</p>
        </div>
      </div>
    </a>

</div>
<div class="col-25">
  <a href="#" class=""  data-toggle="modal" data-target="#excoursions_manastir_modal">

    <div class="card" >
        <img class="card-img-top" src="/assets/images/ostrog.png" alt="Manastir Ostrog">
        <div class="card-body">
          <p class="card-text">{{__('excoursions_var.ostrog')}} </p>
        </div>
      </div>
    </a>

</div>
<div class="col-25">
  <a href="#" class=""  data-toggle="modal" data-target="#excoursions_lake_modal">

    <div class="card" >
        <img class="card-img-top" src="/assets/images/skadar.png" alt="Skadarsko jezero">
        <div class="card-body">
          <p class="card-text">{{__('excoursions_var.skadar_lake')}}</p>
        </div>
      </div>
    </a>

</div>

        </div>           

        </div>
    </div> 
@endsection
