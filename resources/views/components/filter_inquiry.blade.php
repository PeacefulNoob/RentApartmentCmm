<div class="modal fade bd-example-modal-lg" id="filter_inquiry" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-covid m-0" role="document">
    <div class="modal-content filterModal">
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="mobile fitlerDiv">
                        <!-- multistep form -->
                        <form method="GET" action="{{ route('filter.properties') }}"  id="msform"  >
                        @csrf
                        <ul id="progressbar">
                            <li class="active">Location</li>
                            <li>Type</li>
                            <li>Persons</li>
                        </ul>
                        <!-- fieldsets -->
                        <fieldset>
                        <h2 class="fs-title">Where would you like to rent real estate?</h2>
                        <h3 class="fs-subtitle">This is step 1</h3>
                            <select name="city" id="city" class="form-control">
                                <option value="">All</option>

                            @foreach($cities as $city)
                                    <option value="{{$city->id}}" {{ (old("city") == $city->id ? "selected":"") }}>{{$city->city}}</option>
                            @endforeach
                        </select>
                            <input type="button" name="next" class="next action-button" value="Next" />
                        </fieldset>
                        <fieldset>
                            <h2 class="fs-title">Pick property type that fits you.</h2>
                            <h3 class="fs-subtitle">Your presence on the social network</h3>
                            <select name="type"  id="type" class="form-control" >
                                <option value="">All</option>

                            @foreach($types as $type)
                                     <option value="{{$type->id}}" {{ (old("type") == $type->id ? "selected":"") }}>{{$type->title}}</option>
                                @endforeach
                            </select>
                            <input type="button" name="previous" class="previous action-button" value="Previous" />
                            <input type="button" name="next" class="next action-button" value="Next" />
                        </fieldset>
                        <fieldset>
                            <h2 class="fs-title">How many guests</h2>
                            <h3 class="fs-subtitle">We will never sell it</h3>
                            <select name="persons"  id="persons" class="form-control" >
                                            <option value="{{old('persons')}}"> {{old('persons')}}</option>
                                            <option value="">All</option>
                                            <option value="1">1</option>
                                            <option value="2"> 2</option>
                                            <option value="3"> 3</option>
                                            <option value="4"> 4</option>
                                            <option value="5"> 5</option>
                                            <option value="6"> 6</option>
                                            <option value="7"> 7</option>
                                        </select>
                            <input type="button" name="previous" class="previous action-button" value="Previous" />
                            <button class=" submit action-button ">GO!</button>

                        </fieldset>
                        </form>
                    </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn " data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>