<!-- shop model -->
<?php
require_once APP_ROOT . '/models/base.php';

class SaleModel extends BaseModel
{
  public function getAllProductSale()
  {
      $sql = "SELECT * FROM sanpham INNER JOIN khuyenmai ON sanpham.MaKhuyenMai = khuyenmai.MaKhuyenMai";
      $stmt = $this->db->prepare($sql);
      $stmt->execute();
      $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $products;
  }
}