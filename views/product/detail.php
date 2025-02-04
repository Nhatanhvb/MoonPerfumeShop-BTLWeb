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
            <a href="?action=shop" class="header-link active">Sản phẩm </a>
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
          <a href="#" class="header-cart">
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
            <h1>Shop</h1>
            <div class="breadcrumb__links">
              <a href="views/shop/index.php">Home</a>
              <a href="views/shop/shop.php">Sản phẩm</a>
              <a href="?action=shop">Nước hoa nam</a>
              <span>Bleu De Chanel</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="product-detail">
    <div class="container">
      <div class="flex-product-details">
        <div class="left product-content-left-container flex-reverse">
          <div class="product-content-left-big-img">
            <img class="mainImg" src="assets/images/products/Nước hoa nam Bleu De Chanel EDP _ Parfumerie/bleu-de-chanel-edp.jpg" alt="">
          </div>
        </div>
        <div class="right">
          <div class="product-content-right-product-name">
            <h1 style="color: #95097e; font-size: 24px;" class="product-name proName">
              <?php echo $product['TenSanPham']; ?>
            </h1>
          </div>
          <div class="product-content-right-product-price">
            <p class="product-price proPrice">
              <?php echo number_format($product['GiaTien'], 0, ',', '.'); ?> ₫ </p>
              </div>
              <div class="product-content-right-product-shipping mb-2">
                <p style="font-weight: bold">Vận Chuyển</p>
              </div>
              <div class="product-content-right-product-quantity">
                <p style="font-weight: bold">Số lượng</p>
                <div class="input-group input-group-margin">
                  <span class="input-group-btn">
                    <button style="background-color:#95097e; color: white;" type="button" class="btn btn-number minusBtn" data-type="minus">-</button>
                  </span>
                  <input type="text" class="form-control input-number" value="1" min="1">
                  <span class="input-group-btn">
                    <button style="background-color:#95097e; color: white;" type="button" class="btn btn-number plusBtn" data-type="plus">+</button>
                  </span>
                </div>
              </div>
              <button style="background-color:#95097e; color: white; margin-top: 24px; margin-bottom: 24px;" id="add-to-cart" class="btn btn-lg">Add to Cart</button>
              <div class="product-content-right-product-icon">
                <div class="product-content-right-product-icon-item">
                  <i class="fa fa-retweet" aria-hidden="true"></i>
                  <p>7 ngày miễn phí trả hàng*</p>
                </div>
                <div class="product-content-right-product-icon-item">
                  <i class="fa fa-shield" aria-hidden="true"></i>
                  <p>100% Chính hãng</p>
                </div>
                <div class="product-content-right-product-icon-item">
                  <i class="fa fa-truck" aria-hidden="true"></i>
                  <p>Miễn phí vận chuyển</p>
                </div>
              </div>
              </div>
              </div>
              <div class="product__details__content">
                <div class="product__details__tab">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tabs-5" type="button" role="tab" aria-controls="tabs-5" aria-selected="true"> Mô tả </button>
                    </li>
                    <li class="nav-item">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tabs-6" type="button" role="tab" aria-controls="tabs-6" aria-selected="false"> Đánh giá </button>
                    </li>
                    <li class="nav-item">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tabs-7" type="button" role="tab" aria-controls="tabs-7" aria-selected="false"> Ghi chú </button>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane fade show active" id="tabs-5" role="tabpanel" aria-labelledby="tabs-5">
                      <div class="product__details__tab__content">
                        <div class="product__details__tab__content__item">
                  <p><?php echo $product['Mota']; ?></p>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tabs-6" role="tabpanel" aria-labelledby="tabs-6">
              <div class="product__details__tab__content">
                <div class="product__details__tab__content__item">
                  <h5>Smell</h5>
                  <p>Absolutely love this fragrance, very mature...</p>
                </div>
                <div class="product__details__tab__content__item">
                  <h5>Satisfaction</h5>
                  <p>Love the scent and long lasting I get many compliments...</p>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tabs-7" role="tabpanel" aria-labelledby="tabs-7">
              <div class="product__details__tab__content">
                <div class="product__details__tab__content__item">
                  <h5>GHI CHÚ HƯƠNG THƠM</h5>
                  <p>Iris padilla quý giá, bơ iris padila...</p>
                  <p>Hoắc hương đất rực rỡ...</p>
                  <p>Vani ấm áp gợi cảm...</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="new-arrivals" class="new-arrivals">
    <div class="container">
      <div class="section-header">
        <h2>Có thể bạn sẽ thích</h2>
      </div><!--/.section-header-->
      <div class="new-arrivals-content">
        <div class="row">
          <?php foreach ($recommendProducts as $product): ?>
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
              <h4><a href="?action=detail&id=<?php echo $product['MaSanPham']; ?>"><?php echo $product['TenSanPham']; ?></a></h4>
              <p class="arrival-product-price"><?php echo number_format($product['GiaTien'], 0, ',', '.'); ?>&nbsp;₫</p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div><!--/.container-->
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
                  <li><a href="../.?action=contact">Liên hệ</a></li><!--/li-->
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