<!doctype html>
<html lang="en">
  <head>
    <title>My Portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Arbutus+Slab|Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="{!!asset('theme/css/bootstrap.min.css')!!}">
    <link rel="stylesheet" href="{!!asset('theme/css/jquery-ui.css')!!}">
    <link rel="stylesheet" href="{!!asset('theme/css/owl.carousel.min.css')!!}">
    <link rel="stylesheet" href="{!!asset('theme/css/owl.theme.default.min.css')!!}">
    <link rel="stylesheet" href="{!!asset('theme/css/owl.theme.default.min.css')!!}">

    <link rel="stylesheet" href="{!!asset('theme/css/jquery.fancybox.min.css')!!}">

    <link rel="stylesheet" href="{!!asset('theme/css/bootstrap-datepicker.css')!!}">

    <link rel="stylesheet" href="{!!asset('theme/fonts/flaticon/font/flaticon.css')!!}">

    <link rel="stylesheet" href="{!!asset('theme/css/aos.css')!!}">

    <link rel="stylesheet" href="{!!asset('theme/css/style.css')!!}">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
          
          <div class="">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#services-section" class="nav-link">Services</a></li>
                <li><a href="#about-section" class="nav-link">About</a></li>
                
              </ul>
            </nav>
          </div>
          <div class="text-left">

            <nav class="site-navigation position-relative" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#portfolio-section" class="nav-link">Portfolio</a></li>
                <li><a href="#clients-section" class="nav-link">Client</a></li>
                <li><a href="#contact-section" class="nav-link">Contact</a></li>
              </ul>
            </nav>


            <div class="d-inline-block d-lg-none" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>


    <div class="site-blocks-cover overlay bg-light" id="home-section">

      <div class="container">
        <div class="row justify-content-center">

          <div class="col-md-12 mt-lg-5 text-left align-self-center text-intro">
            <div class="row">
              <div class="col-lg-6">
                <h1 class="text-black">I'm Ben Carson</h1>
                <p class="lead">I'm Web Developer Based on NY City</p>
                <p><a href="#portfolio-section" class="btn smoothscroll btn-primary">Portfolio</a></p>

              </div>
            </div>
          </div>
            
        </div>
      </div>

      <img src="{!!asset('theme/images/face.png')!!}" alt="Image" class="img-face" data-aos="fade">

      
    </div>  

    

    
    <div class="site-section" id="services-section">
      <div class="container">
        <div class="row ">
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">My Services</h2>
          </div>
          
          <div class="col-md-6 mb-4">
            <div class="service d-flex h-100">
              <div class="service-number mr-4"><span class="icon-style"></span></div>
              <div class="service-about">
                <h3>UI/UX Designer</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis ipsum error eligendi molestiae eaque quas, ducimus sequi excepturi?</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <div class="service d-flex h-100">
              <div class="service-number mr-4"><span class="icon-business_center"></span></div>
              <div class="service-about">
                <h3>Web Development</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis ipsum error eligendi molestiae eaque quas, ducimus sequi excepturi?</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <div class="service d-flex h-100">
              <div class="service-number mr-4"><span class="icon-desktop_windows"></span></div>
              <div class="service-about">
                <h3>Brand &amp; Logo Design</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis ipsum error eligendi molestiae eaque quas, ducimus sequi excepturi?</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <div class="service d-flex h-100">
              <div class="service-number mr-4"><span class="icon-layers"></span></div>
              <div class="service-about">
                <h3>Web Design</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis ipsum error eligendi molestiae eaque quas, ducimus sequi excepturi?</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section" id="about-section">
      <div class="container">
        <div class="row ">
          <div class="col-12 mb-4 position-relative">
            <h2 class="section-title">About Me</h2>
          </div>
          <div class="col-lg-4 order-1 order-lg-2 mb-4 mb-lg-0">
            <div class="bg-light pt-5">
            <img src="{!!('theme/images/face.png')!!}" alt="Image" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-4 order-2 order-lg-1">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis ipsum error eligendi molestiae eaque quas, ducimus sequi excepturi?</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis ipsum error eligendi molestiae eaque quas, ducimus sequi excepturi?</p>
          </div>
          <div class="col-lg-4 order-3 order-lg-3">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis ipsum error eligendi molestiae eaque quas, ducimus sequi excepturi?</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam qui maiores, ipsa quibusdam distinctio! Expedita ipsum ex porro obcaecati.</p>
            <p><a href="#contact-section" class="btn smoothscroll btn-primary">Contact Me</a></p>
          </div>
          
        </div>
      </div>
    </div>




    <section class="site-section block__62272" id="portfolio-section">
      

      <div class="container">
        <div class="row mb-5">
          <div class="col-12 position-relative">
            <h2 class="section-title text-center mb-5">My Portfolio</h2>
          </div>
        </div>

        
        <div id="posts" class="row no-gutter">
          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="{!!asset('theme/images/post_2.jpg')!!}" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="{!!asset('theme/images/post_2.jpg')!!}">
            </a>
          </div>
          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="{!!asset('themes/images/post_3.jpg')!!}" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="{!!asset('theme/images/post_3.jpg')!!}">
            </a>
          </div>

          <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="{!!asset('theme/images/post_4.jpg')!!}" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="{!!asset('theme/images/post_4.jpg')!!}">
            </a>
          </div>

          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">

            <a href="{!!asset('images/post_5.jpg')!!}" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="{!!asset('theme/images/post_5.jpg')!!}">
            </a>

          </div>

          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="{!!asset('theme/images/post_6.jpg')!!}" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="{!!asset('theme/images/post_6.jpg')!!}">
            </a>
          </div>

          <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="{!!asset('theme/images/post_2.jpg')!!}" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="{!!asset('theme/images/post_2.jpg')!!}">
            </a>
          </div>

          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="{!!asset('theme/images/post_3.jpg')!!}" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="{!!asset('theme/images/post_3.jpg')!!}">
            </a>
          </div>

          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="{!!asset('images/post_4.jpg')!!}" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="{!!asset('theme/images/post_4.jpg')!!}">
            </a>
          </div>

          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="{!!asset('theme/images/post_6.jpg')!!}" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="{!!asset('images/post_6.jpg')!!}">
            </a>
          </div>

          
        </div>
      </div>

    </section>

    <section class="site-section"  id="clients-section">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center">Clients</h2>
          </div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-4 text-center">
            <img src="{!!asset('theme/images/logo_1.jpg')!!}" alt="Image" class="img-fluid">
          </div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-4 text-center">
            <img src="{!!asset('theme/images/logo_2.jpg')!!}" alt="Image" class="img-fluid">
          </div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-4 text-center">
            <img src="{!!asset('theme/images/logo_3.jpg')!!}" alt="Image" class="img-fluid">
          </div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-4 text-center">
            <img src="{!!asset('theme/images/logo_4.jpg')!!}" alt="Image" class="img-fluid">
          </div>      

          
          <div class="col-6 col-sm-6 col-md-4 col-lg-4 text-center">
            <img src="{!!asset('theme/images/logo_5.jpg')!!}" alt="Image" class="img-fluid">
          </div> 
          <div class="col-6 col-sm-6 col-md-4 col-lg-4 text-center">
            <img src="{!!asset('theme/images/logo_6.jpg')!!}" alt="Image" class="img-fluid">
          </div> 
        </div>
      </div>
    </section>

    

    <section class="site-section" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">Contact Form</h2>
          </div>
        </div>
        @if($errors->any())
		        <ul class="alert-danger">
	      	    @foreach($errors->all() as $error)
				        <li>{{$error}}</li>
		          @endforeach
		      </ul>
        @endif
        @if ($message = Session::get('success'))
          <div class="alert alert-success">
              {{$message}}
          </div>
        @endif
      <form action="{{route('contact')}}" class="form" method="POST">
          {{csrf_field()}}
          <div class="row mb-4">
            <div class="form-group col-6">
              <input type="text" class="form-control" name="firstname" placeholder="First name" required>
            </div>
            <div class="form-group col-6">
              <input type="text" class="form-control" name="lastname" placeholder="Last name" required>
            </div>
          </div>

          <div class="row mb-4">
            <div class="form-group col-12">
              <input type="email" class="form-control" name="email" placeholder="Email address" required>
            </div>
          </div>

          <div class="row mb-4">
            <div class="form-group col-12">
              <input type="text" class="form-control" name="subject" placeholder="Subject of the message" required>
            </div>
          </div>

          <div class="row mb-4">
            <div class="form-group col-12">
              <textarea  cols="30" rows="10" name="message" class="form-control" placeholder="Type your message here.."></textarea>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <input type="submit" class="btn btn-primary" value="Send Message">
            </div>
          </div>
          
        </form>
      </div>
    </section>

    <footer class="site-section bg-light footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <h3 class="footer-title">Me Address</h3>
            <p><span class="d-inline-block d-md-block">203 Fake St. Mountain View,</span> San Francisco, California, USA</p>
          </div>
          <div class="col-md-5 mx-auto">
            <div class="row">
              <div class="col-lg-4">
                <h3 class="footer-title">Services</h3>
                <ul class="list-unstyled">
                  <li><a href="#">Web App</a></li>
                  <li><a href="#">Graphic</a></li>
                  <li><a href="#">Branding</a></li>
                </ul>
              </div>
              <div class="col-lg-4">
                <h3 class="footer-title">Resources</h3>
                <ul class="list-unstyled">
                  <li><a href="#">Web App</a></li>
                  <li><a href="#">Graphic</a></li>
                  <li><a href="#">Branding</a></li>
                </ul>
              </div>
              <div class="col-lg-4">
                <h3 class="footer-title">Links</h3>
                <ul class="list-unstyled">
                  <li><a href="#">Web App</a></li>
                  <li><a href="#">Graphic</a></li>
                  <li><a href="#">Branding</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h3 class="footer-title">Follow Me</h3>
            <a href="#" class="social-circle"><span class="icon-twitter"></span></a>
            <a href="#" class="social-circle"><span class="icon-facebook"></span></a>
            <a href="#" class="social-circle"><span class="icon-instagram"></span></a>
            <a href="#" class="social-circle"><span class="icon-dribbble"></span></a>
            <a href="#" class="social-circle"><span class="icon-linkedin"></span></a>
          </div>
        </div>

        <div class="row">
          <div class="col-12 text-center">
          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="{!!asset('theme/js/jquery-3.3.1.min.js')!!}"></script>
  <script src="{!!asset('theme/js/jquery-ui.js')!!}"></script>
  <script src="{!!asset('theme/js/popper.min.js')!!}"></script>
  <script src="{!!asset('theme/js/bootstrap.min.js')!!}"></script>
  <script src="{!!asset('theme/js/owl.carousel.min.js')!!}"></script>
  <script src="{!!asset('theme/js/jquery.easing.1.3.js')!!}"></script>
  <script src="{!!asset('theme/js/aos.js')!!}"></script>
  <script src="{!!asset('theme/js/jquery.fancybox.min.js')!!}"></script>
  <script src="{!!asset('theme/js/jquery.sticky.js')!!}"></script>
  <script src="{!!asset('theme/js/isotope.pkgd.min.js')!!}"></script>

  
  <script src="{!!asset('theme/js/main.js')!!}"></script>
    
  </body>
</html>