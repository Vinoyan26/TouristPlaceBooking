@extends('layouts.frontend.dashboard')
@section('content')
<div id="mainBody">
	<div class="container">
	    <div class="row">

	        <div class="span9" style="width:600px; margin-left:300px;"> <br><br>
	        <h3> Login </h3>	
	            <div class="well">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}"> 
                    @csrf
            
                    <div class="control-group">
                        <label class="control-label" for="inputFname1">E-mail Address<sup>*</sup></label>
                        <div class="controls">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="inputFname1">Password <sup>*</sup></label>
                        <div class="controls">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>	  
		        </div>

                <div class="control-group">
                    <div class="controls">
                        <input type="hidden" name="email_create" value="1">
                        <input type="hidden" name="is_new_customer" value="1">
                        <input class="btn btn-large btn-success" type="submit" value="Login" />
                    </div>
                </div>		
	            </form>
            </div>

        </div>
    </div>
</div>

<br><br>

@endsection
