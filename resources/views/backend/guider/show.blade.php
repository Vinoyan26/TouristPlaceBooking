@extends('layouts.backend.dashboard')
@section('content')


    <div class="wrapper row">
        <div class="details col-md-12">
        
            <h3 class="title mb-3"> Guider: {{ $guider->name }}</h3>
            <h4> Phone: {{ $guider->phone }} </h4>
            <h4> Fees: {{ $guider->fees }} </h4>
            <br>
            <a href="{{ route('guide.index') }}" class="btn btn-primary"> Back </a>
            <hr>
        </div>

    </div>
	

@endsection

