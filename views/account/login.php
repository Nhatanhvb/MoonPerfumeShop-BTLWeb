<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
  <div class="container">
    <div class="card login-card">
      <div class="row no-gutters">
        <div class="col-md-5 login-img">
          <img src="assets/images/backgrounds/banner1.jpg" alt="login" class="login-card-img">
        </div>
        <div class="col-md-7">
          <div class="card-body">
            <!-- Start Header Navigation -->
            <a href="#" class="header-logo signup-logo"> Moon<span>Perfume</span>. </a>
            <p class="login-card-description">Đăng nhập</p>
            <form action="?action=login" method="POST">
              <div class="mb-3">
                <input type="email" name="email" id="email" class="login-input form-control input-login-email" placeholder="Email address">
              </div>
              <div class="mb-4">
                <input type="password" name="password" id="password" class="login-input form-control input-login-password" placeholder="Password">
              </div>
              <div class="form-container">
                <div class="form-check form-check__custom">
                  <input type="checkbox" class="form-check-input" id="customCheck1">
                  <label class="form-check-label" for="customCheck1">Lưu mật khẩu</label>
                </div>
                <div><a href="#!" class="text-reset">Quên mật khẩu?</a></div>
              </div>
              <input name="login" id="login" class="btn btn-block login-btn mb-4 login__signInButton" type="submit" value="Đăng nhập">
            </form>
            <nav class="login-card-footer-nav">
              <p>Chưa có tài khoản? <a style="font-size: 16px; color: #95097e;" href="?action=signupForm" class="login__registerButton">Đăng ký</a></p>
              <a href="#!">Terms of use.</a>
              <a href="#!">Privacy policy</a>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<!-- Jquery JS -->
<script type="text/javascript" src="assets/js/Library/jquery.min.js"></script>
<!-- Script Bootstrap -->
<script type="text/javascript" src="assets/js/Library/bootstrap.bundle.min.js"></script>