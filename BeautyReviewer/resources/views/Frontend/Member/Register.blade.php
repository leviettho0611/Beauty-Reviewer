@extends('Frontend.LayoutFE.mainlayout')
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                
                
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1>Register</h1>
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
                                        <label class="col-md-12">Full Name</label>
                                        <div class="col-md-12">
                                            <input type="text" name="name" value="" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" name="email" value="" class="form-control form-control-line" name="example-email" id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input type="password" name="password" value="" class="form-control form-control-line">
                                        </div>
                                    </div>
                                      <div class="form-group">
                                        <label class="col-md-12">Phone</label>
                                        <div class="col-md-12">
                                            <input type="text" name="phone" placeholder="" class="form-control form-control-line">
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

                                      <div class="form-group">
                                        <label class="col-md-12">Avatar</label>
                                        <div class="col-sm-12">
                                            <input type="file" name="avatar"/>
                                        </div>
                                    </div>
                                    <div class="form-group">

                                      <div class="col-sm-12">
                                      <p class="form_signup_text">
                                                Don't have an account ?
                                                <a href="{{ url('/shop/login') }}" class="register_form_signup_link">Login</a>
                                      </div>
                                      <div class="col-sm-12">
                                      <p class="form_signup_text">
                                                Forgot password ?
                                                <a href="{{ url('/shop/forgotpassword') }}" class="register_form_signup_link">Reset Password</a>
                                      </div>
                                      </div>
                                    <div class="col-sm-12">
                                        
                                            
                                        <div class="form-group">

                                            <button id="singlebutton" name="singlebutton" class="btn btn-default">Register</button>
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
@section('js')
  <!-- <script>
    function myeye() {
      var input = document.getElementById('form2Example27');
      if (input.type === "password") {
        input.type = "text";
      } else {
        input.type = "password";
      }
    }
  </script> -->
@endsection
