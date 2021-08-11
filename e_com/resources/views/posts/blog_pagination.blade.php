<div class="col-xs-12 col-sm-9 col-md-9 rht-col">
					@foreach($posts as $post)
					<div class="blog-post  wow fadeInUp">
	<a href="{{route('post.show',$post->id)}}"><img class="img-responsive" src="{{asset('images/blog-post/blog_big_01.jpg')}}" alt=""></a>
	<h1><a href="">{{$post->title}}</a></h1>
	<span class="author">{{$post->user->name}}</span>
	<span class="review">{{$post->comments()->count()}} comments</span>
	
	<span class="date-time">{{date('M d, Y',strtotime($post->created_at))}} {{date("H:i A", strtotime($post->created_at))}}</span>
	<p>{{Str::limit($post->body, '200', '.....')}}</p>
	<a href="{{route('post.show',$post->id)}}" class="btn btn-upper btn-primary read-more">read more</a>
</div>
@endforeach

<span>
	{{$posts->links('pagination::bootstrap-4')}}
</span>
<div class="clearfix blog-pagination filters-container  wow fadeInUp" style="padding:0px; background:none; box-shadow:none; margin-top:15px; border:none">
						
	<div class="text-right">
         <div class="pagination-container">

</div><!-- /.pagination-container -->    </div><!-- /.text-right -->

</div><!-- /.filters-container -->				</div>