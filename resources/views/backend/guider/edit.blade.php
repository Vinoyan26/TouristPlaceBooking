@extends('layouts.backend.dashboard')
@section('content')

<div class="product_create">
<h4 align="center" style="margin-bottom:30px;"> <b>  Edit Your Guider </b> </h4>
<div class="container">
    <form action="{{ route('guide.update',$place->id) }}" method="post" enctype="multipart/form-data" onsubmit="return(validate());" name="createform">
    @csrf
    @method('put')
    
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="name" class="text-uppercase"> Guider Name </label>
                <input type="text" class="form-control " id="name" name="name" placeholder="Name" value="{{ $place->name }}" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="phone" class="text-uppercase"> Phone </label>
                <input type="text" name="phone" id="phone" required class="form-control" value="{{ $place->phone }}" placeholder='Phone'>
            </div>   
            <div class="col-md-4 mb-3">
                <label for="fees" class="text-uppercase"> Fees: </label>
                <input type="text" name="fees" id="fees" required class="form-control" placeholder='Fees' value="{{ $place->fees }}">
            </div>          
        </div>

        <br>
        <div style="margin-bottom:30px;">
            <input type="submit" value="Update" class="btn btn-primary">
            <a href="{{ route('guide.index') }}" class="btn btn-danger"> Cancel </a>
        </div>
</form>
</div>

@endsection