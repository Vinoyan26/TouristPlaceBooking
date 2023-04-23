@extends('layouts.backend.dashboard')
@section('content')

<div class="product_create">
<h4 align="center" style="margin-bottom:30px;"> <b>  Add Your New Place </b> </h4>
<div class="container">
    <form action="{{ route('place.update',$place->id) }}" method="post" enctype="multipart/form-data" onsubmit="return(validate());" name="createform">
    @csrf
    @method('put')
    
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="place" class="text-uppercase"> Visited Place Name </label>
                <input type="text" class="form-control " id="place" name="place" placeholder="Place" required value="{{ $place->place }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="barcode" class="text-uppercase"> Guiders </label>
                <input type="text" name="guider" id="guider" required class="form-control" placeholder='Name' value="{{ $place->guider }}">
            </div>            
        </div>


        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="district" class="text-uppercase"> District </label>
                <input type="text" class="form-control " id="district" name="district" placeholder="district" value="{{ $place->district }}" required>
                <span class="error"><p id="district_error"> </p></span>
            </div>
            <div class="col-md-4 mb-3">
                <label for="address" class="text-uppercase"> Address </label>
                <input type="text" class="form-control " id="address" name="address" placeholder="Address" value="{{ $place->address }}" required>
                <span class="error"><p id="address_error"> </p></span>
            </div>
            <div class="col-md-4 mb-3">
                <label for="image" class="text-uppercase"> Main Image </label> <br>
                <input type="file" class="form-control " id="image" name="image" value="{{ $place->image }}" required>
                <span class="error"><p id="image_error"> </p></span>
            </div>            
        </div>

        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label for="description" class="text-uppercase"> Description </label>
                <textarea name="description" id="description" cols="description" rows="2" cols="4" class="form-control"  required>{{ $place->description }}</textarea>
            </div>
        </div>

        <br>
        <br>

        <br>
        <div style="margin-bottom:30px;">
            <input type="submit" value="Update" class="btn btn-primary">
            <a href="{{ route('place.index') }}" class="btn btn-danger"> Cancel </a>
        </div>
</form>
</div>

@endsection