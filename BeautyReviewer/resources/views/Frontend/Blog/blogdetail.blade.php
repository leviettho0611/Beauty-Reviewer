@extends('Frontend.LayoutFE.mainlayout')
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                
                
                    


                        <!-- <a href="{{ url('/shop/addblog') }}" id="singlebutton" name="singlebutton" class="btn btn-default" style="background-color: #000000;">Add Blog</a> -->
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="post-block">
                                <div class="row ">
                                    
                                    <!-- post block -->
                                    <div class="col-md-6">
                                        <div class="post-img">
                                            <img src="{{ asset('upload/Blog/image/' . $getBlogdetail['image']) }}" alt="" class="img-responsive"style="height: 500px;">
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="post-content">
                                            <h2><a href="#" class="title" target="_blank">{{$getBlogdetail['title']}}</a></h2>
                                            <p class="meta">   </p>
                                            <p>Category: {{ \App\Models\category::find($getBlogdetail['id_category'])->name }}</p>
                                            <p>Describe:{{$getBlogdetail['describe']}}</p>
                                            <p>Description:{!! $getBlogdetail['content'] !!}</p>
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- /.post block -->
                            </div>
                        </div>
                        
                        
                                         
                        
                        
                    </div>
                    <div class="row">
                        <div class="response-area">
                        <h2> RESPONSES</h2>
                        <ul class="media-list">
                             @foreach ($datacomment as $value)
                                @if($value->level==0)
                                
                                
                                <li class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object" src="{{url('frontend/avatar/'.$value->image)}}" alt="" width="70px">
                                    </a>
                                    <div class="media-body">
                                        <ul class="sinlge-post-meta">
                                            <li><i class="fa fa-user"></i><?php echo $value->name?></li>
                                            <!-- <li><i class="fa fa-clock-o"></i> 1:33 pm</li>
                                            <li><i class="fa fa-calendar"></i> DEC 5, 2013</li> -->
                                            <h3>Comment:</h3>
                                            <p><?php echo $value->comment;?></p>
                                        </ul>

                                        
                                        <a id="<?php echo $value->id?>" class="btn btn-primary xx" href="#cmt" ><i class="fa fa-reply"></i>
                                            Replay</a>
                                    </div>
                                </li>
                                
                                @endif
                                @foreach ($datacomment as $value2)

                                @if($value2->level==$value->id)
                                    <!-- level = id cha{ -->
                                        <li class="media second-media" style="margin-left:50px ;">
                                            <a class="pull-left" href="#">
                                                <img class="media-object" src="{{url('frontend/avatar/'.$value->image)}}" alt="" width="70px">
                                            </a>
                                            <div class="media-body">
                                                <ul class="sinlge-post-meta">
                                                    <li><i class="fa fa-user"></i><?php echo $value2->name?></li>
                                                    <h3>Comment:</h3>
                                                    <p><?php echo $value2->comment;?></p>
                                                    <!-- <li><i class="fa fa-clock-o"></i> 1:33 pm</li>
                                                    <li><i class="fa fa-calendar"></i> DEC 5, 2013</li> -->
                                                </ul>

                                                <!-- <a class="btn btn-primary xx" href=""><i class="fa fa-reply"></i>Replay</a> -->
                                            </div>
                                        </li>
                                    
                                @endif
                                @endforeach 
                            @endforeach
                            <div class="replay-box">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2>Leave a replay</h2>
                                
                                <form method="POST" id="cmt"  class="form-horizontal form-material" action="{{url('/blog/comment/'.$getBlogdetail['id'])}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <div class="col-md-12">    
                                            <div class="text-area">
                                                <div class="blank-arrow">
                                                    <label>Comment</label>
                                                </div>
                                                <span>*</span>
                                                <input class="levelinput" name="level" type="hidden" value="0">
                                                <textarea  name="comment" rows="3"class="form-control form-control-line"> </textarea>
                                                <button type="submit" class="btn btn-primary" >post comment</button>
                                            </div>
                                        </div>
                                
                                    </form> 
                                 </div>   
                            </div>
                        </div> 
                    </div><!--/Repaly Box-->
                            
                        </ul>                   
                    </div><!--/Response-area-->
                    </div>
                
            
        </div>
    </div>

@endsection 
@section('js')
  <script>
                $(document).ready(function(){
                    $('.xx').click(function(){
                        var id =$(this).attr('id');
                        console.log(id);
                        $(".levelinput").val(id);
                        
                        
                        })
                    }); 
                    $('form').submit(function () {
                         // e.preventDefault();
                        var checklogin= "{{Auth::check()}}";
                        var values = $("textarea").val();
                        // var id = $dataedit['id'];
                        
                        // alert(id);
                        alert(values); 
                         if(checklogin){
                             alert('dang nhap thanh cong');
                             if (values ==" ") {
                                alert('vui long nhap');
                                
                             }else{
                                alert('da nhap');
                                return true;
                             }
                             return false;
                        
                         }else{
                             alert('vui long dang nhap');
                            return false;
                         }
                          //return false;
                    })
                    
                
                            
                    
            </script>
@endsection
