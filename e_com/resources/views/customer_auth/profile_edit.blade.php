<x-home-master>
@section('content')


<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li class='active'>Profile</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="row">
			<div class="blog-page">
				<div class="col-xs-12 col-sm-9 col-md-9 rht-col">
					
<form action="{{route('customer.update', $customer->id)}}" method="post" enctype="multipart/form-data">
@csrf
@method('PATCH')
<div class="blog-post-author-details wow fadeInUp">
	<div class="row">
		<div class="col-md-3">
			<img src="{{asset('images/testimonials/member1.png')}}" alt="Responsive image" class="img-circle img-responsive">
			<input type="file" name="image">
            
		</div>
        
		<div class="col-md-9">
			
			@if(Session::get('customeUpdateSuccess'))
			<div class="alert alert-success">
				{{Session::get('customeUpdateSuccess')}}
			</div>
			@endif
	
            <div class="form-group" >
			<label>First Name</label>
				<input type="text" name="f_name" class="form-control" value="{{$customer->f_name}}">
			</div>
            <div class="form-group" >
			<label>Last Name</label>
				<input type="text" name="l_name" class="form-control" value="{{$customer->l_name}}">
			</div>
            <div class="form-group" >
			<label>Email</label>
				<p><b>{{$customer->email}}</b></p>
			</div>
			<div class="form-group">
			<label>Address</label>
				<textarea name="address"  class="form-control" cols="20" rows="10" >{{$customer->address}}</textarea>
			</div>
            <div class="form-group" >
			<label >Phone</label>
				<input type="text" name="phone" class="form-control" value="{{$customer->phone}}">
			</div>
			<p><button type="button" class="btn btn-dark btn-sm" onClick="changePassword()"; >Change Password</button></p>
            
            <button id="edit_profile" type="submit" class="btn btn-primary btn-sm">Edit Profile</button>
</form>

			<form method="post" action="{{route('customer.update', $customer->id)}}">
				@csrf
				@method('PATCH')

			

			<div id="change_password">
			@if(Session::get('customerPasswordSuccess'))
			<div class="alert alert-success">
				{{Session::get('customerPasswordSuccess')}}
			</div>
			@endif
		

			<div class="form-group" >
			<label >Old Password</label>
				<input type="password" name="old_password" class="form-control" required>

			</div>
			<div class="form-group" >
			<label >New Password</label>
				<input type="password" name="password" class="form-control" required>
				<span class="text-danger">@error('password') {{ $message }} @enderror</span>
			</div>
			<div class="form-group" >
			<label >Confirm New Password</label>
				<input type="password" name="password_confirmation" class="form-control" required>
				<span class="text-danger">@error('confirm_password') {{ $message }} @enderror</span>
			</div>
			<button type="submit" class="btn btn-success btn-sm">Change</button>
			</div>
			
			</form>


		</div>
	</div>
</div>


	
<script>
  $("#change_password").hide();
  function changePassword(){
	
    $("#change_password").toggle();
	
  }
 
</script> 


                
			
				</div>
			</div>
		</div>
	</div>
</div>


    




@endsection
</x-home-master>