@extends('layouts.backend.dashboard')
@section('content')


    <div class="wrapper row">
        <div class="details col-md-12">
        
            <img src="{{ asset('images/places/'.$place->image) }}" width="400px;" alt="">
            <h3 class="title mb-3"> Visited Place: {{ $place->place }}</h3>
            <h4> District: {{ $place->district }} </h4>
            <h4> Address: {{ $place->address }} </h4>
            <h4> Description: {{ $place->description }} </h4>
            <h4> Guiders: @foreach($guider as $g) <a href=""> {{ $g }}, </a> @endforeach</h4>
            <br>
            <a href="{{ route('place.index') }}" class="btn btn-primary"> Back </a>
            <hr>
        </div>

    </div>
	

@endsection

