<div class="header">
        <div class="container">  
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <a href="{{ url('/') }}"><img src="{{ asset('Frontend/images/BeautyLogo1.png')}}" style="width: 150px;" alt=""></a>
                </div>
                <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
                    <div class="navigation">
                        <div id="navigation">
                            <ul>
                                <li class="active"><a href="{{ url('/') }}" title="Home">Home</a></li>
                                <li class="active"><a href="{{ url('/category') }}" title="Category">category</a>
                                    <!-- <ul>
                                        <li><a href="service-list.html" title="Service List">Service List</a></li>
                                        <li><a href="service-detail.html" title="Service Detail">Service Detail</a></li>
                                    </ul> -->  </li>
                                    
                                <li class="active"><a href="{{ url('/blog') }}" title="Blog ">Blog</a>
                                    <!-- <ul>
                                        <li><a href="blog-default.html" title="Blog">Blog Default</a></li>
                                        <li><a href="blog-single.html" title="Blog Single ">Blog Single</a></li>
                                    </ul> -->
                                </li>
                                <li class="active"><a class="account" href="{{ url('/shop/account') }}" title="Account">Account</a> </li>
                                
                                 <!-- <span class="glyphicon glyphicon-user"></span> -->
                                <!-- <li><a href="#" title="Features">Features</a>
                                    <ul>
                                        <li><a href="testimonial.html" title="Service List">Testimonial</a></li>
                                        <li><a href="styleguide.html" title="Service Detail">Style Guide</a></li>
                                    </ul>
                                </li> -->
                                <li><a href="{{ url('/aboutus') }}" title="About Us">About Us</a></li>
                                <!-- <li><a href="styleguide.html" title="Styleguide">styleguide</a></li> -->
                                <li><a class="loginregister" href="{{ url('/shop/login') }}" style="background-color: #aa9144;" title="Login/Register" >Log in/Register</a></li>
                                <li>

                                    <a class="logout" href="{{ url('/shop/logout') }}"  title="Logout" >Log out</a>
                                </li>
                                
                                <!-- <li class="active"><a  href="{{ url('/shop/register') }}" title="Account" ><i class="glyphicon glyphicon-user"></i></a> </li> -->
                                <!-- Search form -->
                                <!-- <li class="active">
                                    <div class="form-outline">
                                        <div class="input-group">
                                          <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                          <button type="button" class="btn btn-outline-primary">search</button>
                                        </div>
                                    </div>
                                </li> -->
                                
                            </ul>
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="container">
        <div class="row">
            
                <div class="form-outline">
                    <form action="{{url('/search')}}" method   >
                            @csrf
                        <div class="input-group">
                          <input type="form-control" class="form-control rounded" placeholder="Search title" aria-label="Search" aria-describedby="search-addon" name='title' />
                          <button type="submit" class="btn btn-outline-primary">search</button>
                        </div>
                    </form>
                </div>
            
        </div>
    </div>
    </div>
