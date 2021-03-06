<x-home-master>
@section('content')


<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li><a href="#">Clothing</a></li>
				<li class='active'>Floral Print Buttoned</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-xs">
	<div class='container'>
		<div class='row single-product'>

			<div class='col-xs-12 col-sm-12 col-md-9 rht-col'>
            <div class="detail-block">
				<div class="row">
                
					     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 gallery-holder">
    <div class="product-item-holder size-big single-product-gallery small-gallery">

        <div id="owl-single-product">
            <div class="single-product-gallery-item" id="slide1">
                <a data-lightbox="image-1" data-title="Gallery" href="{{asset('images/products/p1.jpg')}}">
                    <img class="img-responsive" alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/p1.jpg')}}" />
                </a>
            </div><!-- /.single-product-gallery-item -->

            <div class="single-product-gallery-item" id="slide2">
                <a data-lightbox="image-1" data-title="Gallery" href="{{asset('images/products/p2.jpg')}}">
                    <img class="img-responsive" alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/p2.jpg')}}" />
                </a>
            </div><!-- /.single-product-gallery-item -->

            <div class="single-product-gallery-item" id="slide3">
                <a data-lightbox="image-1" data-title="Gallery" href="{{asset('images/products/p3.jpg')}}">
                    <img class="img-responsive" alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/p3.jpg')}}" />
                </a>
            </div><!-- /.single-product-gallery-item -->

            <div class="single-product-gallery-item" id="slide4">
                <a data-lightbox="image-1" data-title="Gallery" href="{{asset('images/products/p4.jpg')}}">
                    <img class="img-responsive" alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/p4.jpg')}}" />
                </a>
            </div><!-- /.single-product-gallery-item -->

            

        </div><!-- /.single-product-slider -->


        <div class="single-product-gallery-thumbs gallery-thumbs">

            <div id="owl-single-product-thumbnails">
                <div class="item">
                    <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide1">
                        <img class="img-responsive" alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/p1.jpg')}}" />
                    </a>
                </div>

                <div class="item">
                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide2">
                        <img class="img-responsive" alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/p2.jpg')}}"/>
                    </a>
                </div>
                <div class="item">

                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="3" href="#slide3">
                        <img class="img-responsive" alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/p3.jpg')}}" />
                    </a>
                </div>
                <div class="item">

                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="4" href="#slide4">
                        <img class="img-responsive" alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/p4.jpg')}}" />
                    </a>
                </div>
               
            </div><!-- /#owl-single-product-thumbnails -->

            

        </div><!-- /.gallery-thumbs -->

    </div><!-- /.single-product-gallery -->
</div><!-- /.gallery-holder -->  
              			
					<div class='col-sm-12 col-md-8 col-lg-8 product-info-block'>
						<div class="product-info">
							<h1 class="name">{{$product->name}}</h1>
							
							<div class="rating-reviews m-t-20">
								<div class="row">
                                <div class="col-lg-12">
									<div class="pull-left">
										<div class="rating rateit-small"></div>
									</div>
									<div class="pull-left">
										<div class="reviews">
											<a href="#" class="lnk">({{$product->reviews()->count()}} Reviews)</a>
											
										</div>
									</div>
                                    </div>
								</div><!-- /.row -->		
							</div><!-- /.rating-reviews -->
							
							<div class="stock-container info-container m-t-10">
								<div class="row">
                                <div class="col-lg-12">
									<div class="pull-left">
										<div class="stock-box">
											<span class="label">Availability :</span>
										</div>	
									</div>
									<div class="pull-left">
										<div class="stock-box">
                      @if($product->quantity > 0)
											<span class="value">In Stock</span>
                      @else
                      <span class="value">Out of Stock</span>
                      @endif
										</div>	
									</div>
                                    </div>
								</div><!-- /.row -->	
							</div><!-- /.stock-container -->

							<div class="description-container m-t-20">
								<p>{{$product->content}}</p>
							</div><!-- /.description-container -->

							<div class="price-container info-container m-t-30">
								<div class="row">
									

									<div class="col-sm-6 col-xs-6">
										<div class="price-box">
											<span class="price">{{$product->price}} BDT</span>
											<span class="price-strike">$900.00</span>
										</div>
									</div>

									<div class="col-sm-6 col-xs-6">
										<div class="favorite-button m-t-5">
											<a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Wishlist" href="#">
											    <i class="fa fa-heart"></i>
											</a>
											<a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Add to Compare" href="#">
											   <i class="fa fa-signal"></i>
											</a>
											<a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="E-mail" href="#">
											    <i class="fa fa-envelope"></i>
											</a>
										</div>
									</div>

								</div><!-- /.row -->
							</div><!-- /.price-container -->

							<div class="quantity-container info-container">
								<div class="row">
									
									<div class="qty">
										<span class="label">Qty:</span>
									</div>
									
									<div class="qty-count">
										<div class="cart-quantity">
											<div class="quant-input">
								            
								                <input type="number" value="1" min="1">
							              </div>
							            </div>
									</div>

									<div class="add-btn">
										<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</a>
									</div>

									
								</div><!-- /.row -->
							</div><!-- /.quantity-container -->

							

							

							
						</div><!-- /.product-info -->
					</div><!-- /.col-sm-7 -->
				</div><!-- /.row -->
                </div>
				
				<div class="product-tabs inner-bottom-xs">
					<div class="row">
						<div class="col-sm-12 col-md-3 col-lg-3">
							<ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
								<li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
								<li><a data-toggle="tab" href="#review">REVIEW</a></li>
								<li><a data-toggle="tab" href="#tags">Q&A</a></li>
							</ul><!-- /.nav-tabs #product-tabs -->
						</div>
						<div class="col-sm-12 col-md-9 col-lg-9">

							<div class="tab-content">
								
								<div id="description" class="tab-pane in active">
									<div class="product-tab">
										<p class="text">{{$product->description}}</p>
									</div>	
								</div><!-- /.tab-pane -->

								<div id="review" class="tab-pane">
									<div class="product-tab">
																				
										<div class="product-reviews">
											<h4 class="title">Customer Reviews</h4>

											<div class="reviews">
												<div class="review">
													@if($product->reviews())
													@foreach($product->reviews()->paginate(1) as $review)
													<p><b>{{$review->customer->f_name}} {{$review->customer->l_name}}</b></p>
													<div class="review-title"><span class="summary">{{$review->summary}}</span><span class="date pull-right" ><i class="fa fa-calendar"></i><span>{{$review->created_at->diffForHumans()}} </span></span></div>
													<div class="text">{{$review->review_body}}</div>
													<hr>
													@endforeach
													{{$product->reviews()->paginate(1)->links()}}
													@endif

													</div>
											
											</div><!-- /.reviews -->
										</div><!-- /.product-reviews -->
										
										
							        </div><!-- /.product-tab -->
								</div><!-- /.tab-pane -->
								<div id="tags" class="tab-pane">
									<div class="product-tab">
																				
										<div class="product-reviews">
											<h4 class="title">Q&A</h4>

											<div class="reviews">
												<div class="review">
													@if($product->questionandanswers())
													@foreach($product->questionandanswers()->paginate(2) as $qanda)
													<p><b>{{$qanda->customer->f_name}} {{$qanda->customer->l_name}}</b></p>
													<div class="review-title"><span class="summary">{{$qanda->question}}</span><span class="date pull-right" ><i class="fa fa-calendar"></i><span>{{$qanda->created_at->diffForHumans()}} </span></span></div>
													@if($qanda->answer)
													<div class="text">{{$qanda->answer}}</div>
													@else
													<div class="text">Pending...</div>
													@endif
													<hr>
													@endforeach
													{{$product->questionandanswers()->paginate(2)->links()}}
													@endif

													</div>
											
											</div><!-- /.reviews -->
                                         
											<form class="form-inline form-cnt">
											<div class="form-container">
									
										

												<div class="form-group">
													<label for="exampleInputTag">Write Your Question: </label>
													<textarea name="question_body" id="" cols="30" rows="1"></textarea> 
													
												</div>

												<button class="btn btn-upper btn-primary btn-sm" type="submit">Submit</button>
											</div><!-- /.form-container -->
										</form>





										</div><!-- /.product-reviews -->
										
										
							        </div><!-- /.product-tab -->
								</div><!-- /.tab-pane -->

								<div id="" class="tab-pane">
									<div class="product-tag">
										
										<!-- <h4 class="title">Product Tags</h4> -->
										<form class="form-inline form-cnt">
											<div class="form-container">
									
										

												<div class="form-group">
													<label for="exampleInputTag">Write Your Question: </label>
													<textarea name="question_body" id="" cols="30" rows="1"></textarea> 
													
												</div>

												<button class="btn btn-upper btn-primary" type="submit">Submit</button>
											</div>
										</form>

										<form class="form-inline form-cnt">
											<div class="form-group">
												<label>&nbsp;</label>
												<!-- <span class="text col-md-offset-3">Use spaces to separate tags. Use single quotes (') for phrases.</span> -->
											</div>
										</form><!-- /.form-cnt -->

									</div><!-- /.product-tab -->
								</div><!-- /.tab-pane -->

							</div><!-- /.tab-content -->
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.product-tabs -->

				<!-- ============================================== UPSELL PRODUCTS ============================================== -->

<!-- ============================================== UPSELL PRODUCTS : END ============================================== -->
			
			</div><!-- /.col -->
			<div class="clearfix"></div>
		</div><!-- /.row -->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<div id="brands-carousel" class="logo-slider">

		<div class="logo-slider-inner">	
			<div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
				<div class="item m-t-15">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item m-t-10">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->
		    </div><!-- /.owl-carousel #logo-slider -->
		</div><!-- /.logo-slider-inner -->
	
</div><!-- /.logo-slider -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->



@endsection
</x-home-master>