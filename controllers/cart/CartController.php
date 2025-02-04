<?php
require_once APP_ROOT . '/models/cart/Cart.php';

class CartController
{
    private $cartModel;
    public function __construct()
    {
        $this->cartModel = new Cart();
    }

    public function addCart($id)
    {
        $this->cartModel->addCart($id);
        $baseURL = dirname($_SERVER['SCRIPT_NAME']);
        header('Location:' . $baseURL . '/?action=cart');
    }

    public function getCart()
    {
        $cart = $this->cartModel->getCart();
        $countCart = $this->cartModel->countCart();
        include APP_ROOT . '/views/cart/cart.php';
    }
    public function updateCart()
    {
        if (isset($_POST['soLuong']) && isset($_POST['maSanPham'])) {
            $soLuong = $_POST['soLuong'];
            $maSanPham = $_POST['maSanPham'];
            if ($soLuong == 0) {
                $soLuong = 1;
            }
            $this->cartModel->updateCart($maSanPham, $soLuong);
            $cart = $this->cartModel->getCart();
            $countCart = $this->cartModel->countCart();

            include APP_ROOT . '/views/cart/cart.php';
        }
    }

    public function deleteCart($id)
    {
        $this->cartModel->deleteCart($id);
        $baseURL = dirname($_SERVER['SCRIPT_NAME']);
        header('Location:' . $baseURL . '/?action=cart');
    }

    public function paymentSuccess()
    {
        // xoá giỏ hàng
        $this->cartModel->deleteAllCart();
        include APP_ROOT . '/views/payment/checkout.php';
    }

}
