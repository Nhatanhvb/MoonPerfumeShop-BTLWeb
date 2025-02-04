<?php
require_once APP_ROOT . '/controllers/account/AccountController.php';
require_once APP_ROOT . '/controllers/product/ProductController.php';
require_once APP_ROOT . '/controllers/news/NewsController.php';
require_once APP_ROOT . '/controllers/cart/CartController.php';
require_once APP_ROOT . '/controllers/shop/ShopController.php';
require_once APP_ROOT . '/controllers/sale/saleController.php';
$accountController = new AccountController();
$productController = new ProductController();
$newsController = new NewsController();
$cartController = new CartController();
$shopController = new ShopController();
$saleController = new SaleController();
if (isset($_GET['action'])) {
    if ($_GET['action'] === 'signupForm') {
        $accountController->signupForm();
    } else if ($_GET['action'] === 'loginForm') {
        $accountController->loginForm();
    } else if ($_GET['action'] === 'signup') {
        $accountController->addSignUpAccount();
    } else if ($_GET['action'] === 'login') {
        $accountController->LoginAccount();
    } else if ($_GET['action'] == 'detail' && isset($_GET['id'])) {
        $productController->detail($_GET['id']);
    } else if ($_GET['action'] == 'news') {
        $newsController->news();
    } else if ($_GET['action'] == 'cart') {
        if (isset($_GET['id'])) {
            $cartController->addCart($_GET['id']);

        } else {
            $cartController->getCart();
        }
    } else if ($_GET['action'] == 'deleteCart' && isset($_GET['id'])) {
        $cartController->deleteCart($_GET['id']);
    } else if ($_GET['action'] == 'updateCart' && isset($_POST['soLuong']) && isset($_POST['maSanPham'])) {
        $cartController->updateCart();
    } else if ($_GET['action'] == 'shop') {
        $shopController->getAllProduct();
    } else if ($_GET['action'] == 'sortPriceAsc') {
        $shopController->sortProductByPriceASC();
    } else if ($_GET['action'] == 'sortPriceDesc') {
        $shopController->sortProductByPriceDESC();
    } else if ($_GET['action'] == 'shopSearch') {
        $shopController->searchProduct();
    } else if ($_GET['action'] == 'shopSearchByCategory' && isset($_GET['cate'])) {
        $shopController->searchProductByCategory($_GET['cate']);
    } else if ($_GET['action'] == 'shopSearchByPrice' && isset($_GET['min']) && isset($_GET['max'])) {
        $shopController->searchProductByPrice($_GET['min'], $_GET['max']);
    } else if ($_GET['action'] == 'sale') {
        $saleController->getAllProductSale();
    } else if ($_GET['action'] == 'paymentSuccess') {
        $cartController->paymentSuccess();
    }
    // contactForm
    else if ($_GET['action'] == 'contact') {
        $accountController->contactForm();
    } else {
        $productController->index();
    }

} else {
    $productController->index();
}

