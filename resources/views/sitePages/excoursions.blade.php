@extends('layouts.master')
@section('content')
@include('components.modal_cetinje')
@include('components.modal_dubrovnik')
@include('components.modal_kotor')
@include('components.modal_lake')
@include('components.modal_manastir')

<div class="hero">
    <div class="hero-exc-image">
        <div class="hero-div ">
            <h2>Excoursions in Montenegro</h2>
            <h4>"A man is never lost at sea."</h4>
            <p>Rent-a-car is one of the most required services of our company. The area of the country will allow you to visit most of the parts of Montenegro, while enjoying the beauty and discovering new landscapes at every turn of the winding mountain road. </p>
     <p>Using the service of car rental, you acquire the freedom of movement. We offer a large selection of vehicles to suit every taste - from inexpensive compact cars worth 35-40 Euros per day to jeeps and convertibles of premium-class.</p>
        <div class="row my-5">
<div class="col-25">
  <a href="#" class=""  data-toggle="modal" data-target="#excoursions_cetinje_modal">
    <div class="card" >
        <img class="card-img-top" src="/assets/images/cetinje.png" alt="Cetinje and Mountain Lovćen">
        <div class="card-body">
          <p class="card-text">Cetinje and Mountain Lovćen</p>
        </div>
      </div>
    </a>
</div>
<div class="col-25">
  <a href="#" class=""  data-toggle="modal" data-target="#excoursions_dubrovnik_modal">

    <div class="card" >
        <img class="card-img-top" src="/assets/images/dubrovnik.png" alt="Dubrovnik">
        <div class="card-body">
          <p class="card-text">Dubrovnik </p>
        </div>
      </div>
    </a>

</div>
<div class="col-25">
  <a href="#" class=""  data-toggle="modal" data-target="#excoursions_kotor_modal">

    <div class="card" >
        <img class="card-img-top" src="/assets/images/kotor.png" alt="Stari grad Kotor">
        <div class="card-body">
          <p class="card-text">Kotor</p>
        </div>
      </div>
    </a>

</div>
<div class="col-25">
  <a href="#" class=""  data-toggle="modal" data-target="#excoursions_manastir_modal">

    <div class="card" >
        <img class="card-img-top" src="/assets/images/ostrog.png" alt="Manastir Ostrog">
        <div class="card-body">
          <p class="card-text">Monestery Ostrog </p>
        </div>
      </div>
    </a>

</div>
<div class="col-25">
  <a href="#" class=""  data-toggle="modal" data-target="#excoursions_lake_modal">

    <div class="card" >
        <img class="card-img-top" src="/assets/images/skadar.png" alt="Skadarsko jezero">
        <div class="card-body">
          <p class="card-text">Skadar lake</p>
        </div>
      </div>
    </a>

</div>

        </div>

        </div>
    </div>
</div>
@endsection
