<!DOCTYPE html>
<html lang="en">
<head>

<title>Enju</title>

<!--

Template 2099 Scenic

http://www.tooplate.com/view/2099-scenic

-->

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="{{ asset('frontendcss/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontendcss/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontendcss/css/magnific-popup.css') }}">

<link rel="stylesheet" href="{{ asset('frontendcss/css/owl.theme.css') }}">
<link rel="stylesheet" href="{{ asset('frontendcss/css/owl.carousel.css') }}">

<!-- MAIN CSS -->
<link rel="stylesheet" href="{{ asset('frontendcss/css/tooplate-style.css') }}">

</head>
<body>

<!-- PRE LOADER -->
<div class="preloader">
     <div class="spinner">
          <span class="sk-inner-circle"></span>
     </div>
</div>


<!-- MENU -->
<div class="navbar custom-navbar navbar-fixed-top" role="navigation">
     <div class="container">

          <!-- NAVBAR HEADER -->
          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
               <!-- lOGO -->
               <a href="index.html" class="navbar-brand">Enju</a>
          </div>

          <!-- MENU LINKS -->
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home" class="smoothScroll">Home</a></li>
               </ul>
          </div>

     </div>
</div>


<!-- HOME -->
<section id="home" class="parallax-section">
     <div class="overlay"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-8 col-sm-12">
                    <div class="home-text">
                         <h1>Enju</h1>
                         <p>Self taught html css and react native ( trying to learn how to draw )</p>
                         <ul class="section-btn">
                              <a href="#about" class="smoothScroll"><span data-hover="Discover More">Discover More</span></a>
                         </ul>
                    </div>
               </div>

          </div>
     </div>

     <!-- Video -->
     <video controls="" autoplay="" loop="" muted>
          <source src="{{ asset('frontendcss/videos/test.mp4') }}" type="video/mp4">
          Your browser does not support the video tag.
     </video>
</section>


<!-- ABOUT -->
<section id="about" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <div class="about-info">
                         <h3>Introducing Enju</h3>
                         <h1>This is my personal website where i upload all my artwork (in the future when i learned how to draw)</h1>
                    </div>
               </div>

          </div>
     </div>
</section>


<!-- PROJECT -->
<section id="project" class="parallax-section">
     <div class="container">
          <div class="row">
            @foreach ($images as $id)
               <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                         <a href="{{ url('uploads/'.$id->source) }}" class="image-popup">
                              <img src="{{ url('uploads/'.$id->source) }}" class="img-responsive" alt="">
                         
                              <div class="project-overlay">
                                   <div class="project-info">
                                        <h1>{{ $id->name }}</h1>
                                        <h3>Artist {{ $id->category }}</h3>
                                        <h3>Click to pop up!</h3>
                                   </div>
                              </div>
                         </a>
                    </div>
               </div>           
                @endforeach

          </div>
     </div>
</section>


<!-- TEAM -->



<!-- CONTACT -->
<section id="contact" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-3 col-md-6 col-sm-12">
                    <div class="section-title">
                         <h1>I Do What I Like!!</h1>
                    </div>
               </div>

               <div class="clearfix"></div>

               

          </div>
     </div>
</section>

<!-- FOOTER -->
<footer>
     <div class="container">
          <div class="row">

               <div class="col-md-5 col-sm-6">
                    <h2>My Test Website</h2>
                    <p>Seomthing here</p>
                    
                    
               </div>

               <div class="col-md-4 col-sm-6">
                    <div class="footer-info">
                        <h2>Keep in touch</h2>
                         <p><a href="#">enjudesu@gmail.com</a></p>
                    </div>
               </div>

               <div class="col-md-3 col-sm-12">
                    
                    <h2>About Me</h2>
                    <p>Still learning to draw to upload stuff here</p>
                    <ul class="social-icon">
                         <li><a href="#" class="fa fa-twitter"></a></li>
                         <li><a href="#" class="fa fa-facebook"></a></li>
                         <li><a href="#" class="fa fa-instagram"></a></li>
                         <li><a href="#" class="fa fa-linkedin"></a></li>
                    </ul>
                    
               </div>

               

               
               
          </div>
     </div>
</footer>

<!-- SCRIPTS -->
<script src="{{ asset('frontendcss/js/jquery.js') }}"></script>
<script src="{{ asset('frontendcss/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontendcss/js/jquery.parallax.js') }}"></script>
<script src="{{ asset('frontendcss/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontendcss/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontendcss/js/magnific-popup-options.js') }}"></script>
<script src="{{ asset('frontendcss/js/modernizr.custom.js') }}"></script>
<script src="{{ asset('frontendcss/js/smoothscroll.js') }}"></script>
<script src="{{ asset('frontendcss/js/custom.js') }}"></script>

</body>
</html>