@extends('layouts.app')
@section('content')
<div class="container-fluid adminPage">
    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data"
        class="form-horizontal mb-0">
        @csrf
        <div class="form-group">
            <label for="title">Blog</label>
            <input type="text" class="form-control" name="title" placeholder="Enter post title">
            <small id="text" class="form-text text-muted">Enter new post title</small>
        </div>
        <div class="form-group">
            <label for="description1">Description</label>
            <textarea class="form-control" id="summary-ckeditor" name="summary-ckeditor"></textarea> 

{{--             <textarea class="ckeditor form-control" name="description"></textarea>
 --}}            <div class="validate"></div>
        </div>
        <div class="form-group">
            <label for="photo">Upload photo</label>
            <input type="file" id="photo" name="photo">
            <div class="validate"></div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>

{{-- <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
 --}}
 <script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    
    });
    CKEDITOR.replace('summary-ckeditor', {
    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
});
</script>

@endsection
