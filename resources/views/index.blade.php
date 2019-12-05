<html lang="en">
  <head>
    <title>Welcome From Bags!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Arbutus+Slab|Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
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

          <div class=" text-center mx-5">
            <h1 class="m-0 site-logo"><a href="index.html">2BagsCare</a></h1>
          </div>

          <div class="text-left">

            <nav class="site-navigation position-relative" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
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
                <h1 class="text-black">We are 2BagsCare</h1>
                <p class="lead">We will help you to care your bags! </p>
              </div>
            </div>
          </div>
            
        </div>
      </div>

      <img src="images/team.png" alt="Image" class="img-face" data-aos="fade">

      
    </div>  

    

    
    <div class="site-section" id="services-section">
      <div class="container">
        <div class="row ">
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">Our Services</h2>
          </div>
          @foreach($services as $data)
          <div class="col-md-6 mb-4">
            <div class="service d-flex h-100">
              <div class="service-number mr-4"><span class="{{$data->icon}}"></span></div>
              <div class="service-about">
                <h3>{{$data->title}}</h3>
                <p>{{$data->content}}</p>
              </div>
            </div>
          </div>
            @endforeach

          <!-- <div class="col-md-6 mb-4">
            <div class="service d-flex h-100">
              <div class="service-number mr-4"><span class="icon-business_center"></span></div>
              <div class="service-about">
                <h3>Deep Cleaning</h3>
                <p>Membersihkan semua bagian tas, termasuk penghilangan noda tertentu yang sulit dihilangkan.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <div class="service d-flex h-100">
              <div class="service-number mr-4"><span class="icon-desktop_windows"></span></div>
              <div class="service-about">
                <h3>Repair</h3>
                <p>Memperbaiki tas anda yang rusak</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <div class="service d-flex h-100">
              <div class="service-number mr-4"><span class="icon-layers"></span></div>
              <div class="service-about">
                <h3>Repaint</h3>
                <p>Memperkuat warna yang pudar atau bahkan perwarnaan ulang</p>
              </div>
            </div>
          </div> -->

        </div>
      </div>
    </div>

    <div class="site-section" id="about-section">
      <div class="container">
        <div class="row ">
          <div class="col-12 mb-4 position-relative">
               <!-------- bagian isi About -------->  
            <h2 class="section-title">About Us</h2>
          </div>
          <div class="col-lg-4 order-1 order-lg-2 mb-4 mb-lg-0">
            <div class="bg-light pt-5">
            <img src="images/me.jpeg" alt="Image" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-4 order-2 order-lg-1"> 
            <p>Bergerak dalam bidang perawatan tas ya kawan - kawan.
              Foto disamping itu owner kita, ganteng kan hehe.
              Bisa di follow Instagram owner kita : @bagusariif hehe
            </p>
            <p></p>
          </div>
          <div class="col-lg-4 order-3 order-lg-3">
            <p></p>
            <p></p>
            <p><a href="#contact-section" class="btn smoothscroll btn-primary">Contact Me</a></p>
          </div>
          
        </div>
      </div>
    </div>

    </section>


    <section class="site-section bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5 text-white">Testimonials</h2>
          </div>
        </div>
        <div class="owl-carousel slide-one-item">
          <div class="slide">
            <blockquote>
                <!--------Bagian slider --------------->
              <p>Jangan bilang ke bang Virgil Abloh yaa gan tas frozen saya bisa terlihat seperti Louis Vuitton abis pake jasa disini</p>
              <p><cite>&mdash; Rihanna</cite></p>
            </blockquote>
          </div>
          <div class="slide">
            <blockquote>
              <p>Ganyangka sekarang setiap saya pake tas yang dibersihin disini, rejeki saya lancar gan</p>
              <p><cite>&mdash; Kanye West</cite></p>
            </blockquote>
          </div>
          <div class="slide">
            <blockquote>
              <p>Ownernya mirip maikel b jordan hihi, gemas</p>
              <p><cite>&mdash; Jorja Smith</cite></p>
            </blockquote>
          </div>
          <div class="slide">
            <blockquote>
              <p>Saya makin tambah keren ajadeh setelah membersihkan tas disini, ggwp gan </p>
              <p><cite>&mdash; A$AP Rocky</cite></p>
            </blockquote>
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
            <img src="images/Kanye.jpg" alt="Image" class="img-fluid"> Kanye West
          </div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-4 text-center">
            <img src="images/playboicarti.jpg" alt="Image" class="img-fluid">Sir Playboi Carti
          </div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-4 text-center">
            <img src="images/rihanna.jpg" alt="Image" class="img-fluid">Rihanna 
          </div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-4 text-center">
            <img src="images/Rocky.jpg" alt="Image" class="img-fluid">A$AP Rocky
          </div>      

          
          <div class="col-6 col-sm-6 col-md-4 col-lg-4 text-center">
            <img src="images/Virgil.png" alt="Image" class="img-fluid">Virgil Abloh
          </div> 
          <div class="col-6 col-sm-6 col-md-4 col-lg-4 text-center">
            <img src="images/jorjasmith.jpg" alt="Image" class="img-fluid">Jorja Smith
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
        <form action="#" class="form">
          <div class="row mb-4">
            <div class="form-group col-6">
              <input type="text" class="form-control" placeholder="First name">
            </div>
            <div class="form-group col-6">
              <input type="text" class="form-control" placeholder="Last name">
            </div>
          </div>

          <div class="row mb-4">
            <div class="form-group col-12">
              <input type="email" class="form-control" placeholder="Email address">
            </div>
          </div>

          <div class="row mb-4">
            <div class="form-group col-12">
              <input type="text" class="form-control" placeholder="Subject of the message">
            </div>
          </div>

          <div class="row mb-4">
            <div class="form-group col-12">
              <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Type your message here.."></textarea>
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
            <h3 class="footer-title">Warehouse</h3>
            <p><span class="d-inline-block d-md-block">Jl. Menuju Surga ,</span> Compton, LA</p>
          </div>
          <div class="col-md-5 mx-auto">
            <div class="row">
              <div class="col-lg-4">
                <h3 class="footer-title">Services</h3>
                <ul class="list-unstyled">
                  <li><a href="#">----------</a></li>
                  <li><a href="#">----------</a></li>
                  <li><a href="#">----------</a></li>
                </ul>
              </div>
              <div class="col-lg-4">
                <h3 class="footer-title">Resources</h3>
                <ul class="list-unstyled">
                  <li><a href="#">----------</a></li>
                  <li><a href="#">----------</a></li>
                  <li><a href="#">----------</a></li>
                </ul>
              </div>
              <div class="col-lg-4">
                <h3 class="footer-title">Links</h3>
                <ul class="list-unstyled">
                  <li><a href="#">----------</a></li>
                  <li><a href="#">----------</a></li>
                  <li><a href="#">----------</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h3 class="footer-title">Follow Me</h3>
            <a href="#" class="social-circle"><span class="icon-twitter"></span></a>
            <a href="#" class="social-circle"><span class="icon-facebook"></span></a>
            <a href="#" class="social-circle"><span class="icon-instagram"></span></a>
            <a href="#" class="social-circle"><span class="icon-linkedin"></span></a>
          </div>
        </div>

        <div class="row">
          <div class="col-12 text-center">
          <p>
           
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> 2BagsCare   
            
            </p>
            </div>
        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('js/jquery-ui.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('js/aos.js')}}"></script>
  <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
  <script src="{{asset('js/jquery.sticky.js')}}"></script>
  <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>

  
  <script src="js/main.js"></script>
    
  </body>
</html>