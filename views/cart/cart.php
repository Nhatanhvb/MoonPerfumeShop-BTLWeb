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
  <section class="breadcrumb-option">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb__text">
            <h1>Giỏ hàng</h1>
            <div class="breadcrumb__links">
              <span>Giỏ hàng của bạn có: </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="cart">
    <div class="container">
      <div class="payment-top-wrap">
        <div class="payment-top">
          <div class="payment-top-payment payment-top-item">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
          </div>
          <div class="payment-top-adress payment-top-item">
            <i class="fa fa-map" aria-hidden="true"></i>
          </div>
          <div class="payment-top-item">
            <i class="fa fa-credit-card" aria-hidden="true"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="cart-content">
        <div class="row">
          <div class="col-xl-7">
            <table id="tblCart">
              <?php
              $total = 0;
              $totalQuantity = 0;
              if (empty($cart)) {
                echo "<h3>Giỏ hàng trống</h3>";
              } else {
                echo "<table class='table'>
            <thead>
              <tr>
                <th style='text-align: center; width: 100px;'>Sản Phẩm</th>
                <th style='text-align: center;'>Tên Sản Phẩm</th>
                <th style='text-align: center; width: 50px;'>Số lượng</th>
                <th style='text-align: center; width: 150px;'>Đơn giá</th>
                <th style='text-align: center;'>Hành động</th>
              </tr>
            </thead>
            <tbody>";

                // Lặp qua từng sản phẩm trong giỏ hàng
                foreach ($cart as $item) {
                  $total += $item['SoLuong'] * $item['DonGia'];
                  $totalQuantity += $item['SoLuong'];
                  echo '<tr>
                      <td class="d-flex justify-content-center align-items-center">
                          <img style="width: 50px;" src="' . $item['HinhAnh'] . '" alt="Hình ảnh sản phẩm">
                      </td>
                      <td class="text-center">' . $item['TenSanPham'] . '</td>
                      <td>
                          <form method="POST" action="?action=updateCart" class="updateCartForm">
                              <div class="input-group center">
                                  <span class="input-group-btn">
                                      <button type="button" style="background-color: #95097e; color: #fff;" 
                                          class="btn btn-warning btn-number minusBtn" onclick="updateQuantity(this, -1)">-</button>
                                  </span>
                                  <input type="text" name="soLuong" class="form-control input-number" value="' . $item['SoLuong'] . '" 
                                   onkeydown="if(event.key === \'Enter\') { this.form.submit(); }">
                                  <input type="hidden" name="maSanPham" value="' . $item['MaSanPham'] . '">
                                  <span class="input-group-btn">
                                      <button type="button" style="background-color: #95097e; color: #fff;" 
                                          class="btn btn-warning btn-number plusBtn" onclick="updateQuantity(this, 1)">+</button>
                                  </span>
                              </div>
                          </form>
                      </td>
                      <td class="text-center"
                      >' . number_format($item['DonGia'], 0, ',', '.') . ' đ</td>
                      <td class="text-center">
                          <button type="button" style="background-color: #95097e; color: #fff;" 
                              class="btn btn-warning btn-sm" onclick="deleteCart(' . $item['MaSanPham'] . ')">
                              <i class="fa fa-trash" aria-hidden="true" style="color: white;"></i>
                          </button>
                      </td>
                  </tr>';
                }

                echo "</tbody>";
              }
              ?>
              <script>
                function updateQuantity(button, increment) {
                  var input = button.closest('tr').querySelector('input[name="soLuong"]');
                  var currentQuantity = parseInt(input.value);

                  var newQuantity = currentQuantity + increment;
                  if (newQuantity < 1) newQuantity = 1;

                  input.value = newQuantity;

                  button.closest('form').submit();
                }

                function deleteCart(id) {
                  if (confirm('Bạn có chắc chắn muốn xóa sản phẩm này khỏi giỏ hàng không?')) {
                    window.location.href = `?action=deleteCart&id=${id}`;
                  }
                }
              </script>
            </table>
          </div>
          <div class="col-xl-5 mt-4">
            <div class="cart-content-right">
              <table>
                <tbody>
                  <tr>
                    <th colspan="2">Thông tin đơn hàng</th>
                  </tr>
                  <tr>
                    <td>Tổng số sảm phẩm</td>
                    <td>
                      <span class="Quantity">
                        <?php echo $totalQuantity ?>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td>Tạm tính</td>
                    <td>
                      <p style="color: #95097e; font-weight: bold;" id="TongTien">
                        <?php echo number_format($total, 0, ',', '.') ?> đ
                      </p>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="cart-content-right-text">
                <p style="color: #95097e; font-weight: bold;"><span style="font-size: 18px;">Miễn phí ship</span></p>
              </div>
              <div class="cart-content-right-button">
                <a href="?action=shop"><button>TIẾP TỤC MUA SẮM</button></a>
                <a href="?action=paymentSuccess" onclick="confirmPayment()"><button>THANH TOÁN</button></a>
                <script>
                  // hỏi bạn có chắc muốn thanh toán không
                  function confirmPayment() {
                    if (confirm('Bạn có chắc chắn muốn thanh toán không?')) {
                      window.location.href = '?action=paymentSuccess';
                    }
                  }
                </script>
              </div>
              <div class="cart-content-right-login">
                <p>TÀI KHOẢN </p><br>
                <p>Vui lòng <a href="?action=loginForm" style="color: #95097e;">đăng nhập</a> tài khoản để tích điểm</p>
              </div>
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