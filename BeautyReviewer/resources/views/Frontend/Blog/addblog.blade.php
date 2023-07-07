@extends('Frontend.LayoutFE.mainlayout')
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                
                
                    <div class="row">


                        
                                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1>Create Blog</h1>
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
                                        <label for="example-title" class="col-md-12">Title</label>
                                        <div class="col-md-12">
                                            <input type="text" name="title" value="" class="form-control form-control-line" name="title" id="title">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-describe" class="col-md-12">Describe</label>
                                        <div class="col-md-12">
                                            <input type="text" name="describe" value="" class="form-control form-control-line" name="describe" id="describe">
                                        </div>
                                    </div>
                                    @if(isset($datacategory) && count($datacategory) > 0)
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label  class="control-label" >Category</label>
                                            <select class="form-select" name="id_category">
                                                <option value="">No selected</option>
                                                @foreach($datacategory as $category)
                                                    <option value="{{$category->id}}" >{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                @endif
                                    <div class="form-group">
                                        <label class="col-sm-12">Image</label>
                                        <div class="col-sm-12">
                                           <input type="file" name="image" id="image"  >
                                          
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label" for="textarea">Description</label>
                                            <textarea class="form-control" id="content" name="content" rows="3" placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        
                                            
                                        <div class="form-group">

                                            <button id="singlebutton" name="singlebutton" class="btn btn-default">Add Blog</button>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('content', {
            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html')}}',
            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images')}}',
            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash')}}',
            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files')}}',
            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images')}}',
            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash')}}'
        } );
     </script>
@endsection 

