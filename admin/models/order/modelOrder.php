<?php
	require_once APP_ROOT . '/models/base.php';
	class Order extends BaseModel
	{
		private $baseModel;

		public function __construct()
		{
			$this->baseModel = new BaseModel();
		}
        public function getAllOrder() {
            $pdo = $this->baseModel->connect();
            $sql = 'SELECT donhang.*, khachhang.TenKhachHang, khachhang.Email, hinhthucthanhtoan.TenHinhThuc 
                    FROM donhang
                    JOIN khachhang ON donhang.MaKhachHang = khachhang.MaKhachHang
                    JOIN hinhthucthanhtoan ON donhang.MaHTTT = hinhthucthanhtoan.MaHinhThucThanhToan';
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $orders;
        }
    }
?>