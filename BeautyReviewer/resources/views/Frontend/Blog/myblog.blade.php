@extends('Frontend.LayoutFE.mainlayout')
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                
                
                    <div class="row">


                        <a href="{{ url('/shop/addblog') }}" id="singlebutton" name="singlebutton" class="btn btn-default" style="background-color: #000000;">Add Blog</a>
                        @foreach($getBlog as $key => $value)
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="post-block">
                                <div class="row ">
                                    
                                    <!-- post block -->
                                    <div class="col-md-6">
                                        <div class="post-img">
                                            <img src="{{ asset('upload/Blog/image/' . $value['image']) }}" style='height: 500px;' alt="" class="img-responsive">
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="post-content">
                                            <h2><a href="#" class="title" target="_blank">{{$value['title']}}</a></h2>
                                            <p>Category: {{ \App\Models\category::find($value['id_category'])->name }}</p>
                                            
                                            <p>Describe:{{$value['describe']}}</p>
                                            <p>Description:{!! $value['content'] !!}</p>
                                            <!-- <a href="{{ url('/shop/blog/detail/'.$value['id']) }}" class="btn btn-default">Read More</a> -->
                                            <a href="{{ url('/shop/myblog/edit/'.$value['id']) }}" class="btn btn-default">Edit</a> 
                                            <a href="{{ url('shop/myblog/delete/'.$value['id']) }}" class="btn btn-default">Delete</a> 
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- /.post block -->
                            </div>
                        </div>
                        @endforeach
                        <div style="float: right; margin-right: 10px;">
                                    {{ $getBlog->links() }}

                            </div>
                                         
                        
                        
                    </div>
                
            </div>
        </div>
    </div>

@endsection 
@section('js')
  <script>
    // function myeye() {
    //   var input = document.getElementById('form2Example27');
    //   if (input.type === "password") {
    //     input.type = "text";
    //   } else {
    //     input.type = "password";
    //   }
    // }
  </script>
@endsection
