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
                        <div class="dex-a">
                           <h4>Description</h4>
                           <p>{{ $place->description }} </p>
                           <br>
                        </div>

                        <div class="spe-a">
                           <h4>Details</h4>
                           <ul>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Visited Place</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p>{{ $place->place }}</p>
                                 </div>
                              </li>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>District</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p>{{ $place->district }}</p>
                                 </div>
                              </li>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Address</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p>{{ $place->address }}</p>
                                 </div>
                              </li>
                              
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Guiders</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <table class="table">
                                        <tr>
                                            <th> Guider Name </th>
                                            <th> Contact </th>
                                            <td> Payment </td>
                                        </tr>
                                        @foreach($guider as $g)
                                        <?php $gu = DB::table('guiders')->where('name',$g)->first(); ?>
                                        <tr>
                                            <td> {{ $gu->name }}</td>
                                            <td> {{ $gu->phone }}</td>
                                            <td> {{ $gu->fees }}</td>
                                        </tr>
                                        @endforeach
                                    </table>
                                 </div>
                              </li>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Guider Payment Per Day</h5>
                                 </div>
                                 <div class="col-md-8">
                                    20000
                                 </div>
                              </li>
                              <li  class="clearfix">
                                <div class="col-md-4">
                                    <h5>Guiders</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <form action="{{ route('booknow') }}" method="post">
                                    @csrf
                                        <label for="guider"> Book Now Your Guider </label><br>
                                        <select name="guider" id="guider" class="form-control">
                                            @foreach($guider as $g)
                                                <option value="{{ $g }}"> {{ $g }}</option>
                                            @endforeach
                                        </select>
                                        <label for="days"> How many days? </label>
                                        <input type="text" name="days" id="days" class="form-control" placeholder="5" required><br>
                                        <input type="hidden" name="place_id" id="place_id" value="{{ $place->id }}">
                                        <input type="submit" Value="Book" class="btn btn-success">
                                    </form>
                                </div>
                              </li>
                           </ul>
                        </div>

                     </div>
                  </div>
               </div>

               
            </div>
         </div>
      </div>
</div>
        
   
@endsection