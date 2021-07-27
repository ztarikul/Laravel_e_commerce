<x-home-master>
@section('content')

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Registration</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
			<div class="row">
				<!-- Sign-in -->			

<!-- Sign-in -->

<!-- create a new account -->
<div class="col-md-6 col-sm-6 create-new-account">
	<h4 class="checkout-subtitle">Create a new account</h4>
	<p class="text title-tag-line">Create your new account.</p>
	<form class="register-form outer-top-xs" role="form" action="{{route('customer.store')}}" method="post">
		@csrf
			<div class="result">
			@if(Session::get('success'))
			<div class="alert alert-success">
				{{Session::get('success')}}
			</div>
			@endif
			
			@if(Session::get('fail'))
			<div class="alert alert-danger">
				{{Session::get('fail')}}
			</div>
	    @endif


		</div>



		<div class="form-group">
	    	<label class="info-title" for="exampleInputEmail2">Email Address <span>*</span></label>
	    	<input type="email" name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail2" value="{{old('email')}}">
			<span class="text-danger">@error('email') {{ $message }} @enderror</span>
	  	</div>
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Name <span>*</span></label>
		    <input type="text" name="name" class="form-control unicase-form-control text-input" id="exampleInputEmail1" value="{{old('name')}}" >
			<span class="text-danger">@error('name') {{ $message }} @enderror</span>
		</div>
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Phone Number <span>*</span></label>
		    <input type="text" name="phone" class="form-control unicase-form-control text-input" id="exampleInputEmail1" value="{{old('phone')}}" >
			<span class="text-danger">@error('phone') {{ $message }} @enderror</span>
		</div>
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Password <span>*</span></label>
		    <input type="password" name="password" class="form-control unicase-form-control text-input" id="exampleInputEmail1" value="{{old('password')}}" >
			<span class="text-danger">@error('password') {{ $message }} @enderror</span>
		</div>
         <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Confirm Password <span>*</span></label>
		    <input type="password" name="password_confirmation" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
			<span class="text-danger">@error('confirm_password') {{ $message }} @enderror</span>
		</div>
	  	<button type="submit"name="submit" class="btn-upper btn btn-primary checkout-page-button">Sign Up</button>
	</form>
	
	
</div>	
<!-- create a new account -->			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->

<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->


@endsection
</x-home-master>