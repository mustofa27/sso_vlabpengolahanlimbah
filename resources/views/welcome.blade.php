
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>Lab Pengolahan Limbah ITS</title>

    <!-- Bootstrap core CSS -->
    <link href={{ asset('template/bootstrap/css/bootstrap.min.css') }} rel="stylesheet">

<!--

TemplateMo 570 Chain App Dev

https://templatemo.com/tm-570-chain-app-dev

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href={{ asset('template/css/templatemo-chain-app-dev.css') }}>
    <link rel="stylesheet" href={{ asset('template/css/animated.css') }}>
    <link rel="stylesheet" href={{ asset('template/css/owl.css') }}>

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src={{ asset('template/images/logo_its.png') }} alt="Lab Pengolahan Limbah ITS" style="height: 80px; width:auto;">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#about">About Us</a></li>
              <li class="scroll-to-section"><a href="#product">Product</a></li>
              <li><div class="gradient-button"><a id="modal_trigger" href="#modal"><i class="fa fa-sign-out-alt"></i> Sign Out</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
  
  <div id="modal" class="popupContainer" style="display:none;">
    <div class="popupHeader">
        <span class="header_title">Login</span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
    </div>

    <section class="popupBody">
        <!-- Social Login -->
        <div class="social_login">
            <div class="">
                <a href="#" class="social_box fb">
                    <span class="icon"><i class="fab fa-facebook"></i></span>
                    <span class="icon_title">Connect with Facebook</span>

                </a>

                <a href="#" class="social_box google">
                    <span class="icon"><i class="fab fa-google-plus"></i></span>
                    <span class="icon_title">Connect with Google</span>
                </a>
            </div>

            <div class="centeredText">
                <span>Or use your Email address</span>
            </div>

            <div class="action_btns">
                <div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
                <div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
            </div>
        </div>

        <!-- Username & Password Login form -->
        <div class="user_login">
            <form>
                <label>Email / Username</label>
                <input type="text" />
                <br />

                <label>Password</label>
                <input type="password" />
                <br />

                <div class="checkbox">
                    <input id="remember" type="checkbox" />
                    <label for="remember">Remember me on this computer</label>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><a href="#" class="btn btn_red">Login</a></div>
                </div>
            </form>

            <a href="#" class="forgot_password">Forgot password?</a>
        </div>

        <!-- Register Form -->
        <div class="user_register">
            <form>
                <label>Full Name</label>
                <input type="text" />
                <br />

                <label>Email Address</label>
                <input type="email" />
                <br />

                <label>Password</label>
                <input type="password" />
                <br />

                <div class="checkbox">
                    <input id="send_updates" type="checkbox" />
                    <label for="send_updates">Send me occasional email updates</label>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><a href="#" class="btn btn_red">Register</a></div>
                </div>
            </form>
        </div>
    </section>
</div>

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Selamat datang di lab virtual pengolahan limbah</h2>
                    <p>Lorem Ipsum Dolores Lorem Ipsum Dolores Lorem Ipsum Dolores</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src={{ asset('template/images/slider-dec.png') }} alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4><em>About Us</em></h4>
            <img src={{ asset('template/images/heading-line-dec.png') }} alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
            <div class="service-item margin-bottom20">
                <div class="icon-dosen">
                    <img class="rounded-circle mx-auto d-block" src="https://picsum.photos/id/3/80/80" data-holder-rendered="true">
                </div>
                <div class="text-center">
                    <h4 class="nama-dosen">Garner Noble</h4>
                    <p class="black">195308301974032002</p>
                    <p class="jurusan">Teknik Informatika</p>
                </div>
                
            </div>
        </div>      
        <div class="col-lg-3">
            <div class="service-item margin-bottom20">
                <div class="icon-dosen">
                    <img class="rounded-circle mx-auto d-block" src="https://picsum.photos/id/3/80/80" data-holder-rendered="true">
                </div>
                <div class="text-center">
                    <h4 class="nama-dosen">Garner Noble</h4>
                    <p class="black">195308301974032002</p>
                    <p class="jurusan">Teknik Informatika</p>
                </div>
                
            </div>
        </div>  
        <div class="col-lg-3">
            <div class="service-item margin-bottom20">
                <div class="icon-dosen">
                    <img class="rounded-circle mx-auto d-block" src="https://picsum.photos/id/3/80/80" data-holder-rendered="true">
                </div>
                <div class="text-center">
                    <h4 class="nama-dosen">Garner Noble</h4>
                    <p class="black">195308301974032002</p>
                    <p class="jurusan">Teknik Informatika</p>
                </div>
                
            </div>
        </div>  
        <div class="col-lg-3">
            <div class="service-item margin-bottom20">
                <div class="icon-dosen">
                    <img class="rounded-circle mx-auto d-block" src="https://picsum.photos/id/3/80/80" data-holder-rendered="true">
                </div>
                <div class="text-center">
                    <h4 class="nama-dosen">Garner Noble</h4>
                    <p class="black">195308301974032002</p>
                    <p class="jurusan">Teknik Informatika</p>
                </div>
                
            </div>
        </div>  
      </div>
      <div class="row">
        <div class="col-lg-3">
            <div class="service-item margin-bottom20">
                <div class="icon-dosen">
                    <img class="rounded-circle mx-auto d-block" src="https://picsum.photos/id/3/80/80" data-holder-rendered="true">
                </div>
                <div class="text-center">
                    <h4 class="nama-dosen">Garner Noble</h4>
                    <p class="black">195308301974032002</p>
                    <p class="jurusan">Teknik Informatika</p>
                </div>
                
            </div>
        </div>      
        <div class="col-lg-3">
            <div class="service-item margin-bottom20">
                <div class="icon-dosen">
                    <img class="rounded-circle mx-auto d-block" src="https://picsum.photos/id/3/80/80" data-holder-rendered="true">
                </div>
                <div class="text-center">
                    <h4 class="nama-dosen">Garner Noble</h4>
                    <p class="black">195308301974032002</p>
                    <p class="jurusan">Teknik Informatika</p>
                </div>
                
            </div>
        </div>  
        <div class="col-lg-3">
            <div class="service-item margin-bottom20">
                <div class="icon-dosen">
                    <img class="rounded-circle mx-auto d-block" src="https://picsum.photos/id/3/80/80" data-holder-rendered="true">
                </div>
                <div class="text-center">
                    <h4 class="nama-dosen">Garner Noble</h4>
                    <p class="black">195308301974032002</p>
                    <p class="jurusan">Teknik Informatika</p>
                </div>
                
            </div>
        </div>  
        <div class="col-lg-3">
            <div class="service-item margin-bottom20">
                <div class="icon-dosen">
                    <img class="rounded-circle mx-auto d-block" src="https://picsum.photos/id/3/80/80" data-holder-rendered="true">
                </div>
                <div class="text-center">
                    <h4 class="nama-dosen">Garner Noble</h4>
                    <p class="black">195308301974032002</p>
                    <p class="jurusan">Teknik Informatika</p>
                </div>
                
            </div>
        </div>  
      </div>
    </div>
  </div>

  <div id="product" class="pricing-tables">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4><em>Products</em></h4>
            <img src={{ asset('template/images/heading-line-dec.png') }} alt="">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing-item-pro">
            <span class="price">1</span>
            <h4>Modul 1</h4>
            <div class="icon">
              <img src={{ asset('template/images/pricing-table-01.png') }} alt="">
            </div>
            <ul>
              <li>Lorem Ipsum Dolores</li>
              <li>Lorem Ipsum Dolores</li>
              <li class="non-function">Lorem Ipsum Dolores</li>
              <li class="non-function">Lorem Ipsum Dolores</li>
              <li class="non-function">Lorem Ipsum Dolores</li>
              <li class="non-function">Lorem Ipsum Dolores</li>
            </ul>
            <div class="border-button">
              <a href="#">Pelajari Modul</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing-item-pro">
            <span class="price">2</span>
            <h4>Modul 2</h4>
            <div class="icon">
              <img src={{ asset('template/images/pricing-table-01.png') }} alt="">
            </div>
            <ul>
              <li>Lorem Ipsum Dolores</li>
              <li>Lorem Ipsum Dolores</li>
              <li>Lorem Ipsum Dolores</li>
              <li>Lorem Ipsum Dolores</li>
              <li class="non-function">Lorem Ipsum Dolores</li>
              <li class="non-function">Lorem Ipsum Dolores</li>
            </ul>
            <div class="border-button">
              <a href="#">Pelajari Modul</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing-item-pro">
            <span class="price">3</span>
            <h4>Modul 3</h4>
            <div class="icon">
              <img src={{ asset('template/images/pricing-table-01.png') }} alt="">
            </div>
            <ul>
              <li>Lorem Ipsum Dolores</li>
              <li>Lorem Ipsum Dolores</li>
              <li>Lorem Ipsum Dolores</li>
              <li>Lorem Ipsum Dolores</li>
              <li>Lorem Ipsum Dolores</li>
              <li>Lorem Ipsum Dolores</li>
            </ul>
            <div class="border-button">
              <a href="#">Pelajari Modul</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 

  <footer id="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="copyright-text">
            <p>Copyright © 2022 Chain App Dev Company. All Rights Reserved. 
          <br>Design: <a href="https://templatemo.com/" target="_blank" title="css templates">TemplateMo</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src={{ asset('template/jquery/jquery.min.js') }}></script>
  <script src={{ asset('template/bootstrap/js/bootstrap.bundle.min.js') }}></script>
  <script src={{ asset('template/js/owl-carousel.js') }}></script>
  <script src={{ asset('template/js/animation.js') }}></script>
  <script src={{ asset('template/js/imagesloaded.js') }}></script>
  <script src={{ asset('template/js/popup.js') }}></script>
  <script src={{ asset('template/js/custom.js') }}></script>
</body>
</html>