<!-- shop model -->
<?php
require_once APP_ROOT . '/models/base.php';

class ShopModel extends BaseModel
{
    public function getAllProduct()
    {
        $sql = "SELECT * FROM sanpham";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $products;
    }

    //sắp xếp các sản phẩm theo giá từ thấp đến cao
    public function sortProductByPriceASC()
    {
        $sql = "SELECT * FROM sanpham ORDER BY GiaTien ASC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $products;
    }

    //sắp xếp các sản phẩm theo giá từ cao đến thấp
    public function sortProductByPriceDESC()
    {
        $sql = "SELECT * FROM sanpham ORDER BY GiaTien DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $products;
    }

    // tìm kiếm sản phẩm theo tên sản phẩm
    public function searchProduct($name)
    {
        $sql = "SELECT * FROM sanpham WHERE TenSanPham LIKE '%$name%'";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $products;
    }

    // tìm kiếm theo danh mục nước hoa
    public function searchProductByCategory($cate)
    {
        $sql = "SELECT * FROM sanpham WHERE MaDanhMuc = $cate";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $products;
    }

    //tìm kiếm theo khoảng giá
    public function searchProductByPrice($min, $max)
    {
        $sql = "SELECT * FROM sanpham WHERE GiaTien >= $min AND GiaTien <= $max";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $products;
    }

}