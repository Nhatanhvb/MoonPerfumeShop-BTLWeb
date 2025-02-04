<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#95097e" />
  <title>MoonPerfume</title>
  <!-- Icon title -->
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/icon-logo.svg" />
  <!-- fontAwesome Css -->
  <link rel="stylesheet" href="assets/css/Library/fontawesome.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  <!-- Swiper Css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <!-- Bootstrap Css -->
  <link rel="stylesheet" type="text/css" href="assets/css/Library/bootstrap.min.css" />
  <!-- Icon -->
  <link rel="stylesheet" type="text/css" href="assets/css/Library/linearicons.css" />
  <!-- Font family -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
  <!-- Style Css -->
  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
  <!-- Begin Header -->
  <header class="header" id="header">
    <div class="header-main">
      <div class="container">
        <div class="header-main__wrapper">
          <a href="index.php" class="header-logo"> Moon<span>Perfume</span>. </a>
          <ul class="header-nav">
            <li class="header-nav__item">
              <a href="index.php" class="header-link">Trang chủ</a>
            </li>
            <li class="header-nav__item">
              <a href="?action=shop" class="header-link">Sản phẩm </a>
              <ul class="header-menu">
                <li class="header-menu__component">
                  <a href="?action=shop" class="header-menu__item"> Nước hoa nam </a>
                </li>
                <li class="header-menu__component">
                  <a href="?action=shop" class="header-menu__item"> Nước hoa nữ </a>
                </li>
                <li class="header-menu__component">
                  <a href="?action=shop" class="header-menu__item"> Nước hoa unisex </a>
                </li>
                <li class="header-menu__component">
                  <a href="?action=shop" class="header-menu__item"> Nước hoa chiết <img src="assets/images/icons/stroke.svg" alt="" />
                  </a>
                  <ul class="header-submenu">
                    <li>
                      <a href="?action=shop" class="header-submenu__item">Nước hoa chiết nam</a>
                    </li>
                    <li>
                      <a href="?action=shop" class="header-submenu__item">Nước hoa chiết nữ</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="header-nav__item">
              <a href="?action=sale" class="header-link">khuyến mãi</a>
            </li>
            <li class="header-nav__item">
              <a href="?action=news" class="header-link">Tin tức</a>
            </li>
            <li class="header-nav__item">
              <a href="?action=contact" class="header-link active">liên hệ</a>
            </li>
          </ul>
          <div class="header-group">
            <button class="btnSearch" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
              <img src="assets/images/icons/search.svg" alt="" />
            </button>
                      <a href="?action=signupForm" class="header-user">

              <i class="fa-regular fa-user"></i>
            </a>
            <a href="?action=cart" class="header-cart">
              <img src="assets/images/icons/cart.svg" alt="">
              <span class="header-cart__tag position-absolute top-0 start-100 translate-middle badge rounded-pill"> 0 </span>
            </a>
          </div>
          <button class="navbar-toggler btnMenu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
            <img src="assets/images/icons/burger.svg" alt="" />
          </button>
        </div>
      </div>
    </div>
  </header>
  <!-- End Header -->
  <!-- Begin Content -->
  <main class="home">
    <section class="breadcrumb-option">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcrumb__text">
              <h1>Liên hệ</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Begin Contact -->
    <section class="contact">
      <div class="container mt-5">
        <h1 style="margin-bottom: 12px; color: #95097e;">Liên hệ với chúng tôi</h1>
        <div class="row">
          <div class="col-md-6">
            <form>
              <p style="margin-bottom: 30px; color: #95097e;">Điền thông tin theo mẫu dưới đây</p>
              <div class="mb-3">
                <input type="text" class="form-control" id="name" required placeholder="Họ và tên" style="margin-bottom: 20px; color: #95097e;">
              </div>
              <div class="mb-3">
                <input type="email" class="form-control" id="email" required placeholder="Email" style="margin-bottom: 20px; color: #95097e;">
              </div>
              <div class="mb-3">
                <textarea class="form-control" id="message" rows="3" required placeholder="Ghi chú" style="margin-bottom: 20px; color: #95097e;" s></textarea>
              </div>
              <button type="submit" class="btn" style="background-color: #95097e; color: white;">Gửi</button>
            </form>
          </div>
          <div class="col-md-6 d-flex justify-content-center align-items-center">
            <img src="assets/images/products/sp-1.png" alt="Image" class="img-fluid" style="width: 50%; margin-left: 150px;">
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact -->
    <section id="newsletter" class="newsletter">
      <div class="container">
        <div class="hm-footer-details">
          <div class="row">
            <div class=" col-md-3 col-sm-6 col-xs-12">
              <div class="hm-footer-widget">
                <div class="hm-foot-title">
                  <h4>Về MoonPerfume</h4>
                </div><!--/.hm-foot-title-->
                <div class="hm-foot-menu">
                  <ul>
                    <li><a href="index.php">Trang chủ</a></li><!--/li-->
                    <li><a href="?action=shop">Sản phẩm</a></li><!--/li-->
                    <li><a href="?action=news">Tin tức</a></li><!--/li-->
                    <li><a href="../.?action=contact">Liên hệ</a></li><!--/li-->
                  </ul><!--/ul-->
                  </ul><!--/ul-->
                </div><!--/.hm-foot-menu-->
              </div><!--/.hm-footer-widget-->
            </div><!--/.col-->
            <div class=" col-md-3 col-sm-6 col-xs-12">
              <div class="hm-footer-widget">
                <div class="hm-foot-title">
                  <h4>hướng dẫn</h4>
                </div><!--/.hm-foot-title-->
                <div class="hm-foot-menu">
                  <ul>
                    <li><a href="#">hướng dẫn mua hàng</a></li><!--/li-->
                    <li><a href="#">hướng dẫn thanh toán</a></li><!--/li-->
                    <li><a href="#">hướng dẫn giao nhận</a></li><!--/li-->
                    <li><a href="#">Điều khoản sử dụng</a></li><!--/li-->
                  </ul><!--/ul-->
                </div><!--/.hm-foot-menu-->
              </div><!--/.hm-footer-widget-->
            </div><!--/.col-->
            <div class=" col-md-3 col-sm-6 col-xs-12">
              <div class="hm-footer-widget">
                <div class="hm-foot-title">
                  <h4>chính sách</h4>
                </div><!--/.hm-foot-title-->
                <div class="hm-foot-menu">
                  <ul>
                    <li><a href="#">chính sách mua hàng</a></li><!--/li-->
                    <li><a href="#">chính sách bảo mật thông tin</a></li><!--/li-->
                    <li><a href="#">Chính sách giao hàng</a></li><!--/li-->
                    <li><a href="#">chính sách đổi trả - bảo hành</a></li><!--/li-->
                  </ul><!--/ul-->
                </div><!--/.hm-foot-menu-->
              </div><!--/.hm-footer-widget-->
            </div><!--/.col-->
            <div class=" col-md-3 col-sm-6  col-xs-12">
              <div class="hm-footer-widget">
                <div class="hm-foot-title">
                  <h4>Đăng ký</h4>
                </div><!--/.hm-foot-title-->
                <div class="hm-foot-para">
                  <p> Đăng ký để nhận tin tức mới nhất. </p>
                </div><!--/.hm-foot-para-->
                <div class="hm-foot-email">
                  <div class="foot-email-box">
                    <input type="text" class="form-control" placeholder="Enter Email Here....">
                  </div><!--/.foot-email-box-->
                  <div class="foot-email-subscribe">
                    <span><i class="fa fa-location-arrow"></i></span>
                  </div><!--/.foot-email-icon-->
                </div><!--/.hm-foot-email-->
              </div><!--/.hm-footer-widget-->
            </div><!--/.col-->
          </div><!--/.row-->
        </div><!--/.hm-footer-details-->
      </div><!--/.container-->
    </section>
  </main>
  <!-- End Content -->
  <!-- Begin Footer -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="hm-footer-copyright text-center">
        <div class="footer-social">
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin"></i></a>
          <a href="#"><i class="fab fa-pinterest"></i></a>
          <a href="#"><i class="fab fa-google"></i></a>
        </div>
        <p> &copy;copyright 2024 </p><!--/p-->
      </div><!--/.text-center-->
    </div><!--/.container-->
    <div id="scroll-Top">
      <div class="return-to-top">
        <i class="fas fa-angle-up" id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
      </div>
    </div><!--/.scroll-Top-->
  </footer>
  <!-- End Footer -->
  <!-- Begin Offcanvas -->
  <div class="offcanvas-top__container">
    <div class="offcanvas offcanvas-top header-offcanvas__top" data-bs-scroll="true" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
      <div class="offcanvas-body">
        <div class="header-search">
          <div class="container">
            <div class="header-search__wrapper">
              <div class="header-search__input">
                <div class="input-group">
                  <input type="text" id="header-input" class="form-control" placeholder="Tìm Kiếm sản phẩm, Danh mục mong muốn...." aria-label="Recipient's username"
                    aria-describedby="button-addon2" />
                  <button class="btnSearchTop" type="button" id="button-addon2">
                    <img src="assets/images/icons/search2.svg" alt="" />
                  </button>
                </div>
              </div>
              <button type="button" class="btnClose" data-bs-dismiss="offcanvas" aria-label="Close">
                <img src="assets/images/icons/close.svg" alt="" />
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- offcanvas-right -->
  <div class="offcanvas-right__container">
    <div class="offcanvas offcanvas-end header-offcanvas__right" data-bs-scroll="true" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <button type="button" class="btnClose2" data-bs-dismiss="offcanvas" aria-label="Close">
          <img src="assets/images/icons/close2.svg" alt="" />
        </button>
      </div>
      <div class="offcanvas-body">
        <div class="accordion accordionMain" id="accordionMenuMain">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <a href="#">Trang chủ</a>
            </h2>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Sản
                phẩm </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionMenuMain">
              <div class="accordion-body">
                <!-- Second Accordition -->
                <div class="accordion accordionSecond" id="accordionMenuSecond">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <a href="#" class="a-c1">Nước hoa nam</a>
                    </h2>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <a href="#" class="a-c1">Nước hoa nữ</a>
                    </h2>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <a href="#" class="a-c1">Nước hoa unisex</a>
                    </h2>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <a href="#" class="a-c1">Nước hoa chiết</a>
                    </h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <a href="?action=sale"> Khuyến mãi</a>
            </h2>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <a href="?action=news">Tin tức</a>
            </h2>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <a href="#">Liên hệ</a>
            </h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Offcanvas -->
  <!-- Jquery JS -->
  <script type="text/javascript" src="assets/js/Library/jquery.min.js"></script>
  <!-- Script Bootstrap -->
  <script type="text/javascript" src="assets/js/Library/bootstrap.bundle.min.js"></script>
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- Select2 JS -->
  <script type="text/javascript" src="assets/js/Library/select2.full.min.js"></script>
  <!-- General Script -->
  <script type="text/javascript" src="assets/js/general.js"></script>
  <script type="text/javascript" src="assets/js/header.js"></script>
</body>

</html>