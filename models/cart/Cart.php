<?php
require_once APP_ROOT . '/models/base.php';

class Cart extends BaseModel
{
    private $baseModel;
    public function __construct()
    {
        $this->baseModel = new BaseModel();
    }

    public function addCart($id)
    {
        $pdo = $this->baseModel->connect();

        $sqlProduct = "SELECT * FROM sanpham WHERE MaSanPham = :id";
        $stmtProduct = $pdo->prepare($sqlProduct);
        $stmtProduct->bindParam(':id', $id);
        $stmtProduct->execute();
        $product = $stmtProduct->fetch();
        $dongia = $product['GiaTien'];

        $sql = "SELECT * FROM chitietgiohang WHERE MaSanPham = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $product = $stmt->fetch();
        if ($product) {
            $soluong = $product['SoLuong'] + 1;
            $sql = "UPDATE chitietgiohang SET SoLuong = :soluong WHERE MaSanPham = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':soluong', $soluong);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        } else {
            $sql = "INSERT INTO chitietgiohang (SoLuong, DonGia, MaSanPham, MaGioHang) VALUES (1, :dongia, :id, 1)";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':dongia', $dongia);
            $stmt->execute();
        }

    }

    public function getCart()
    {
        $pdo = $this->baseModel->connect();
        $sql = "SELECT CT.*, SP.TenSanPham, SP.HinhAnh, SP.GiaTien
         FROM chitietgiohang CT JOIN sanpham SP ON CT.MaSanPham = SP.MaSanPham";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $cart = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $cart;
    }

    public function deleteCart($id)
    {
        $pdo = $this->baseModel->connect();
        $sql = "DELETE FROM chitietgiohang WHERE MaSanPham = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function updateCart($id, $soluong)
    {
        $pdo = $this->baseModel->connect();
        $sql = "SELECT * FROM chitietgiohang WHERE MaSanPham = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $product = $stmt->fetch();
        if ($product) {
            if ($soluong == 0) {
                $this->deleteCart($id);
            } else {
                $sql = "UPDATE chitietgiohang SET SoLuong = :soluong WHERE MaSanPham = :id";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':soluong', $soluong);
                $stmt->bindParam(':id', $id);
                $stmt->execute();
            }
        }
    }


    public function getCartById($id)
    {
        $pdo = $this->baseModel->connect();
        $sql = "SELECT * FROM chitietgiohang WHERE MaSanPham = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $product = $stmt->fetch();
        return $product;
    }

    public function deleteAllCart()
    {
        $pdo = $this->baseModel->connect();
        $sql = "DELETE FROM chitietgiohang";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    }

    public function countCart()
    {
        $pdo = $this->baseModel->connect();
        $sql = "SELECT COUNT(*) FROM chitietgiohang";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $count = $stmt->fetchColumn();
        return $count;
    }

}
