@extends('layouts.app')



@section('content')
<div class="container-fluid adminPage">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">Favourites</th>

                <th scope="col">Option</th>
                <th scope="col">Option</th>

            </tr>
        </thead>
        <tbody>
            @foreach($properties as $property)

                <tr>
                    <td>
                        <p>{{ $property->id }}</p>
                    </td>
                    <td>
                        <p>{{ $property->title }}</p>
                    </td>
                  

                    <td>
                            @if ($property->isFavourite())
                            <a href="/notFavourite/{{$property->id}}" class="btn btn-warning btn small">Disable</a>
                            @else
                            <a href="/favourite/{{$property->id}}" class="btn btn-info btn small">Enable</a>
                            @endif
                    </td>
                    <td>
                        @can('edit-property')
                      <a href="{{ route('properties.edit',$property) }}"><button
                                type="button" class="btn btn-primary">Edit</button></a> </td>
                                @endcan
                       <td>
                        @can('delete-property')
                        <form action="{{ route('properties.destroy',$property) }}" method="POST"  class="float-left">
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
