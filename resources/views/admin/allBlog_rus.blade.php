@extends('layouts.app')



@section('content')
<div class="container-fluid adminPage">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>

                <th scope="col">Option</th>
                <th scope="col">Option</th>

            </tr>
        </thead>
        <tbody>
            @foreach($blogs as $blog)

                <tr>
                    <td>
                        <p>{{ $blog->id }}</p>
                    </td>
                    <td>
                        <p>{{ $blog->title }}</p>
                    </td>
                    <td>
                        <p>
                        <p class="card-text">
                                @php
                                    echo substr($blog->description, 0, 100);
                                @endphp...
                        </p>
                    </td>
                    
                    <td>
                        @can('admin')
                            
                        <a href="{{ route('blogs_rus.edit',$blog->id) }}"><button
                            type="button" class="btn btn-primary">Edit</button></a> </td>
                                @endcan

                    <td>
                        @can('admin')
                        <form action="{{ route('blogs_rus.destroy',$blog) }}" method="POST"  class="float-left">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-warning">Delete</button>
                        </form>
                        @endcan
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

</div>
@endsection
