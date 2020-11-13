@extends('layouts.app')



@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">Roles</th>

                <th scope="col">Option</th>
                <th scope="col">Option</th>

            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)

                <tr>
                    <td>
                        <p>{{ $user->id }}</p>
                    </td>
                    <td>
                        <p>{{ $user->email }}</p>
                    </td>
                    <td>
                        <p>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}
                        </p>
                    </td>

                    <td>
                        <p>{{ $user->name }}</p>
                    </td>
                    <td>
                        @can('edit-users')
                            
                      <a href="{{ route('admin.users.edit',$user->id) }}"><button
                                type="button" class="btn btn-primary">Edit</button></a> </td>
                                @endcan

                    <td>
                        @can('delete-users')
                        <form action="{{ route('admin.users.destroy',$user) }}" method="POST"  class="float-left">
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
