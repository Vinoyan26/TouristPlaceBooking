@extends('layouts.backend.dashboard')
@section('content')

<div class="product_create">
<h4 align="center" style="margin-bottom:30px;"> <b>  Add Your New Guider </b> </h4>
<div class="container">
    <form action="{{ route('guide.store') }}" method="post" enctype="multipart/form-data" onsubmit="return(validate());" name="createform">
    @csrf
    
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="name" class="text-uppercase"> Guider Name </label>
                <input type="text" class="form-control " id="name" name="name" placeholder="Name" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="phone" class="text-uppercase"> Phone </label>
                <input type="text" name="phone" id="phone" required class="form-control" placeholder='Phone'>
            </div>   
            <div class="col-md-4 mb-3">
                <label for="fees" class="text-uppercase"> Fees: </label>
                <input type="text" name="fees" id="fees" required class="form-control" placeholder='Fees'>
            </div>          
        </div>

        <br>
        <div style="margin-bottom:30px;">
            <input type="submit" value="Add" class="btn btn-primary">
            <a href="{{ route('guide.index') }}" class="btn btn-danger"> Cancel </a>
        </div>
</form>
</div>

@endsection