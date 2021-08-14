<div class="row">
		<div class="col-md-12">
			<h3 class="title-review-comments">{{$post->comments()->count()}} Comments</h3>
		</div>
		@foreach($post->comments->reverse()->take(5) as $comment)
		<div class="col-md-2 col-sm-2">
			<img src="{{asset('images/testimonials/member1.png')}}" alt="Responsive image" class="img-rounded img-responsive">
		</div>
       
		
		<div  class="col-md-10 col-sm-10 blog-comments outer-bottom-xs">
			<div class="blog-comments inner-bottom-xs">
                @if($comment->customer)
				<h4 id = "b">{{$comment->customer->f_name}}</h4>
                 @else
                <h4 id = "b">{{$comment->user->name}}</h4> <span>(admin)</span>
                @endif
				<span class="review-action pull-right">
					On, {{$comment->created_at->diffForHumans()}}    
					
					<!-- <button type="button" onClick="MyFunction();"> Reply</button> -->
				</span>
				<p>{{$comment->comment}}</p>
				<!-- <p><a href="">Reply</a>|<a href="">Delete</a>|<a href="">Edit</a></p>
				 -->
				 <form action="{{route('comment.destroy',$comment->id)}}" method="post">
					 @csrf
					 @method('DELETE')
				 <a href="javascript:void(0)"  class="btn-upper btn btn-info btn-sm "> Reply</a>&nbsp<a href="javascript:void(0)"class="btn-upper btn btn-warning btn-sm ">Edit</a>&nbsp <button type="submit" class="btn-upper btn btn-danger btn-sm " onClick="return confirm('Do you want to delete your comment?')">Delete</button>
				</form>   
				
			</div> 
	
			<!-- reply -->
			<div class="blog-comments-responce outer-top-xs ">
				<div class="row">
					@foreach($comment->replies as $reply)
					<div class="col-md-2 col-sm-2">
						<img src="{{asset('images/testimonials/member2.png')}}" alt="Responsive image" class="img-rounded img-responsive">
					</div>

					<div class="col-md-10 col-sm-10 outer-bottom-xs">
						<div class="blog-sub-comments inner-bottom-xs">
							<h4>{{$reply->comment->post->user->name}}</h4>
							<span class="review-action pull-right">
							On, {{$reply->created_at->diffForHumans()}}   
								
								<!-- <a href="#"> Reply</a> -->
							</span>
							<p>{{$reply->reply}}</p>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>

        @endforeach


		<!-- Reply Functions -->
		<div id="comment_box" class="row">
				<div class="col-md-12">
					<form class="register-form" role="form">
						<div class="form-group">
						<label class="info-title" for="exampleInputComments">Your Reply <span>*</span></label>
						<textarea class="form-control unicase-form-control" id="exampleInputComments" ></textarea>
					  </div>
					</form>
				</div>
				<div class="col-md-12 outer-bottom-small">
					<button type="submit" class="btn-upper btn btn-primary btn-sm checkout-page-button">submit</button>
				</div>
			</div>


		<div class="post-load-more col-md-12"><a class="btn btn-upper btn-primary" href="#">Load more</a></div>
	</div>

    <script>
  $("#comment_box").hide();
  function MyFunction(){

    $("#comment_box").toggle();
  }
 
</script> 
