<x-home-master>
@section('content')

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
					

<div class="blog-post-author-details wow fadeInUp">
	<div class="row">
		<div class="col-md-2">
			<img src="{{asset('images/testimonials/member1.png')}}" alt="Responsive image" class="img-circle img-responsive">
            
		</div>
        
		<div class="col-md-10">
			<h4>{{$customer->name}}</h4>
	
            <p>Email: {{$customer->email}} </p>
            <p>Address: {{$customer->address}}</p>
            <p>Phone: {{$customer->phone}}</p>
            <p><a href="">Change Password</a></p>
            <a href="" class="btn btn-success btn-sm">Change Profile Picture</a>
		</div>
	</div>
</div>
	



                
			
				</div>
			</div>
		</div>
	</div>
</div>


    
    
@endsection
</x-home-master>



@endsection
</x-home-master>