@extends('Frontend.LayoutFE.mainlayout')
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                
                
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1>Forgot Password</h1>
                            <p> Please complete the form below. </p>
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
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" name="email" value="" class="form-control form-control-line" name="example-email" id="example-email">
                                        </div>
                                    </div>
                                    
                                    
                                        
                        
                                
                                    <!-- <div class="col-md-6">
                                        <label class="control-label" for="Subject">Subject</label>
                                        <input type="text" name="Subject" id="Subject" placeholder="" class="form-control">
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label" for="textarea">Message</label>
                                            <textarea class="form-control" id="textarea" name="textarea" rows="6" placeholder=""></textarea>
                                        </div>
                                    </div> -->

                                      
                                    
                                    <div class="col-sm-12">
                                        
                                            
                                        <div class="form-group">

                                            <button id="singlebutton" name="singlebutton" class="btn btn-default">Submit</button>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>

@endsection 
