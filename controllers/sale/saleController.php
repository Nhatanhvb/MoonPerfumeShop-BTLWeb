<?php
require_once APP_ROOT . '/models/sale/saleModel.php';


class SaleController
{
    private $saleModel;

    public function __construct()
    {
        $this->saleModel = new saleModel();
    }

    public function getAllProductSale()
    {
        $products = $this->saleModel->getAllProductSale();
        include APP_ROOT . '/views/sale/sale.php';
    }
}


