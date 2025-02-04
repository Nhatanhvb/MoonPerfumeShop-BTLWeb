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
            <h1>Shop</h1>
            <div class="breadcrumb__links">
              <a href="./index.php">Home</a>
              <span>Shop</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="shop spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="shop__sidebar">
            <div class="shop__sidebar__search">
              <form action="?action=shopSearch" method="POST">
                <input type="text" placeholder="Nhập tên sản phẩm" name="search" />
                <button type="submit"><span class="fa fa-search"></span></button>
              </form>
            </div>
            <div class="shop__sidebar__accordion">
              <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-heading">
                    <a data-toggle="collapse" data-target="#collapseOne">Sản phẩm</a>
                  </div>
                  <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                    <div class="card-body">
                      <div class="shop__sidebar__categories">
                        <ul class="nice-scroll">
                          <li><a href="?action=shopSearchByCategory&cate=2">Nước hoa nam (20)</a></li>
                          <li><a href="?action=shopSearchByCategory&cate=1">Nước hoa nữ (20)</a></li>
                          <li><a href="#">Nước hoa unisex (20)</a></li>
                          <li><a href="#">Nước hoa chiết (20)</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-heading">
                    <a data-toggle="collapse" data-target="#collapseTwo">Branding</a>
                  </div>
                  <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
                    <div class="card-body">
                      <div class="shop__sidebar__brand">
                        <ul>
                          <li><a href="#">Louis Vuitton</a></li>
                          <li><a href="#">Chanel</a></li>
                          <li><a href="#">Hermes</a></li>
                          <li><a href="#">Gucci</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-heading">
                    <a data-toggle="collapse" data-target="#collapseThree">Filter Price</a>
                  </div>
                  <div id="collapseThree" class="collapse show" data-parent="#accordionExample">
                    <div class="card-body">
                      <div class="shop__sidebar__price">
                        <ul>
                          <li><a href="?action=shopSearchByPrice&min=0&max=500000">0.000 đ - 500.000 đ</a></li>
                          <li><a href="?action=shopSearchByPrice&min=500001&max=1000000">500.000 đ - 1.000.000 đ</a></li>
                          <li><a href="#">1.000.000 đ - 1.500.000 đ</a></li>
                          <li><a href="#">1.500.000 đ - 2.000.000 đ</a></li>
                          <li><a href="#">2.000.000 đ - 2.500.000 đ</a></li>
                          <li><a href="#">2.500.000 đ</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-heading">
                    <a data-toggle="collapse" data-target="#collapseSix">Tags</a>
                  </div>
                  <div id="collapseSix" class="collapse show" data-parent="#accordionExample">
                    <div class="card-body">
                      <div class="shop__sidebar__tags">
                        <a href="#">Nước hoa nam</a>
                        <a href="#">nước hoa nữ</a>
                        <a href="#">unisex</a>
                        <a href="#">nước hoa chiết nam</a>
                        <a href="#">nước hoa chiết nữ</a>
                        <a href="#">nước hoa chiết</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="shop__product__option">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6">
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="shop__product__option__right">
                  <p>Sắp xếp theo:</p>
                  <select id="sortSelect">
                    <option value="default" selected>Mặc định</option>
                    <option value="priceAsc">Thấp đến cao</option>
                    <option value="priceDesc">Cao đến thấp</option>
                  </select>
                </div>
                <script>
                  const urlParams = new URLSearchParams(window.location.search);
                  const action = urlParams.get('action');

                  const sortSelect = document.getElementById('sortSelect');
                  if (action === 'sortPriceAsc') {
                    sortSelect.value = 'priceAsc';
                  } else if (action === 'sortPriceDesc') {
                    sortSelect.value = 'priceDesc';
                  } else {
                    sortSelect.value = 'default';
                  }

                  sortSelect.addEventListener('change', function () {
                    const value = this.value;
                    if (value === 'priceAsc') {
                      window.location.href = '?action=sortPriceAsc';
                    } else if (value === 'priceDesc') {
                      window.location.href = '?action=sortPriceDesc';
                    } else {
                      window.location.href = '?action=shop';
                    }
                  });
                </script>
              </div>
            </div>
          </div>
          <div id="dsSP">
            <div class="row">
              <?php foreach ($products as $product): ?>
                <div class="col-md-3 col-sm-4">
                  <div class="single-new-arrival">
                    <div class="single-new-arrival-bg">
                      <img src="<?php echo $product['HinhAnh'] ?>" alt="new-arrivals images">
                      <div class="single-new-arrival-bg-overlay"></div>
                      <div class="new-arrival-cart">
                        <p>
                          <span class="lnr lnr-cart"></span>
                          <a href="?action=cart&id=<?php echo $product['MaSanPham'] ?>">Thêm vào giỏ hàng</a>
                        </p>
                      </div>
                    </div>
                    <h4><a href="?action=detail&id=<?php echo $product['MaSanPham']; ?>">
                        <?php echo $product['TenSanPham'] ?> </a></h4>
                    <p class="arrival-product-price"><?php echo number_format($product['GiaTien'], 0, ',', '.') ?> ₫</p>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
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