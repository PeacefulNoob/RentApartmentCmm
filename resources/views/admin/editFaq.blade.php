@extends('layouts.app')
@section('content')
<div class="container">

<form action="/faqs/{{$faq->id}}"  method="POST" enctype="multipart/form-data">
    @method('PATCH')
    @csrf 
    <div class="form-group">
      <label for="exampleInputQuestion1">Question</label>
      <input type="text" class="form-control" id="exampleInputQuestion1" name="question"  placeholder="{{$faq->question}}" value="{{$faq->question}}">
      <small id="text" class="form-text text-muted">Enter Question</small>
    </div>
    <div class="form-group">
      <label for="exampleInputAnswer1">Answer</label>
      <input type="text" class="form-control" id="exampleInputAnswer1" name="answer" placeholder="{{$faq->answer}}" value="{{$faq->answer}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection
