<?php
	require_once APP_ROOT . '/models/base.php';
	class Customer extends BaseModel
	{
		private $baseModel;

		public function __construct()
		{
			$this->baseModel = new BaseModel();
		}

		public function getAllCustomer()
		{
			$pdo = $this->baseModel->connect();
			$sql = 'SELECT * FROM khachhang';
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			$customers = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $customers;
		}
		public function getCustomerByMaKhachHang($MaKhachHang)
		{
			$pdo = $this->baseModel->connect();
			$sql = 'SELECT * FROM khachhang WHERE MaKhachHang = :MaKhachHang';
			$stmt = $pdo->prepare($sql);
			$stmt->bindParam(':MaKhachHang', $MaKhachHang);
			$stmt->execute();
			$customer = $stmt->fetch(PDO::FETCH_ASSOC);
			return $customer;
		}
		public function deleteCustomer($MaKhachHang)
		{
			$pdo = $this->baseModel->connect();
			$sql = 'DELETE FROM khachhang WHERE MaKhachHang = :MaKhachHang';
			$stmt = $pdo->prepare($sql);
			$stmt->bindParam(':MaKhachHang', $MaKhachHang);
			$stmt->execute();
		}
		public function editCustomer($MaKhachHang, $TenKhachHang, $Email, $SDT, $DiaChi)
		{
			$pdo = $this->baseModel->connect();
			$sql = 'UPDATE khachhang SET TenKhachHang = :TenKhachHang, Email = :Email, SDT = :SDT, DiaChi = :DiaChi WHERE MaKhachHang = :MaKhachHang';
			$stmt = $pdo->prepare($sql);
			$stmt->bindParam(':MaKhachHang', $MaKhachHang);
			$stmt->bindParam(':TenKhachHang', $TenKhachHang);
			$stmt->bindParam(':Email', $Email);
			$stmt->bindParam(':SDT', $SDT);
			$stmt->bindParam(':DiaChi', $DiaChi);
			$stmt->execute();
		}
	}
?>