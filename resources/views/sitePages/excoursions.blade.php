@extends('layouts.master')
@section('content')
@include('components.modal_cetinje')
@include('components.modal_dubrovnik')
@include('components.modal_kotor')
@include('components.modal_lake')
@include('components.modal_manastir')

<div class="hero">
    <div class="hero-exc-image change1">
        <div class=" hero-div ">
            <h2>Excoursions in Montenegro</h2>
            <p class="rentaYachDiv">There is a huge number of attractions In Montenegro that are worth visiting. When booking a tour from
people on the street, you can’t be sure that you will receive a good service, and even more important
than that, you can’t be sure that you get your money back for waste of time when excursion is poorly
organized. </p>
     <p class="rentaYachDiv">When booking tours with us, you are always sure in the service you are going to get. You can
order an individual tour in a comfortable car with a guide or book a group tour, and make a little trip
with a small pleasant company. All our cars are new, air-conditioned, we have professional and proven
drivers, our guides – they are people who know everything about Montenegro!</p>
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
@endsection
