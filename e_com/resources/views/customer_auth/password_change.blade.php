<x-home-master>
@section('content')


<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li class='#'>Profile</li>
				
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
			<input type="file" name="image" value="Upload Image">
            
		</div>
        
		<div class="col-md-9">
			
	
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
				<input type="email" name="email" class="form-control" value="{{$customer->email}}">
			</div>
			<div class="form-group">
			<label>Address</label>
				<textarea name="address"  class="form-control" cols="20" rows="10" >{{$customer->address}}</textarea>
			</div>
            <div class="form-group" >
			<label >Phone</label>
				<input type="text" name="phone" class="form-control" value="{{$customer->phone}}">
			</div>
			<p><a href="#">Change Password</a></p>
            
            <button type="submit" class="btn btn-primary btn-sm">Edit Profile</button>
		</div>
	</div>
</div>

</form>
	



                
			
				</div>
			</div>
		</div>
	</div>
</div>


    




@endsection
</x-home-master>