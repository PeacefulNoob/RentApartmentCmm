@extends('layouts.app')



@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<div class="container">
    <h1>Create Property</h1>
    <form action="{{ route('properties.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="title" name="title" required>
            </div>
            <div class="form-group col-md-2">
                <label for="room_count">Room count</label>
                <select id="room_count" name="room_count" class="form-control" required>
                    <option value="1 ">1</option>
                    <option value="2 ">2</option>
                    <option value="3 ">3</option>
                    <option value="4 ">4</option>
                    <option value="5 ">5</option>
                    <option value="6 ">6</option>
                    <option value="7 ">7</option>
                    <option value="8 ">8</option>
                    <option value="9 ">9</option>
                    <option value="10 ">10</option>
                    <option value="11 ">11</option>
                    <option value="12 ">12</option>
                    <option value="13 ">13</option>
                    <option value="14 ">14</option>
                    <option value="15 ">15</option>
                    <option value="16 ">16</option>
                    <option value="17 ">17</option>
                    <option value="18 ">18</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="floor">Floor</label>
                <select id="floor" name="floor" class="form-control" required>
                    <option value="1 ">1</option>
                    <option value="2 ">2</option>
                    <option value="3 ">3</option>
                    <option value="4 ">4</option>
                    <option value="5 ">5</option>
                    <option value="6 ">6</option>
                    <option value="7 ">7</option>
                    <option value="8 ">8</option>
                    <option value="9 ">9</option>
                    <option value="10 ">10</option>
                    <option value="11 ">11</option>
                    <option value="12 ">12</option>
                    <option value="13 ">13</option>
                    <option value="14 ">14</option>
                    <option value="15 ">15</option>
                    <option value="16 ">16</option>
                    <option value="17 ">17</option>
                    <option value="18 ">18</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="size">Size</label>
                <input type="number" id="size" class="size " name="size" required>
            </div>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" rows="3" name="description" required></textarea>
            </textarea>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>
            <div class="form-group col-md-3">
                <label for="street">Street</label>
                <input type="text" class="form-control" id="street" name="street" required>
            </div>
            <div class="form-group col-md-3">
                <label for="location_id">Location</label>
                <select id="location_id" class="form-control" name="location_id">
                    @forelse($locations as $location)
                        <option value={{ $location->id }}>{{ $location->city }}</option>
                    @empty
                        <option selected>No Locations</option>
                    @endforelse
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="property_type_id">Property Type</label>
                <select id="property_type_id" class="form-control" name="property_type_id" required>
                    @forelse($types as $type)
                        <option value={{ $type->id }}>{{ $type->title }}</option>
                    @empty
                        <option selected>No selected</option>
                    @endforelse
                </select>
            </div>
        </div>
        <div class=" form-group p-5">
            <label for="amenity" name="amenity" class="control-label">Choose amenity</label>
            <button type="button" class="btn btn-primary btn-xs" id="selectbtn-amenity">
                Select all
            </button>
            <button type="button" class="btn btn-primary btn-xs" id="deselectbtn-amenity">
                Deselect all
            </button>
            <select name="amenity[]" id="amenity" class="form-control select2" id="selectall-amenity" multiple required>
                @foreach($amenities as $amenity)
                    <option value="{{ $amenity->id }}">{{ $amenity->title }}</option>
                @endforeach
            </select>
            <br><br>
            <p class="help-block"></p>
            @if($errors->has('amenity'))
                <p class="help-block">
                    {{ $errors->first('amenity') }}
                </p>
            @endif
        </div>
        <div class="form-group ">
            <label for="persons">Persons</label>
            <select id="persons" name="persons" class="form-control" required>
                <option value="1 ">1</option>
                <option value="2 ">2</option>
                <option value="3 ">3</option>
                <option value="4 ">4</option>
                <option value="5 ">5</option>
                <option value="6 ">6</option>
                <option value="7 ">7</option>
                <option value="8 ">8</option>
                <option value="9 ">9</option>
                <option value="10 ">10</option>
                <option value="11 ">11</option>
                <option value="12 ">12</option>
                <option value="13 ">13</option>
                <option value="14 ">14</option>
                <option value="15 ">15</option>
                <option value="16 ">16</option>
                <option value="17 ">17</option>
                <option value="18 ">18</option>
            </select>
        </div>

        <div class="control-group form-group">
            <input type="file" id="file-1" class="file required" name="file[]" multiple>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>


<script src="/assets/js/select2.js"></script>
<script>
    $("#selectbtn-amenity").click(function () {
        $("#selectall-amenity > option").prop("selected", "selected");
        $("#selectall-amenity").trigger("change");
    });
    $("#deselectbtn-amenity").click(function () {
        $("#selectall-amenity > option").prop("selected", "");
        $("#selectall-amenity").trigger("change");
    });

</script>
@endsection
