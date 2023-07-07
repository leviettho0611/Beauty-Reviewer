@extends('Frontend.LayoutFE.mainlayout')

@section('content')
@include('Frontend.LayoutFE.slider')
<div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="mb60 text-center section-title">
                        <!-- section title start-->
                        <h1>Featured post
                        </h1>
                        <!-- <h5 class="small-title ">Check out our top of the line hair care product collection -->
                        </h5>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                 @foreach($blogtitle as $blog)
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                   
                    <div class="card" style="width: 20rem;">
                        <img src="{{ asset('upload/Blog/image/'. $blog['image']) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{$blog['title']}} </h5>
                          <p class="card-text " style="font-size: 20px; position: relative; padding-right: 20px;">{{$blog['describe']}} 
                        </p>
                        <a href="#" class="btn btn-primary">real more</a>
                       
                        </div>
                      </div>
                     
                </div>
                 @endforeach
                
            </div>
        </div>
    </div>
    <div class="space-medium bg-default">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"><img src="{{ asset('Frontend/images/pexels-kadeem-stewart-15787344.jpg')}}" alt="" class="img-responsive"></div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <div class="well-block">
                        <h1>Meet beauty reviewer
                        </h1>
                        <h5 class="small-title ">best experience ever</h5>
                        <p>Beauty reviewer is a blog – dedicated to sharing content about beauty experiences, product reviews and more. That's why the blog's slogan is Beauty & More. <a href="https://easetemplate.com/">More.</a></p>
                        <p>On a beautiful day, Beauty discovered that she had bought fake cosmetics. Ask people if they can stand it? On an equally beautiful day, Beauty discovered that the cosmetics she bought did not match the description of the shop. At the time of… 5-7 years ago, there were too few sources of information on the internet to refer to and want to find. Reviewing a cosmetic product
                             is even more difficult than going to heaven. 
                             Buying an unsatisfactory product online is inevitable.</p>
                        <p>Best Free HTML CSS Website Templates for salon and hair cutting business. All features are clean designed</p>
                        <a href="# " class="btn btn-default">View More About us</a> </div>
                </div>
            </div>
        </div>
    </div>
    
    
   @endsection