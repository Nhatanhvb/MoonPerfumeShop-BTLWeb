<?php
	require_once APP_ROOT . '/models/product/modelProduct.php';
	class ProductController {
		private $productModel;
		public function __construct() {
			$this->productModel = new Product();
		}
		public function listProducts() {
			$products = $this->productModel->getAllProduct();
			include APP_ROOT . '/views/product/Product.php';
		}
        public function deleteProduct($MaSanPham) {
            $this->productModel->deleteProduct($MaSanPham);
            header('Location: index.php?action=product');
        }
		public function detailProduct($MaSanPham) {
			$product = $this->productModel->getProductByMaSanPham($MaSanPham);
			include APP_ROOT . '/views/product/DetailProduct.php';
   		}
        public function editProductForm($MaSanPham) {
            $product = $this->productModel->getProductByMaSanPham($MaSanPham);
            include APP_ROOT . '/views/product/EditProduct.php';
        }
        public function editProduct($MaSanPham) {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $TenSanPham = $_POST['TenSanPham'];
                $GiaTien = $_POST['GiaTien'];
                $SoLuong = $_POST['SoLuong'];
                $Mota = $_POST['Mota'];
                $MaDanhMuc = $_POST['MaDanhMuc'];
                $MaThuongHieu = $_POST['MaThuongHieu'];
                $MaKhuyenMai = $_POST['MaKhuyenMai'];
                $this->productModel->editProduct($MaSanPham, $TenSanPham, $GiaTien, $SoLuong, $Mota, $MaDanhMuc, $MaThuongHieu, $MaKhuyenMai);
                header('Location: index.php?action=product');
            }
        }
        public function addProductForm() {
            include APP_ROOT . '/views/product/AddProduct.php';
        }
        public function addProduct() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $TenSanPham = $_POST['TenSanPham'];
                $GiaTien = $_POST['GiaTien'];
                $Mota = $_POST['Mota'];
                $Status = $_POST['Status'];
                $SoLuong = $_POST['SoLuong'];
                $HinhAnh = $_POST['HinhAnh'];
                $MaDanhMuc = $_POST['MaDanhMuc'];
                $MaThuongHieu = $_POST['MaThuongHieu'];
                $MaGiamGia = $_POST['MaGiamGia'];
                $MaKhuyenMai = $_POST['MaKhuyenMai'];
                $this->productModel->addProduct($TenSanPham, $GiaTien, $Mota, $Status, $SoLuong, $HinhAnh, $MaDanhMuc, $MaThuongHieu, $MaGiamGia, $MaKhuyenMai);
                header('Location: index.php?action=product');
            }
        }
    }
?>