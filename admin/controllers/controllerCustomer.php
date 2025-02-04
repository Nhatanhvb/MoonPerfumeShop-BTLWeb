<?php
	require_once APP_ROOT . '/models/customer/modelCustomer.php';
	class CustomerController {
		private $customerModel;
		public function __construct() {
			$this->customerModel = new Customer();
		}
		public function listCustomers() {
			$customers = $this->customerModel->getAllCustomer();
			include APP_ROOT . '/views/customer/Customer.php';
		}
		public function detailCustomer($MaKhachHang) {
			$customer = $this->customerModel->getCustomerByMaKhachHang($MaKhachHang);
			include APP_ROOT . '/views/customer/DetailCustomer.php';
   		}
		public function deleteCustomer($MaKhachHang) {
			$this->customerModel->deleteCustomer($MaKhachHang);
			header('Location: index.php?action=customer');
		}
		public function editCustomerForm($MaKhachHang) {
			$customer = $this->customerModel->getCustomerByMaKhachHang($MaKhachHang);
			include APP_ROOT . '/views/customer/EditCustomer.php';
		}
		public function editCustomer($MaKhachHang) {
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				$TenKhachHang = $_POST['TenKhachHang'];
				$Email = $_POST['Email'];
				$SDT = $_POST['SDT'];
				$DiaChi = $_POST['DiaChi'];
				$this->customerModel->editCustomer($MaKhachHang, $TenKhachHang, $Email, $SDT, $DiaChi);
				header('Location: index.php?action=customer');
			}
		}
	}
?>