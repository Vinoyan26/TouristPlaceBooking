@extends('layouts.backend.dashboard')
@section('content')


<div class="wrapper row">
    <div class="details col-md-6">
    
        <h3 class="title mb-3"> Name : {{ $user->name }}</h3>
        <h3 class="title mb-3"> Email : {{ $user->email }}</h3>
        <br>
        <a href="{{ route('customer.index') }}" class="btn btn-primary"> Back </a>
        <hr>
    </div>

</div>
		

@endsection

