@extends('layouts.app')



@section('content')
    <div class="container-fluid mt-3">
        <div class="card">
        <div class="card-header">Edit user{{$user->name}}</div>
        <div class="card-body">
        <form action="{{ route('admin.users.update',$user)}}" method="POST">
           @csrf
          {{method_field('PUT')}}

          <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">email</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
          <label for="email" class="col-md-4 col-form-label text-md-right">Name</label>

          <div class="col-md-6">
              <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autofocus>

              @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>
        @foreach ($roles as $role)
            <div class="form-check">
            <input type="checkbox" name="roles[]" value="{{$role->id}}"
            @if ($user->roles->pluck('id')->contains($role->id)) 
            checked
            @endif
            >
            <label> {{$role->name}}</label>
            </div>
        @endforeach
        <button type="submit" class="btn btn-primary">
          Update
        </button>
        </form>

        </div>

        </div>
          
    </div>
@endsection
