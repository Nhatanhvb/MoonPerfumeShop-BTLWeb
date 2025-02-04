<?php
    require_once APP_ROOT . '/models/base.php';
	class Category extends BaseModel
	{
		private $baseModel;

		public function __construct()
		{
			$this->baseModel = new BaseModel();
		}

		public function getAllCategory()
		{
			$pdo = $this->baseModel->connect();
			$sql = 'SELECT * FROM danhmuc';
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			$categorys = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $categorys;
		}
		public function getCategoryByMaDanhMuc($MaDanhMuc) {
			$pdo = $this->baseModel->connect();
			$sql = 'SELECT * FROM danhmuc WHERE MaDanhMuc = :MaDanhMuc';
			$stmt = $pdo->prepare($sql);
			$stmt->bindParam(':MaDanhMuc', $MaDanhMuc);
			$stmt->execute();
			$category = $stmt->fetch(PDO::FETCH_ASSOC);
			return $category;
		}
		public function addCategory($TenDanhMuc) {
			$pdo = $this->baseModel->connect();
			$sql = 'INSERT INTO danhmuc (TenDanhMuc) VALUES (:TenDanhMuc)';
			$stmt = $pdo->prepare($sql);
			$stmt->bindParam(':TenDanhMuc', $TenDanhMuc);
			$stmt->execute();
		}
		public function editCategory($MaDanhMuc, $TenDanhMuc) {
			$pdo = $this->baseModel->connect();
			$sql = 'UPDATE danhmuc SET TenDanhMuc = :TenDanhMuc WHERE MaDanhMuc = :MaDanhMuc';
			$stmt = $pdo->prepare($sql);
			$stmt->bindParam(':MaDanhMuc', $MaDanhMuc);
			$stmt->bindParam(':TenDanhMuc', $TenDanhMuc);
			$stmt->execute();
		}
		public function deleteCategory($MaDanhMuc) {
			$pdo = $this->baseModel->connect();
			$sql = 'DELETE FROM danhmuc WHERE MaDanhMuc = :MaDanhMuc';
			$stmt = $pdo->prepare($sql);
			$stmt->bindParam(':MaDanhMuc', $MaDanhMuc);
			$stmt->execute();
		}
    }
?>