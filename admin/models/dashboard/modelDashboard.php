<?php
	require_once APP_ROOT . '/models/base.php';
	class Dashboard extends BaseModel
	{
		private $baseModel;

		public function __construct()
		{
			$this->baseModel = new BaseModel();
		}
        public function countCustomer() {
            $pdo = $this->baseModel->connect();
            $sql = 'SELECT COUNT(*) FROM khachhang';
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $countCoustomer = $stmt->fetchColumn();
            return $countCoustomer;
        }
        public function countProduct() {
            $pdo = $this->baseModel->connect();
            $sql = 'SELECT COUNT(*) FROM sanpham';
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $countProduct = $stmt->fetchColumn();
            return $countProduct;
        }
        public function countOrder() {
            $pdo = $this->baseModel->connect();
            $sql = 'SELECT COUNT(*) FROM donhang';
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $countOrder = $stmt->fetchColumn();
            return $countOrder;
        }
        public function countCategory() {
            $pdo = $this->baseModel->connect();
            $sql = 'SELECT COUNT(*) FROM danhmuc';
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $countCategory = $stmt->fetchColumn();
            return $countCategory;
        }
    }
?>