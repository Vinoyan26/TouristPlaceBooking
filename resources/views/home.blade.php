@extends('layouts.frontend.dashboard')
@section('content')

      <div class="product-page-main">
         <div class="container">

            <div class="row">
               <div class="col-md-12">
                  <div class="prod-page-title">
                     <h2>{{ $place->place }}</h2>
                  </div>
               </div>
            </div>

            <div class="row">

               <div class="col-md-2 col-sm-4">
                  <div class="left-profile-box-m prod-page">
                     <div class="pro-img">
                        <img src="{{ asset('images/places/'.$place->image) }}" alt="#" />
                     </div>
                  </div>
               </div>

               <div class="col-md-7 col-sm-8">
                  <div class="md-prod-page">
                        <div class="preview-pic tab-content">
                            <div class="tab-pane active" id="pic-1"><img src="{{ asset('images/places/'.$place->image) }}" alt="#" /></div>
                        </div>  

                        <b class="btn btn-success">   You have successfully Booked Your Dates for {{ $place->place }}   </b>
                        <a href="{{ url('/') }}" class="btn btn-info"> Done  </a>       
                  </div>
                </div>
            </div>
        </div>
        
   
@endsection