<!-- Begin Header -->
<header class="header" id="header">
  <div class="header-main">
    <div class="container">
      <div class="header-main__wrapper">
        <a href="./index.php" class="header-logo"> Moon<span>Perfume</span>. </a>
        <ul class="header-nav">
          <li class="header-nav__item">
            <a href="./index.php" class="header-link active">Trang chủ</a>
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
            <a href="?action=contact" class="header-link">liên hệ</a>
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
            <span class="header-cart__tag position-absolute top-0 start-100 translate-middle badge rounded-pill">
              <?php echo $countCart ?>
            </span>
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
  <!-- Begin Intro -->
  <section class="intro">
    <div class="intro-wrapper">
      <div class="swiper intro-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="intro-content">
              <img src="assets/images/backgrounds/banner1.jpg" alt="">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="intro-content">
              <img src="assets/images/backgrounds/banner2.jpg" alt="">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="intro-content">
              <img src="assets/images/backgrounds/banner3.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="intro-pagination swiper-pagination"></div>
      </div>
    </div>
  </section>
  <!-- End Intro -->
  <!-- Begin Popular -->
  <section class="popular-products">
    <div class="container">
      <div class="popular-products-content">
        <div class="row">
          <div class="col-md-3">
            <div class="single-popular-products">
              <div class="single-popular-product-img">
                <img src="assets/images/products/sp-1.png" alt="popular-products images">
              </div>
              <h2><a href="?action=shop">Nước hoa nữ</a></h2>
            </div>
          </div>
          <div class="col-md-3">
            <div class="single-popular-products">
              <div class="single-popular-products">
                <div class="single-popular-product-img">
                  <img src="assets/images/products/sp-2.png" alt="popular-products images">
                </div>
                <h2><a href="?action=shop">Nước hoa nam</a></h2>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="single-popular-products">
              <div class="single-popular-products">
                <div class="single-popular-product-img">
                  <img src="assets/images/products/sp-3.png" alt="popular-products images">
                </div>
                <h2><a href="?action=shop">Nước hoa unisex</a></h2>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="single-popular-products">
              <div class="single-popular-products">
                <div class="single-popular-product-img">
                  <img src="assets/images/products/sp-4.png" alt="popular-products images">
                </div>
                <h2><a href="?action=shop">Nước hoa chiết</a></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!--/.container-->
  </section>
  <!-- End Popular -->
  <section id="new-arrivals" class="new-arrivals">
    <div class="container">
      <div class="section-header">
        <h2>Sản phẩm mới</h2>
      </div>
      <div class="new-arrivals-content">
        <div class="row dsSPmoi">
          <?php foreach ($newestProducts as $product): ?>
            <div class="col-md-3 col-sm-4">
              <div class="single-new-arrival">
                <div class="single-new-arrival-bg">
                  <img src="<?php echo $product['HinhAnh'] ?>" alt="new-arrivals images">
                  <div class="single-new-arrival-bg-overlay"></div>
                  <div class="sale bg-1">
                    <p>new</p>
                  </div>
                  <div class="new-arrival-cart">
                    <p>
                      <span class="lnr lnr-cart"></span>
                      <a href="?action=cart&id=<?php echo $product['MaSanPham'] ?>">Thêm vào giỏ hàng</a>
                    </p>
                    <p class="arrival-review pull-right">
                      <span class="lnr lnr-heart"></span>
                      <span class="lnr lnr-frame-expand"></span>
                    </p>
                  </div>
                </div>
                <h4><a href="?action=detail&id=<?php echo $product['MaSanPham']; ?>">
                    <?php echo $product['TenSanPham']; ?>
                  </a></h4>
                <p class="arrival-product-price giaSP">
                  <?php echo number_format($product['GiaTien'], 0, ',', '.'); ?>&nbsp;₫
                </p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
  <section id="new-arrivals" class="new-arrivals">
    <div class="container">
      <div class="section-header">
        <h2>Sản phẩm bán chạy</h2>
      </div><!--/.section-header-->
      <div class="new-arrivals-content">
        <div class="row">
          <?php foreach ($bestSeller as $product): ?>
            <div class="col-md-3 col-sm-4">
              <div class="single-new-arrival">
                <div class="single-new-arrival-bg">
                  <img src="<?php echo $product['HinhAnh'] ?>" alt="new-arrivals images">
                  <div class="single-new-arrival-bg-overlay"></div>
                  <div class="sale bg-1">
                    <p>sale</p>
                  </div>
                  <div class="new-arrival-cart">
                    <p>
                      <span class="lnr lnr-cart"></span>
                      <a href="?action=cart&id=<?php echo $product['MaSanPham'] ?>">Thêm vào giỏ hàng</a>
                    </p>
                    <p class="arrival-review pull-right">
                      <span class="lnr lnr-heart"></span>
                      <span class="lnr lnr-frame-expand"></span>
                    </p>
                  </div>
                </div>
                <h4><a href="?action=detail&id=<?php echo $product['MaSanPham']; ?>">
                    <?php echo $product['TenSanPham']; ?>
                  </a></h4>
                <p class="arrival-product-price">
                  <?php echo number_format($product['GiaTien'], 0, ',', '.'); ?> ₫
                </p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div><!--/.container-->
  </section>
  <section id="sofa-collection">
    <div class="swiper sofaSwiper" id="collection-carousel">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="sofa-collection collectionbg1">
            <div class="container">
              <div class="sofa-collection-txt">
                <h2>Nước hoa nam phiên bản giới hạn</h2>
                <p>
                </p>
                <div class="sofa-collection-price">
                  <h4>CHỉ từ 5.900.000 ₫</span></h4>
                </div>
                <button class="btn-cart welcome-add-cart sofa-collection-btn" onclick="window.location.href='#'"> view more </button>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="sofa-collection collectionbg2">
            <div class="container">
              <div class="sofa-collection-txt">
                <h2>Nước hoa nữ phiên bản giới hạn</h2>
                <p>
                </p>
                <div class="sofa-collection-price">
                  <h4>chỉ từ 5.900.000 ₫</span></h4>
                </div>
                <button class="btn-cart welcome-add-cart sofa-collection-btn" onclick="window.location.href='#'"> view more </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="feature" class="feature">
    <div class="container">
      <div class="section-header">
        <h2>Sắp ra mắt</h2>
      </div><!--/.section-header-->
      <div class="feature-content">
        <div class="row">
          <div class="col-sm-3">
            <div class="single-feature">
              <img src="assets/images/products/future/Chloé Nomade EDP.jpg" alt="feature image">
              <div class="single-feature-txt text-center">
                <p>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
                  <span class="feature-review">(45 lượt xem)</span>
                </p>
                <h3><a href="#">Chloé Nomade EDP</a></h3>
                <h5>5.900.000 ₫</h5>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-feature">
              <img src="assets/images/products/future/Maison Margiela Music Festival.jpg" alt="feature image">
              <div class="single-feature-txt text-center">
                <p>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
                  <span class="feature-review">(45 lượt xem)</span>
                </p>
                <h3><a href="#">Maison Margiela Music Festival </a></h3>
                <h5>5.900.000 ₫</h5>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-feature">
              <img src="assets/images/products/future/Mancera Sicily EDP.jpg" alt="feature image">
              <div class="single-feature-txt text-center">
                <p>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
                  <span class="feature-review">(45 lượt xem)</span>
                </p>
                <h3><a href="#">Mancera Sicily</a></h3>
                <h5>5.900.000 ₫</h5>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-feature">
              <img src="assets/images/products/future/Viktor &amp; Rolf Spicebomb Extreme.jpg" alt="feature image">
              <div class="single-feature-txt text-center">
                <p>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
                  <span class="feature-review">(45 lượt xem)</span>
                </p>
                <h3><a href="#">Viktor &amp; Rolf Spicebomb Extreme</a></h3>
                <h5>5.900.000 ₫</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!--/.container-->
  </section>
  <section id="blog" class="blog">
    <div class="container">
      <div class="section-header">
        <h2>Tin tức mới nhất</h2>
      </div><!--/.section-header-->
      <div class="blog-content">
        <div class="row">
          <?php foreach ($news as $new): ?>
            <div class="col-sm-4">
              <div class="single-blog">
                <div class="single-blog-img">
                  <img src="<?php echo $new['image']; ?>" alt="blog image">
                  <div class="single-blog-img-overlay"></div>
                </div>
                <div class="single-blog-txt">
                  <h2><a href="?action=news"><?php echo $new['title']; ?></a></h2>
                  <h3><?php echo $new['created_at']; ?></h3>
                  <p><?php echo $new['content']; ?></p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div><!--/.container-->
  </section>
  <section id="clients" class="clients">
    <div class="container">
      <div class="swiper brandSwiper" id="client">
        <div class="swiper-wrapper">
          <?php foreach ($brands as $brand): ?>
            <div class="swiper-slide">
              <a class="item" href="#">
                <img src="<?php echo $brand['Logo']; ?>" alt="brand-image" />
              </a>
            </div>
          <?php endforeach; ?>
          <?php foreach ($brands as $brand): ?>
            <div class="swiper-slide">
              <a class="item" href="#">
                <img src="<?php echo $brand['Logo']; ?>" alt="brand-image" />
              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
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
                  <li><a href="?action=contact">Liên hệ</a></li><!--/li-->
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
            <a href="index.php">Trang chủ</a>
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
                    <a href="?action=shop" class="a-c1">Nước hoa nam</a>
                  </h2>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <a href="?action=shop" class="a-c1">Nước hoa nữ</a>
                  </h2>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <a href="?action=shop" class="a-c1">Nước hoa unisex</a>
                  </h2>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <a href="?action=shop" class="a-c1">Nước hoa chiết</a>
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
<!-- Intro Swiper -->
<script>
  var swiper = new Swiper(".intro-swiper", {
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: ".intro-pagination",
      clickable: true,
    },
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
  });
</script>
<!-- Sofa Swiper -->
<script>
  var swiper = new Swiper(".sofaSwiper", {
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    speed: 1000,
  });
</script>
<!-- Brand Swiper -->
<script>
  var swiper = new Swiper(".brandSwiper", {
    slidesPerView: 5,
    spaceBetween: 30,
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    breakpoints: {
      0: {
        slidesPerView: 2,
      },
      576: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      992: {
        slidesPerView: 5,
      },
    },
  });
</script>
<!-- General Script -->
<script type="text/javascript" src="assets/js/general.js"></script>
<script type="text/javascript" src="assets/js/header.js"></script>