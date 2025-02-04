<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
  <div class="container">
    <div class="card login-card">
      <div class="row g-0">
        <div class="col-md-5 login-img">
          <img src="assets/images/backgrounds/banner2.jpg" alt="login" class="login-card-img">
        </div>
        <div class="col-md-7">
          <div class="card-body">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
              <a class="header-logo signup-logo" href="#">Moon<span>Perfume</span>.</a>
            </div><!--/.navbar-header-->
            <p class="login-card-description">Đăng ký</p>
            <form action="?action=signup" method="POST">
              <div class="mb-3">
                <input type="text" name="username" id="username" class="login-input form-control input-signup-username" placeholder="Username">
              </div>
              <div class="mb-3">
                <input type="email" name="email" id="email" class="login-input form-control input-signup-email" placeholder="Email address">
              </div>
              <div class="mb-3">
                <input type="tel" name="phone" id="phone" class="login-input form-control input-signup-phone" placeholder="Phone">
              </div>
              <div class="mb-3">
                <input type="password" name="password" id="password" class="login-input form-control input-signup-password" placeholder="Password">
              </div>
              <div class="mb-4">
                <input type="password" name="password1" id="password1" class="login-input form-control input-signup-password" placeholder="Re-enter password:">
              </div>
              <input name="login" id="login" class="btn btn-primary btn-block mb-4 signup__signInButton login-btn" type="submit" value="Đăng Ký">
            </form>
            <nav class="login-card-footer-nav">
              <p>Đã có tài khoản? <a style="font-size: 16px; color: #95097e;" href="?action=loginForm">Đăng nhập</a></p>
              <a href="#!">Terms of use.</a>
              <a href="#!">Privacy policy</a>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<!-- <script>
    // validation form register and register user local storage
    const inputEmailRegister = document.querySelector(".input-signup-email");
    const inputUserNameRegister = document.querySelector(".input-signup-username");
    const inputPhoneRegister = document.querySelector(".input-signup-phone");
    const inputPasswordRegister = document.querySelector(".input-signup-password");
    const btnRegister = document.querySelector(".signup__signInButton");


  </script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<!-- Jquery JS -->
<script type="text/javascript" src="assets/js/Library/jquery.min.js"></script>
<!-- Script Bootstrap -->
<script type="text/javascript" src="assets/js/Library/bootstrap.bundle.min.js"></script>