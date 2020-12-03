<div class="coronaSection mt-5 py-5">
                <div class="covid-header">
                    <img src="/assets/images/covidIcon.svg" class="mr-4" alt="">
                    <h2 class="m-0">{{ $covid->title }}</h2>
                </div>
                <div class="covid-body mt-4">
                    <h5 class="covid-text">
                        @php
                            echo substr($covid->subtitle, 0, 333);
                        @endphp...</h5>
                        <a href="#" class=""  data-toggle="modal" data-target="#covid_modal">+ Read more details</a>
                        @can('admin')

                            <a href="{{ route('covids.edit',$covid->id) }}"><button
                                    type="button" class="btn btn-warning">Edit</button></a> </td>
                        @endcan
                </div>
       

    </div>