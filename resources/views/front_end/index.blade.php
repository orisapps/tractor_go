@include('front_end.inc.header')
<body>

@include('front_end.inc.nav')
<!-- #header -->

<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-center">
            <div class="banner-content col-lg-12">
                <h1 class="text-white">
                    Find a tractor near you.
                </h1>
                <h4 class="text-gray">Search through <strong>450</strong> tractor owners close to you.</h4>
                <form action="search.html" class="serach-form-area">
                    <div class="row justify-content-center form-wrap">
                        <div class="col-lg-4 form-cols">
                            <select id="location" class="form-control" name="location" data-placeholder="Type a location, state, etc" data-width="100%"></select>
                        </div>
                        <div class="col-lg-3 form-cols">
                            <div class="default-select" id="default-selects">
                            <select>
                                <option value="1">Type of Tractor</option>
                                <option value="2">Utility Tractors</option>
                                <option value="3">Row Crop Tractor</option>
                                <option value="4">Orchard Type</option>
                                <option value="5">Industrial Tractor</option>
                                <option value="6">Rotary Tillers</option>
                                <option value="7">Half Track Tractors</option>
                                <option value="8">Implement Carrier</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 form-cols">
                        <div class="default-select" id="default-selects2">
                            <select>
                                <option value="1">Type of Operation</option>
                                <option value="2">Harrowing</option>
                                <option value="3">Ploughing</option>
                                <option value="4">Ridging</option>
                                <option value="5">De-stumping</option>
                                <option value="6">Planting</option>
                                <option value="7">Harvesting</option>
                                <option value="8">Spraying</option>
                                <option value="9">Irrigation</option>
                                <option value="10">Haulage</option>
                                <option value="11">Horticulture Bed Making</option>
                                <option value="12">Test Operation</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 form-cols">
                        <button type="button" class="btn btn-info">
                            <span class="lnr lnr-magnifier"></span> Search
                        </button>
                    </div>
            </div>
            <p class="text-white"><a href="#">Popular:</a><a href="#">#Abuja</a> <a href="#">#Portharcourt</a> <a
                    href="#">#Lagos</a> <a href="#">#Ilorin</a> <a href="#">#Lokoja</a> <a href="#">#Umuahia</a></p>
            <a href="#" style="color: #fff;"><h5>Find a Cluster <span class="lnr lnr-chevron-right"
                                                                      style="font-size: 10px !important;"></span></h5>
            </a>
        </div>
    </div>
</section>
<!-- End banner Area -->


<!-- Start features Area -->
<section class="features-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="the_process">The process...</h3>
                <hr>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card bg-light mb-3">
                    <div class="card-header">Step 1</div>
                    <div class="card-body">
                        <h3 class="card-title">Register</h3>
                        <p class="card-text">Sign Up as a Farmer or as a Tractor Owner. Tractor Owners get all the same
                            benefits as Farmers on TOG.</p>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#signupModal">
                        <div class="card-footer bg-secondary border-success" style="color: #fff; font-size: 18px;">Get
                            started <span class="lnr lnr-chevron-right"></span></div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card bg-light mb-3">
                    <div class="card-header">Step 2</div>
                    <div class="card-body">
                        <h3 class="card-title">List your Tractor</h3>
                        <p class="card-text">List your tractor or farming machinery on TOG, for hire or outright
                            purchase. Everybody wins.</p>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#signupModal">
                        <div class="card-footer bg-secondary border-success" style="color: #fff; font-size: 18px;">Get
                            started <span class="lnr lnr-chevron-right"></span></div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card bg-light mb-3">
                    <div class="card-header">Step 3</div>
                    <div class="card-body">
                        <h3 class="card-title">Get a Match</h3>
                        <p class="card-text">Get matched with Farmers in your area who need your tractor(s). Deliver
                            with appropriate logistics.</p>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#signupModal">
                        <div class="card-footer bg-secondary border-success" style="color: #fff; font-size: 18px;">Get
                            started <span class="lnr lnr-chevron-right"></span></div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card bg-light mb-3">
                    <div class="card-header">Step 4</div>
                    <div class="card-body">
                        <h3 class="card-title">Get Paid</h3>
                        <p class="card-text">After work done, make another request or just browse through our lists
                            and/or gallery. Bla bla bla bla bla. More Bla Bla...</p>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#signupModal">
                        <div class="card-footer bg-success border-success"
                             style="color: #fff; font-size: 18px; font-weight: bold;">Get started <span
                                class="lnr lnr-chevron-right"></span>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Signup Modal -->
            <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalTitle"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Register on TOG</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <a  href="{{route('register')}}">
                                <div class="card bg-light mb-3 sign-up-buttons">
                                    <div class="card-body">
                                        <h5 class="card-title">As a Farmer</h5>
                                        <span class="lnr lnr-leaf pull-right"></span>
                                    </div>
                                </div>
                            </a>
                            <a  href="{{route('register')}}">
                            <div class="card text-white bg-dark mb-3 sign-up-buttons">
                                <div class="card-body">
                                    <h5 class="card-title">As a Tractor Owner</h5>
                                    <span class="lnr lnr-users pull-right"></span>
                                </div>
                            </div>
                            </a>
                            <a  href="{{route('register')}}">
                            <div class="card text-white bg-secondary mb-3 sign-up-buttons">
                                <div class="card-body">
                                    <h5 class="card-title">As an Agent</h5>
                                    <span class="lnr lnr-briefcase pull-right"></span>
                                </div>
                            </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End features Area -->

<!-- Start feature-cat Area -->
<section class="feature-cat-area pt-100" id="category">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">TOG Services</h1>
                    <p>We work closely with the government and private sectors to deliver the best value for tractors to
                        farmers across Nigeria. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="single-fcat">
                    <a href="category.html">
                        <img src="{{asset('assets/img/01.png')}}" alt="">
                    </a>
                    <p>Search & Hire</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="single-fcat">
                    <a href="category.html">
                        <img src="{{asset('assets/img/02.png')}}" alt="">
                    </a>
                    <p>Outright Sales</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="single-fcat">
                    <a href="category.html">
                        <img src="{{asset('assets/img/o3.png')}}" alt="">
                    </a>
                    <p>Maintenance</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="single-fcat">
                    <a href="category.html">
                        <img src="{{asset('assets/img/04.png')}}" alt="">
                    </a>
                    <p>Servicing</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="single-fcat">
                    <a href="category.html">
                        <img src="{{asset('assets/img/o5.png')}}" alt="">
                    </a>
                    <p>Logistics</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="single-fcat">
                    <a href="category.html">
                        <img src="{{asset('assets/img/o6.png')}}" alt="">
                    </a>
                    <p>Training</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End feature-cat Area -->

<!-- Start callto-action Area -->
<section class="callto-action-area section-gap" id="join">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content col-lg-9">
                <div class="title text-center">
                    <h1 class="mb-10 text-white">Sign up today as a farmer or tractor owner.</h1>
                    <p class="text-white">TOG is Nigeria's Number One Tractor on Demand Service. We have more tractors
                        in our network than any other service of it's kind in Nigeria, and we have the cheapest
                        rates.</p>
                    <a class="primary-btn" href="#">I'm a Farmer</a>
                    <a class="primary-btn" href="#">I'm a Tractor Owner</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End calto-action Area -->

<!-- Start download Area -->
<section class="download-area section-gap" id="app">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 download-left">
                <img class="img-fluid" src="{{asset('assets/img/d1.png')}}" alt="">
            </div>
            <div class="col-lg-6 download-right">
                <h1>Download the <br>
                    TractorOnTheGo App Today!</h1>
                <p class="subs">
                    TOG is Tractor on the go service that can provide easy access to tractor services for users and
                    farmers. Our app was designed with simplcity, ease of use and functionality in mind, and you can be
                    rest assured that the hassles of finding reliable and efficient tractors for your farmland is a
                    thing of the past.
                </p>
                <div class="d-flex flex-row">
                    <div class="buttons">
                        <i class="fa fa-apple" aria-hidden="true"></i>
                        <div class="desc">
                            <a href="#">
                                <p>
                                    <span>Available</span> <br>
                                    on App Store
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="buttons">
                        <i class="fa fa-android" aria-hidden="true"></i>
                        <div class="desc">
                            <a href="#">
                                <p>
                                    <span>Available</span> <br>
                                    on Play Store
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="map-wrap" style="width:100%; height: 445px;">
                <br><br><br><br>  <div class="title text-center"><h1 class="mb-10">Lets Hear From You</h1></div><br><br>
              <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="350" id="gmap_canvas" src="https://maps.google.com/maps?q=33%2C%20Imam%20Dauda%20Street%2C%20Off%20Eric%20Moore%20Rd%20Surulere%2C%20Lagos%20Nigeria&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com">whats my home address</a></div><style>.mapouter{position:relative;text-align:right;height:350px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:350px;width:100p%;}</style></div>
            </div>
          <div class="col-lg-4 d-flex flex-column">
              <a class="contact-btns" href="#">About TOG</a>
              <a class="contact-btns" href="#">Buying</a>
              <a class="contact-btns" href="#">Join Community</a>
            </div>
            <div class="col-lg-8">
              <div><h1>KEEP IN TOUCH</h1>
              <br></div>
              <div>Our helpline is always open to receive any inquiry or feedback. Please feel free to drop us an email from the form below and we will get back to you as soon as we can. </div>
              <br>
              <form class="form-area " id="myForm" action="mail.php" method="post" class="contact-form text-right">
                <div class="row">
                  <div class="col-lg-12 form-group">
                    <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">

                    <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="nw-btn primary-btn" required="" type="email">

                    <input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">
                    <textarea class="common-textarea mt-10 form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                    <button class="primary-btn mt-20 text-white" style="float:right; background:#00a859;">Send Message</button>
                    <div class="mt-20 alert-msg" style="text-align: left;"></div>
                  </div>
                </div>
              </form>
            </div>

        </div>
    </div>
</section>
<!-- End download Area -->


<!-- start footer Area -->
@include('front_end.inc.footer')
</body>
</html>
