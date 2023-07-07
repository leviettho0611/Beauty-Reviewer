@extends('Frontend.LayoutFE.mainlayout')
@section('content')
<div class="page-breadcrumb">
                <div class="row">
                    
                    
                </div>
            </div>
             <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="{{url ('Frontend/avatar/'. Auth::user()->avatar )}}" class="rounded-circle"style="width: 300px;height: 300px;"  />
                                    <h4 class="card-title m-t-10"><?php echo Auth::user()->name;?></h4>
                                    <h6 class="card-subtitle"><?php echo Auth::user()->description;?></h6>
                                    
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                             
                            <div class="card-body">
                                <h4 class="text-muted" style="color: red;">Email address: </h4>
                                <h7><?php echo Auth::user()->email;?></h7> 
                                <h4 class="text-muted"style="color: red;">Phone:</h4>
                                <h7><?php echo Auth::user()->phone;?></h7> 
                                <h4 class="text-muted"style="color: red;">Address:</h4>
                                <h7><?php echo Auth::user()->address;?></h7>
                                
                                
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <?php
                       
                    ?>
                     
                    <!-- <div class="alert alert-danger">
                       <ul>
                           @foreach($errors->all() as $error)
                           <li> {{$error}}</li>
                           @endforeach
                       </ul>
                   </div> -->
                   
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" class="form-horizontal form-material" action="" enctype="multipart/form-data">
                                   
                                       
                                           @if($errors->any())
                                           <div class="alert alert-danger">
                                                <ul>
                                                    @foreach($errors->all() as $error)
                                                   <li> {{$error}}</li>
                                                   @endforeach
                                                </ul>
                                            </div>
                                            @endif
                                    
                                    @csrf 
                                    <div class="form-group">
                                        <label class="col-md-12">Full Name</label>
                                        <div class="col-md-12">
                                            <input type="text" name="name" value="<?php echo Auth::user()->name; ?>" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" name="email" value="<?php echo Auth::user()->email;?>" class="form-control form-control-line" name="example-email" id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input type="password" name="password" value="" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Phone No</label>
                                        <div class="col-md-12">
                                            <input type="text" name="phone"value="<?php echo Auth::user()->phone;?>" placeholder="phone" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Address</label>
                                        <div class="col-md-12">
                                            <input type="text" name="address"value="<?php echo Auth::user()->address;?>" value="" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Description</label>
                                        <div class="col-md-12">
                                            <textarea name="description"
                                             rows="5" class="form-control form-control-line"><?php echo Auth::user()->description;?></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input type="file" name="avatar"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                  
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
@endsection