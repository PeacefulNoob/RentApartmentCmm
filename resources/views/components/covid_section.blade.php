<div class="coronaSection mt-5 py-5">
                <div class="covid-header">
                    <img src="/assets/images/covidIcon.svg" class="mr-2" alt="">
                    <h2 class="m-0">{{ $covid->title }}</h2>
                </div>
                <div class="covid-body my-4">
                    <p class="covid-text">
                        @php
                            echo substr($covid->subtitle, 0, 333);
                        @endphp...</p>
                        <a href="#" class=""  data-toggle="modal" data-target="#covid_modal">+ Read more details</a>
                        @can('admin')

                            <a href="{{ route('covids.edit',$covid->id) }}"><button
                                    type="button" class="btn btn-warning">Edit</button></a> </td>
                        @endcan
                </div>
       

    </div>