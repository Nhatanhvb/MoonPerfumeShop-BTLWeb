<?php
require_once APP_ROOT . '/models/base.php';
class Product extends BaseModel
{
  private $baseModel;

  public function __construct()
  {
    $this->baseModel = new BaseModel();
  }

  public function getAllProduct()
  {
    $pdo = $this->baseModel->connect();
    // lấy 8 sản phẩm mới nhất
    $sql = "SELECT * FROM sanpham ORDER BY MaSanPham DESC LIMIT 8";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $products;
  }

  public function getBestSeller()
  {
    $pdo = $this->baseModel->connect();
    $sql = "SELECT sp.*, SUM(ctdh.SoLuong) AS SoLuongBan 
    FROM chitietdonhang ctdh 
    JOIN sanpham sp ON ctdh.MaSanPham = sp.MaSanPham 
    GROUP BY sp.MaSanPham 
    ORDER BY SoLuongBan DESC 
    LIMIT 8";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $products;
  }


  public function getProductById($id)
  {
    $pdo = $this->baseModel->connect();
    $sql = "SELECT * FROM sanpham WHERE MaSanPham = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $product = $stmt->fetch();
    return $product;
  }

  public function getBrand()
  {
    $pdo = $this->baseModel->connect();
    $sql = "SELECT * FROM thuonghieu";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $brands = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $brands;
  }

  public function getRecommendProduct($id)
  {
    $pdo = $this->baseModel->connect();
    // lấy 8 sản phẩm mới nhất trừ sản phẩm đang xem
    $sql = "SELECT * FROM sanpham WHERE MaSanPham != :id ORDER BY MaSanPham DESC LIMIT 8";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $products;
  }
}

