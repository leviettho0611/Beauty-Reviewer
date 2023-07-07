@extends('Frontend.LayoutFE.mainlayout')
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                
                
                    


                        
                        <a  href="{{ url('/shop/myblog') }}" id="singlebutton"  class="btn btn-default xx" style="background-color: #000000;">My Blog</a>
                        @foreach($getBlog as $key => $value)
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="post-block">
                                <div class="row " st>
                                    
                                    <!-- post block -->
                                    <div class="col-md-6">
                                        <div class="post-img">
                                            <img src="{{ asset('upload/Blog/image/' . $value['image']) }} "style='height: 500px;' alt="" class="img-responsive">
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
                        <div style="float: right; margin-right: 10px;">
                                    {{ $getBlog->links() }}

                            </div>
                                         
                        
                        
                    
                
            </div>
        </div>
    </div>

@endsection 
@section('js')
  <script type="text/javascript">
                $('.xx').click(function(){
                    var checklogin= "{{Auth::check()}}";
                    console.log(checklogin);
                    if(checklogin)
                    {
                        //alert('da dang nhap');
                        
                    }
                    else
                    {
                        alert('Yêu cầu đăng nhập');
                        //$(this).addclass('form');
                        //$("#hide").show();
                        return false;
                        
                    }
                    
                })
    </script>
@endsection
