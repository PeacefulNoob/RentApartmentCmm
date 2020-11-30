@extends('layouts.master')
@section('content')
<style>
.header{
  position: relative;
}
</style>
<div class="homeMain">
    <div class="paddinglr single_news_section my-5">
           <div class="single_news_header pb-3">
                <img class="" src="/{{ $blog->image }}" alt="Card image cap">
           </div>
           <div class="single_news_title pb-1 pt-2">
                 <h2>{{ $blog->title }}</h2>
           </div>
           <div class="single_news_date py-1">
                 <p>By {{ $blog->user->name }} on {{ $blog->created_at }}</p>
           </div>
           <div class="single_news_body py-2">
                 <p>{!! $blog->description !!}</p>
           </div>
    </div>
    <div class="paddinglr single_news_blog">
        <h4 class="py-4">More recommended news :</h4>
    <div class="owl-navigation owl-carousel blogs_owl owl-theme ">
                @foreach($blogs as $blog)
                    <div class="card" style="border:none">
                    <a href="/single_news/{{$blog->id}}">
                        <img class="card-img-top blog_image" src="/{{ $blog->image }}" alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">{{ $blog->title }}</h4>
                            <p class="card-text">
                                @php

                                    echo substr($blog->description, 0, 60);
                                @endphp...
                            </p>
                        </div>
                        <div class="card-footer">
                        <p>  By {{$blog->user->name}} on {{ $blog->created_at }}</p> 
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
</div>
@endsection
