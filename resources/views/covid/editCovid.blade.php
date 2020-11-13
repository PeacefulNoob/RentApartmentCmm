@extends('layouts.app')
@section('content')
<div class="container">

    <form action="{{ route('covids.update',$covid->id) }}"  method="POST" enctype="multipart/form-data">
      @method('PATCH')
      @csrf
      <div class="form-group">
        <label for="title">Covid Title</label>
        <input type="text" class="form-control"  name="title"  value="{{$covid->title}}">
      </div>
      <div class="form-group">
        <label for="subtitle">Covid Subtitle</label>
        <input type="text" class="form-control"  name="subtitle"  value="{{$covid->subtitle}}">
      </div>
      <div class="form-group">
        <label for="description1">Description</label>
        <textarea class="ckeditor form-control" name="description">{{$covid->description}}</textarea>
        <div class="validate"></div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    
    });
    
</script>
    @endsection