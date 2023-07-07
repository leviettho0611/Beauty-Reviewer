@extends('Frontend.LayoutFE.mainlayout')

@section('content')
@include('Frontend.LayoutFE.slider')
<div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="mb60 text-center section-title">
                        <!-- section title start-->
                        <h1 style="text-align:center ;">Blog
                        </h1>
                        <!-- <h5 class="small-title ">Check out our top of the line hair care product collection -->
                        </h5>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row" >
                 @foreach($getBlog as $blog)
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                   
                    <div class="card" >
                        <img src="{{ asset('upload/Blog/image/' . $blog['image']) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{$blog['title']}} </h5>
                          <p class="card-text " style="font-size: 20px; position: relative; padding-right: 20px;">{{$blog['describe']}}  
                        </p>
                        <a href="{{ url('/blog/detail/'.$blog['id']) }}" class="btn btn-default">Read More</a>
                       
                        </div>
                      </div>
                     
                </div>
                 @endforeach
                
            </div>
        </div>
        <div style="float: right; margin-right: 10px;">
                                    {{ $getBlog->links() }}

                            </div>
    </div>

    <div class="space-medium bg-default" style="margin-bottom:50px;border-radius: 20px;" >
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"><img src="{{ asset('Frontend/images/BeautyLogo1.png')}}" alt="" class="img-responsive" style=" border-radius: 150px;  "></div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <div class="well-block" style=" width: 607px;border-radius: 20px;  " >
                        <h1>Beauty Reviewer
                        </h1>
                        <p>
                        <!-- <h5 class="small-title "></h5> -->
                        <strong>Beauty reviewer is a blog – dedicated to sharing content about beauty experiences, product reviews and more. That's why the blog's slogan is Beauty & More. </strong>
                        <strong>One fine day, Beauty discovered that she had bought fake cosmetics. Ask if people can stand it? On an equally beautiful day, Beauty discovered that the cosmetics she bought did not match the description of the shop... At the time 5-7 years ago, there were too few sources of information online to refer to, It's harder to find a review of a cosmetic product than going to heaven. Buying an unsatisfactory online item is inevitable. </strong>
                        <strong>I wonder if I should start a blog to review cosmetics – beauty products. Help our sisters have a reliable source of information for reference. Before deciding to buy something.</strong>
                        <strong>Beauty reviewer takes providing useful information to readers as a source of inspiration for content creation. Here Beauty specializes in making cosmetic reviews, product and service reviews... In order to help people have an objective and more specific view of the cosmetics, services, and beauty products that they care about. mind.</strong>
                        </p>
                        <a href="{{ url('/aboutus') }}" class="btn btn-default">Detail</a> 
                    </div>
                </div>
            </div>

        </div>
    </div>
    
    
   @endsection