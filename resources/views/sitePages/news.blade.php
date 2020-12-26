@extends('layouts.master')
@section('content')
<style>
.header{
  position: relative;
}
.card{
  background-color: transparent;
}
</style>
<div class="homeMain">
<div class="all_aboutMnePage">
        <div class="aboutMnePage pb-4">
            <div class="text">
            <h1 style="color:white;">ABOUT MONTENEGRO</h1>
            <p>Events / Festivals / Parties / Holidays
            </p> 
        </div>
        </div>
        <div class="paddinglr row m-0 pb-4">
                @foreach($blogs as $blog)
                    <div class="card col-lg-3 col-md-4 col-sm-6 col-12 p-4" style="border:none">
                    <a href="/single_news/{{$blog->id}}">
                        <img class="card-img-top blog_image" src="{{ $blog->image }}" alt="Card image cap">
                    </a>
                        <div class="card-body">
                        <h4 class="card-title">
                            @php
                            echo substr($blog->title, 0, 60);
                            @endphp...
                        </h4>
                        </div>
                        <div class="card-footer">
                        <p> {{ $blog->created_at }}</p> 
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
</div>
@endsection
