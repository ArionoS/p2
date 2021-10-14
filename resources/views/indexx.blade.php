@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 50
    });

} );
</script>
@stop
@extends('layouts.app1')

@section('content')
   <head>
      <meta charset="UTF-8">
      <title> </title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="a/css/font-awesome.min.css">
      <link rel="stylesheet" href="a/css/bootstrap.min.css">

      <link rel="stylesheet" href="a/css/animate-wow.css">
      <link rel="stylesheet" href="a/css/style.css">
      <link rel="stylesheet" href="a/css/bootstrap-select.min.css">
      <link rel="stylesheet" href="a/css/slick.min.css">
      <link rel="stylesheet" href="a/css/responsive.css">
   </head>
   <body>
      <header id="header" class="top-head">

      </header>
      <div class="modal fade lug" id="myModal" role="dialog">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Change</h4>
               </div>
               <div class="modal-body">
                  <ul>
                     <li><a href="about-us.html"><img src="a/images/help-icon.png" alt="" /> About US</a></li>
                     <li><a href="category.html"><img src="a/images/help-icon.png" alt="" /> Category </a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div id="sidebar" class="top-nav">
         <ul id="sidebar-nav" class="sidebar-nav">
            <li><a href="profile.html">Profile</a></li>
            <li><a href="howitworks.html">Product works</a></li>
            <li><a href="productpage.html">Product for Business</a></li>
         </ul>
      </div>
      <div class="page-content-product">
         <div class="main-product">
            <div class="container">
               <div class="row clearfix">
                  <div class="find-box">
                     <h1>Find your material needed<br>Come here</h1>
                     <h4>Nge - Gym</h4>
                     
                  </div>
               </div>
            
            </div>
         </div>
      </div>
      <div class="cat-main-box">
         <div class="container">
            <div class="row panel-row">
               <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.0s">
                  <div class="panel panel-default">
                     <div class="panel-body">
                        <img src="a/images/xpann-icon.jpg" class="icon-small" alt="">
                        <h4>“Chamb” Your Business</h4>
                        <p>Grow easily with chamb. Create free account.
                           We help expanding your business easily.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                  <div class="panel panel-default">
                     <div class="panel-body">
                        <img src="a/images/create-icon.jpg" class="icon-small" alt="">
                        <h4>Create and add</h4>
                        <p>Grow easily with chamb. Create free account.
                           We help expanding your business easily.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 wow fadeIn hidden-sm" data-wow-delay="0.4s">
                  <div class="panel panel-default">
                     <div class="panel-body">
                        <img src="a/images/get-icon.jpg" class="icon-small" alt="">
                        <h4>Get inspired</h4>
                        <p>Grow easily with chamb. Create free account.
                           We help expanding your business easily.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="products_exciting_box">
         <div class="container">
            <div class="row">
               <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                  <div class="exciting_box f_pd">
                     <img src="a/images/exciting_img-01.jpg" class="icon-small" alt="" />
                     <h4>Explore <strong>exciting</strong> and exotic products
                        tailored to you.
                     </h4>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        quis nostrud exercitation ullamco laboris..
                     </p>
                  </div>
               </div>
               <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                  <div class="exciting_box l_pd">
                     <img src="a/images/exciting_img-02.jpg" class="icon-small" alt="" />
                     <h4><strong>List your products on</strong> chamb and grow connections.</h4>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        quis nostrud exercitation ullamco laboris..
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="start-free-box">
         <div class="container">
            <div class="row">
               <div class="container">
                  <div class="main-start-box">
                     <div class="free-box-a clearfix">
                        <div class="col-md-6 col-sm-6">
                           <div class="left-a-f">
                              <h3>A platform built for scale & expansion. Start for free.</h3>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                           <div class="right-a-f">
                              <p>Over the comming years, way thet business through the web
                                 works will change at agreat - and chamb is the
                                 gamebreaker.
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="main-start-box">
                  <div class="bg_img_left"><img src="a/images/bg_img1.png" alt="#" /></div>
                  <div class="container">
                     <div class="buyer-box clearfix">
                        <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                           <div class="left-buyer">
                              <img class="img-responsive" src="landing2/demo-categories/gym/images/03.jpg" alt="#" />
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                           <div class="right-buyer">
                              <h4>Nge-Gym</h4>
                              <h2>CALISTHENICS<br>
                                 <span>With a many great tutorial</span>
                              </h2>
                              <p>Calisthenics is a motor movement or sport that uses body weight to build body muscles. The movement of this sport is fairly simple.
                              </p>
                              <a href="#">Create a buyer account</a>
                           </div>
                        </div>

                        <div class="row">
                           <div class="main-start-box">
                              <div class="bg_img_left"><img src="a/images/bg_img1.png" alt="#" /></div>
                              <div class="container">
                                 <div class="buyer-box clearfix">
                                    <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                                       <div class="left-buyer">
                                          <img class="img-responsive" src="landing2/demo-categories/gym/images/03.jpg" alt="#" />
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                                       <div class="right-buyer">
                                          <h4>Nge-Gym</h4>
                                          <h2>CALISTHENICS<br>
                                             <span>With a many great tutorial</span>
                                          </h2>
                                          <p>Calisthenics is a motor movement or sport that uses body weight to build body muscles. The movement of this sport is fairly simple.
                                          </p>
                                          <a href="#">Create a buyer account</a>
                                       </div>
                                    </div>

                                    <div class="row">
                                       <div class="main-start-box">
                                          <div class="bg_img_left"><img src="a/images/bg_img1.png" alt="#" /></div>
                                          <div class="container">
                                             <div class="buyer-box clearfix">
                                                <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                                                   <div class="left-buyer">
                                                      <img class="img-responsive" src="landing2/demo-categories/gym/images/03.jpg" alt="#" />
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                                                   <div class="right-buyer">
                                                      <h4>Nge-Gym</h4>
                                                      <h2>CALISTHENICS<br>
                                                         <span>With a many great tutorial</span>
                                                      </h2>
                                                      <p>Calisthenics is a motor movement or sport that uses body weight to build body muscles. The movement of this sport is fairly simple.
                                                      </p>
                                                      <a href="#">Create a buyer account</a>
                                                   </div>
                                                </div>

                                                <div class="row">
                                                   <div class="main-start-box">
                                                      <div class="bg_img_left"><img src="a/images/bg_img1.png" alt="#" /></div>
                                                      <div class="container">
                                                         <div class="buyer-box clearfix">
                                                            <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                                                               <div class="left-buyer">
                                                                  <img class="img-responsive" src="landing2/demo-categories/gym/images/03.jpg" alt="#" />
                                                               </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                                                               <div class="right-buyer">
                                                                  <h4>Nge-Gym</h4>
                                                                  <h2>CALISTHENICS<br>
                                                                     <span>With a many great tutorial</span>
                                                                  </h2>
                                                                  <p>Calisthenics is a motor movement or sport that uses body weight to build body muscles. The movement of this sport is fairly simple.
                                                                  </p>
                                                                  <a href="#">Create a buyer account</a>
                                                               </div>
                                                            </div>
                                                         </div>

                     </div></div></div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="bg_img_right"><img src="a/images/bg_img1.png" alt="#" /></div>
               <div class="main-start-box">
                  <div class="container">
                     <div class="supplier clearfix">
                        <div class="col-md-5 col-sm-6">
                           <div class="left-supplier">
                              <h4>supplier</h4>
                              <h2>Grow your store <br><span>With a new sales channel</span></h2>
                              <p>Never worry about sales or income ftom outbound
                                 channels. with chamb your store is directly
                                 connected to thousands of interested in your
                                 products.
                              </p>
                              .
                              <a href="#">Create a supplier account</a>
                           </div>
                        </div>
                        <div class="col-md-7 col-sm-6">
                           <div class="right-supplier">
                              <img class="img-responsive" src="a/images/supplier-pc-img.png" alt="#" />
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      <script src="a/js/jquery-1.12.4.min.js"></script> 
      <script src="a/js/bootstrap.min.js"></script> 
      <script src="a/js/bootstrap-select.min.js"></script>
      <script src="a/js/slick.min.js"></script> 
      <script src="a/js/wow.min.js"></script>
      <script src="a/js/custom.js"></script>
   </body>
</html>
@endsection