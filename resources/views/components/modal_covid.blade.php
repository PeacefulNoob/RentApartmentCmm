<div class="modal fade bd-example-modal-lg" id="covid_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-covid m-0" role="document">
    <div class="modal-content ">
        <div class="modal-header">
        <img src="/assets/images/covidIcon.svg" class="mr-2 ml-0 my-auto" alt="">
          <h1 class="modal-title" id="exampleModalLabel">{{ $covid->title }}</h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="covid-body">
                <h5 class="covid-title"> {{ $covid->subtitle }}</h5>
                <p class="covid-text">
                 {!!$covid->description!!}
                   </p>
                  
                    @can('admin')

                        <a href="{{ route('covids.edit',$covid->id) }}"><button
                                type="button" class="btn btn-warning">Edit</button></a> </td>
                    @endcan
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>