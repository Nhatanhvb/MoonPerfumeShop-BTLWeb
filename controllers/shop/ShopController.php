<?php
require_once APP_ROOT . '\models\shop\Shop.php';


class ShopController
{
    private $shopModel;

    public function __construct()
    {
        $this->shopModel = new ShopModel();
    }

    public function getAllProduct()
    {
        $products = $this->shopModel->getAllProduct();
        include APP_ROOT . '/views/shop/shop.php';
    }

    //sắp xếp các sản phẩm theo giá từ thấp đến cao
    public function sortProductByPriceASC()
    {
        $products = $this->shopModel->sortProductByPriceASC();
        include APP_ROOT . '/views/shop/shop.php';
    }

    //sắp xếp các sản phẩm theo giá từ cao đến thấp
    public function sortProductByPriceDESC()
    {
        $products = $this->shopModel->sortProductByPriceDESC();
        include APP_ROOT . '/views/shop/shop.php';
    }

    // tìm kiếm sản phẩm theo tên sản phẩm
    public function searchProduct()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = $_POST['search'];
            $products = $this->shopModel->searchProduct($name);
            include APP_ROOT . '/views/shop/shop.php';
        }
    }

    // tìm kiếm theo danh mục nước hoa nam
    public function searchProductByCategory($cate)
    {
        $products = $this->shopModel->searchProductByCategory($cate);
        include APP_ROOT . '/views/shop/shop.php';
    }

    //tìm kiếm theo khoảng giá
    public function searchProductByPrice($min, $max)
    {
        $products = $this->shopModel->searchProductByPrice($min, $max);
        include APP_ROOT . '/views/shop/shop.php';
    }
}


