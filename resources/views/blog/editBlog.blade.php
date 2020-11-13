@extends('layouts.app')
@section('content')
<div class="container">

    <form action="/blogs/{{ $blog->id }}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="title">Blogs</label>
            <input type="text" class="form-control" name="title" value="{{ $blog->title }}">
        </div>
        <div class="form-group">
            <label for="description1">Description</label>
            <textarea class="ckeditor form-control" name="description">{{ $blog->description }}</textarea>
            <div class="validate"></div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
