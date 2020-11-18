@extends('layouts.app')
@section('content')
<div class="container-fluid adminPage">
<form action="{{ route('faqs.store')}}"  method="POST" enctype="multipart/form-data"    class="form-horizontal mb-0">
    @csrf
    <div class="form-group">
      <label for="exampleInputQuestion1">Question</label>
      <input type="text" class="form-control" id="exampleInputQuestion1" name="question"  placeholder="Enter question">
      <small id="text" class="form-text text-muted">Enter Question</small>
    </div>
    <div class="form-group">
      <label for="exampleInputAnswer1">Answer</label>
      <input type="text" class="form-control" id="exampleInputAnswer1" name="answer" placeholder="Enter answer">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection
