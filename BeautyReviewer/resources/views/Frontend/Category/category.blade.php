@extends('Frontend.LayoutFE.mainlayout')
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                
                
                    <div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">

								<li><a href="{{ url('/category') }}"><i class="fa fa-star"></i>All Blog</a></li>
								@foreach($getcategory as $category)
									
									<li>
									@foreach($getBlog as $blog)
									
										<li><a href="{{ url('/category/'.$category->id) }}"><i class="fa fa-star"></i>{{$category->name}} </a></li>
										@break
									@endforeach
									</li>
								@endforeach
								
								
							</ul>
						</div>
					</div>


                        
                        
                        @foreach($getBlog as $key => $value)
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="post-block">
                                <div class="row ">
                                    
                                    <!-- post block -->
                                    <div class="col-md-6">
                                        <div class="post-img">
                                            <img src="{{ asset('upload/Blog/image/' . $value['image']) }}" alt="" class="img-responsive" style="height: 500px;">
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="post-content">
                                            <h2><a href="#" class="title" target="_blank">{{$value['title']}}<h3></h3></a></h2>
                                            
                                            <p>Category: {{ \App\Models\category::find($value['id_category'])->name }}</p>

                                            <a href="{{ url('/blog/detail/'.$value['id']) }}" class="btn btn-default">Read More</a>
                                             
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- /.post block -->
                            </div>
                        </div>
                        @endforeach
                        <div style="float: right; margin-right: 10px; ">
                                    {{ $getBlog->links() }}

                            </div>
                                         
                        
                        
                    
                
            </div>
        </div>
    </div>

@endsection 

