    
<!--
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
@endif -->

@if (session('success'))
<div class="alertDiv">
<div class="alert alert-success alert-dismissable">
          <div class="alertwrapper clearfix">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span> </button>
                <div class="alerticon successful">
              <span class="glyphicon glyphicon-ok-sign"></span>
            </div>
            <div class="alertcontent">
              <h4>Success!</h4>
              {{session('success')}} 
            </div>
          </div>
        </div>
        </div>
   @endif
   @if ($errors->any())
<div class="alertDiv">
   <div class="alert alert-danger alert-dismissable">
          <div class="alertwrapper clearfix">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span> </button>
                <div class="alerticon dangerous">
              <span class="glyphicon glyphicon-warning-sign"></span>
            </div>
            <div class="alertcontent">
              <h4>Danger!</h4>
              <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            
            @endforeach
            </ul>
            </div>
          </div>
        </div>
        </div>
        @endif 