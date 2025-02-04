<html>

<head>
    <title>Admin</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/icon" href="images/icon.png" />
    <link rel="stylesheet" href="./css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- font roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

</head>

<body>
    <div>
        <div id="mySidenav" class="sidenav">
            <p class="logo"><span>Moon</span>Perfume</p>
            <div class="nav-links">
                <a href="?action=dashboard" class="icon-a"><i class="fa fa-dashboard icons"></i> Trang chủ</a>
                <a href="?action=customer" class="icon-a"><i class="fa fa-users icons"></i> Khách hàng</a>
                <a href="?action=category" class="icon-a"><i class="fa fa-tasks icons"></i> Danh mục</a>
                <a href="?action=product" class="icon-a"><i class="fa fa-list icons"></i> Sản phẩm</a>
                <a href="?action=order" class="icon-a"><i class="fa fa-shopping-bag icons"></i> Đơn hàng</a>
                <a href="../?action=loginForm" class="icon-a"><i class="fa fa-user icons"></i> Đăng xuất</a>
            </div>
        </div>
    </div>

    <?php
        require_once 'config/config.php';
        require_once APP_ROOT . '/routes/routes.php';
    ?>
</body >

</html >