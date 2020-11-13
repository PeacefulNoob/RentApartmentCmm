
@if (session('success'))
<div class="alert alert-success" role="alert">
{{session('success')}}  
</div>
@endif

@if (session('warning'))
<div class="alert alert-warning" role="alert">
    {{session('warning')}}    </div>
@endif

@if (session('error'))
<div class="alert alert-danger" role="alert">
    {{session('error')}}    </div>
    
@endif
    
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


{{-- <div class="alert alert-primary" role="alert">
    This is a primary alert—check it out!
  </div>
  <div class="alert alert-secondary" role="alert">
    This is a secondary alert—check it out!
  </div>
  <div class="alert alert-success" role="alert">
    This is a success alert—check it out!
  </div>
  <div class="alert alert-danger" role="alert">
    This is a danger alert—check it out!
  </div>
  <div class="alert alert-warning" role="alert">
    This is a warning alert—check it out!
  </div>
  <div class="alert alert-info" role="alert">
    This is a info alert—check it out!
  </div>
  <div class="alert alert-light" role="alert">
    This is a light alert—check it out!
  </div>
  <div class="alert alert-dark" role="alert">
    This is a dark alert—check it out!
  </div> --}}