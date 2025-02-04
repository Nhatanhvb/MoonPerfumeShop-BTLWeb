<?php
require_once APP_ROOT . '\models\product\Product.php';
require_once APP_ROOT . '\models\news\News.php';

class ProductController
{
    private $productModel;
    private $news;
    private $cart;

    public function __construct()
    {
        $this->productModel = new Product();
        $this->news = new News();
        $this->cart = new Cart();
    }

    public function index()
    {
        // newest products
        $newestProducts = $this->productModel->getAllProduct();
        // best seller
        $bestSeller = $this->productModel->getBestSeller();
        $brands = $this->productModel->getBrand();
        $news = $this->news->getNewsLimit();
        $countCart = $this->cart->countCart();
        include APP_ROOT . '/views/shop/home.php';
    }

    public function detail($id)
    {
        $product = $this->productModel->getProductById($id);
        $recommendProducts = $this->productModel->getRecommendProduct($id);
        include APP_ROOT . '/views/product/detail.php';
    }

}

