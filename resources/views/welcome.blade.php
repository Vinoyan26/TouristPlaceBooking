@extends('layouts.frontend.dashboard')
@section('content') 

      <div class="page-content-product">
         <div class="main-product">
            <div class="container">

               <div class="row clearfix">
                  <div class="find-box">
                     <h1>Find your best tourist place<br></h1>
                     <h4> We Guide You </h4>
                  </div>
               </div>

               <div class="row clearfix">

                  @foreach($places as $place)
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="{{ route('placev.index',$place->id) }}">
                        <div class="box-img">
                           <h4>{{ $place->place }}</h4>
                           <img src="{{ asset('images/places/'.$place->image) }}" class="one"/> <br> <br>
                           <h3> Visit </h3>
                        </div>
                     </a>
                  </div>
                  @endforeach
                  
               </div>
            </div>
         </div>
      </div>

@endsection





