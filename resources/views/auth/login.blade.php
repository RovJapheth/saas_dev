@extends('layouts.app')

@section('content')

<link href="{{ asset('css/log-in.css') }}" rel="stylesheet" />

<section class="">
		<div class="container">
			<div class="row justify-content-center">
				
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex" >
						<div>
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign In</h3>
			      		</div>
								
			      	</div>
							<form action="#" class="signin-form" method="POST" action="{{ route('login') }}">
                        @csrf

                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

			      		<div class="form-group mb-3">
			      			<label class="label" for="name">E-Mail</label>
			      			<input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
			      		</div>

                      
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                          
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
		              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
		            </div>
		            <div class="form-group d-md-flex">
		            
								
		            </div>
		          </form>
		         
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

@endsection
