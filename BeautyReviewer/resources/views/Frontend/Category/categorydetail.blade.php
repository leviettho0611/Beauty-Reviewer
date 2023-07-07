@extends('Frontend.LayoutFE.mainlayout')
@section('content')
@foreach($getBlog as $key => $value)
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="post-block">
                                <div class="row ">
                                    
                                    <!-- post block -->
                                    <div class="col-md-6">
                                        <div class="post-img">
                                            <img src="{{ asset('upload/Blog/image/' . $value['image']) }}" alt="" class="img-responsive"style="height: 500px;">
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="post-content">
                                            <h2><a href="#" class="title" target="_blank">{{$value['title']}}<h3></h3></a></h2>
                                            
                                            <p>Category: {{ \App\Models\category::find($value['id_category'])->name }}</p>

                                            <a href="{{ url('/shop/blog/detail/'.$value['id']) }}" class="btn btn-default">Read More</a>
                                             
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- /.post block -->
                            </div>
                        </div>
                        @endforeach
@endsection 