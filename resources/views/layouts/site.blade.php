<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Natural Food, Healthy Evening, Learn&nbsp;Cooking&nbsp;Online, Our Ice Cream, 30%off, 100% Organic Goodness, Subscribe And Follow Us, INTUITIVE">
  <meta name="description" content="">
  <title>Trang chủ | Trà Sen Bách Diệp</title>
  <link rel="stylesheet" href="{{url('assets')}}/css/style.css">
  <link rel="stylesheet" href="{{url('assets')}}/css/nicepage.css" media="screen">
  <script class="u-script" type="text/javascript" src="{{url('assets')}}/js/jquery.js" defer=""></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script class="u-script" type="text/javascript" src="{{url('assets')}}/js/nicepage.js" defer=""></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="{{url('assets')}}/css/bootstrap.min4.css">
  <link rel="stylesheet" type="text/css" href="{{url('assets')}}/css/main_styles.css">
  <link rel="stylesheet" type="text/css" href="{{url('assets')}}/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <meta name="generator" content="Nicepage 5.8.2, nicepage.com">
  <meta name="referrer" content="origin">

  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Merriweather:300,300i,400,400i,700,700i,900,900i">

  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "",
      "logo": "images/logophongtra.png"
    }
  </script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Home">
  <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>

<body class="u-body u-xl-mode">
  <header class="bg-body-tertiary">
    <div id="header" class="container">
      <div class="logo">
        <a href="{{route('home.index')}}">
          <img height="50px" src="{{url('assets')}}/images/logophongtra.png" alt="logo">
        </a>
      </div>
      <nav class="navbar ">
        <ul class="navbar_menu textheader">
          <li><a href="{{route('home.index')}}">TRANG CHỦ</a></li>
          <li><a href="{{route('home.about')}}">GIỚI THIỆU</a></li>
          <li><a href="{{route('home.product')}}">SẢN PHẨM</a></li>
          <li><a href="{{route('home.news')}}">TIN TỨC</a></li>
          <li><a href="{{route('home.contact')}}">LIÊN HỆ</a></li>
        </ul>
        <ul class="navbar_user">
          <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
          <li class="checkout">
            <a href="{{route('cart.view')}}">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
              <span id="checkout_items" class="checkout_items">{{$cart->total_quality}}</span>
            </a>
          </li>
          <li>
            <a href="#" class="dropdown-item">
              </a>
            </li>
            @if(Auth::guard('cus')->check())
            <li><a href="">{{Auth::guard('cus')->user()->name}}</a></li>
            <li><a href="{{route('home.logout')}}" id="logout" class="dropdown-item" onclick="return confirm('Bạn có chắc không?')">Logout</a></li>
            @else
            <li><a href="{{route('home.login')}}"><i class="fa fa-user" aria-hidden="true"></i></a></li>
            @endif
        </ul>
        <div class="hamburger_container">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
      </nav>
    </div>
  </header>
  <!-- header end -->


  @yield('main')


  <!-- footer -->
  <footer class="u-align-center u-clearfix u-footer u-image" id="sec-60ff" data-image-width="900" data-image-height="200">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-clearfix u-gutter-0 u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-layout-cell u-size-22 u-layout-cell-1">
              <div class="u-container-layout u-container-layout-1">
                <a href="https://nicepage.com/wordpress-website-builder" class="u-image u-logo u-image-1" data-image-width="183" data-image-height="54">
                  <img src="{{url('assets')}}/images/logophongtra.png" class="u-logo-image u-logo-image-1">
                </a>
                <p class="u-align-left u-custom-font u-text u-text-1">7.999.999.999</p>
                <p class="u-align-left u-custom-font u-text u-text-2">tranhbachdiep@gmail.com</p>
                <p class="u-align-left u-custom-font u-text u-text-3">Số 12, Quàng An, Hồ Tây, Hà Nội</p>
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-size-16 u-layout-cell-2">
              <div class="u-container-layout u-valign-top u-container-layout-2">
                <p class="u-custom-font u-text u-text-default u-text-4">VỀ CHÚNG TÔI</p>
                <p class="u-align-left u-custom-font u-text u-text-5">Gới Thiệu</p>
                <p class="u-align-left u-custom-font u-text u-text-6">Sản Phẩm</p>
                <p class="u-align-left u-custom-font u-text u-text-7">Tin Tức</p>
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-size-22 u-layout-cell-3">
              <div class="u-container-layout u-valign-top u-container-layout-3">
                <p class="u-align-left u-custom-font u-text u-text-8">LIÊN ​HỆ</p><span class="u-file-icon u-icon u-icon-1"><img src="{{url('assets')}}/images/9502707.png" alt=""></span><span class="u-file-icon u-icon u-icon-2"><img src="{{url('assets')}}/images/6433685.png" alt=""></span><span class="u-file-icon u-icon u-icon-3"><img src="{{url('assets')}}/images/3488294.png" alt=""></span>
                <p class="u-text u-text-9"> Copyright © 2010-2020&nbsp;</p>
                <p class="u-text u-text-10"> Tra Sen Bach Diep. All rights reserved.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <section class="u-backlink u-clearfix u-grey-80">
    <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
      <span>Website Templates</span>
    </a>
    <p class="u-text">
      <span>created with</span>
    </p>
    <a class="u-link" href="" target="_blank">
      <span>Website Builder Software</span>
    </a>.
  </section>

  <!-- js -->
  <script src="{{url('assets')}}/js/main.js"></script>

  @yield('js')
</body>

</html>