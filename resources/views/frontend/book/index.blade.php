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

                     <div class="description-box">   
                        <li  class="clearfix">
                            <div class="col-md-8">
                                <form action="{{ route('confirm') }}" method="post">
                                @csrf
                                    <label for="guider"> Your Guider </label><br> 
                                    <input type="text" name="guider" id="guider" value="{{ $guider }}" required class="form-control"><br>
                                    <label for="date"> Your Visit Date: </label>
                                    <input type="date" name="date" id="date" class="form-control" required><br>
                                    <label for="days"> Visited days? </label>
                                    <input type="text" name="days" id="days" class="form-control" placeholder="5" required value="{{ $days }}"><br>
                                    <label for="fees"> Your Payment for {{ $days }} Days </label>
                                    <input type="text" name="fees" id="fees" class="form-control" readonly required value="{{ $fees }} /- LKR"><br>
                                    <label for="payment_method" Payment Method ></label>
                                    <select name="payment_method" id="payment_method" class="form-control">
                                        <option value="card"> Card </option>
                                        <option value="pay_on_visit"> Pay On Visit </option>
                                    </select><br>
                                    <input type="hidden" name="place" value="{{ $place->id }}">
                                    <input type="submit" Value="Confirm" class="btn btn-success">
                                </form>
                            </div>
                        </li>
                    </div>

               
            </div>
         </div>
      </div>
</div>
        
   
@endsection