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
			$sql = 'SELECT sanpham.*, danhmuc.TenDanhMuc 
                    FROM sanpham 
                    JOIN danhmuc ON sanpham.MaDanhMuc = danhmuc.MaDanhMuc';
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $products;
		}
        public function getProductByMaSanPham($MaSanPham) {
            $pdo = $this->baseModel->connect();
            $sql = 'SELECT sanpham.*, danhmuc.TenDanhMuc, thuonghieu.TenThuongHieu, khuyenmai.TenKhuyenMai 
                    FROM sanpham 
                    JOIN danhmuc ON sanpham.MaDanhMuc = danhmuc.MaDanhMuc 
                    JOIN thuonghieu ON sanpham.MaThuongHieu = thuonghieu.MaThuongHieu 
                    JOIN khuyenmai ON sanpham.MaKhuyenMai = khuyenmai.MaKhuyenMai
                    WHERE sanpham.MaSanPham = :MaSanPham;';
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':MaSanPham', $MaSanPham);
            $stmt->execute();
            $product = $stmt->fetch(PDO::FETCH_ASSOC);
            return $product;
        }
        public function deleteProduct($MaSanPham){
            $pdo = $this->baseModel->connect();
            $sql = 'DELETE FROM sanpham WHERE MaSanPham = :MaSanPham';
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':MaSanPham', $MaSanPham);
            $stmt->execute();
        }
        public function editProduct($MaSanPham, $TenSanPham, $GiaTien, $SoLuong, $Mota, $MaDanhMuc, $MaThuongHieu, $MaKhuyenMai){
            $pdo = $this->baseModel->connect();
            $sql = 'UPDATE sanpham 
                    SET TenSanPham = :TenSanPham,
                        GiaTien = :GiaTien, 
                        SoLuong = :SoLuong, 
                        Mota = :Mota, 
                        MaDanhMuc = :MaDanhMuc, 
                        MaThuongHieu = :MaThuongHieu, 
                        MaKhuyenMai = :MaKhuyenMai 
                    WHERE MaSanPham = :MaSanPham';
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':MaSanPham', $MaSanPham);
            $stmt->bindParam(':TenSanPham', $TenSanPham);
            $stmt->bindParam(':GiaTien', $GiaTien);
            $stmt->bindParam(':SoLuong', $SoLuong);
            $stmt->bindParam(':Mota', $Mota);
            $stmt->bindParam(':MaDanhMuc', $MaDanhMuc);
            $stmt->bindParam(':MaThuongHieu', $MaThuongHieu);
            $stmt->bindParam(':MaKhuyenMai', $MaKhuyenMai);
            $stmt->execute();
        }
        public function addProduct($TenSanPham, $GiaTien, $Mota, $Status, $SoLuong, $HinhAnh, $MaDanhMuc, $MaThuongHieu, $MaGiamGia, $MaKhuyenMai){  
            $pdo = $this->baseModel->connect();
            $sql = 'INSERT INTO sanpham (TenSanPham, GiaTien, Mota, Status, SoLuong, HinhAnh, MaDanhMuc, MaThuongHieu, MaGiamGia, MaKhuyenMai) 
                    VALUES (:TenSanPham, :GiaTien, :Mota, :Status, :SoLuong, :HinhAnh, :MaDanhMuc, :MaThuongHieu, :MaGiamGia, :MaKhuyenMai)';
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':TenSanPham', $TenSanPham);
            $stmt->bindParam(':GiaTien', $GiaTien);
            $stmt->bindParam(':Mota', $Mota);
            $stmt->bindParam(':Status', $Status);
            $stmt->bindParam(':SoLuong', $SoLuong);
            $stmt->bindParam(':HinhAnh', $HinhAnh);
            $stmt->bindParam(':MaDanhMuc', $MaDanhMuc);
            $stmt->bindParam(':MaThuongHieu', $MaThuongHieu);
            $stmt->bindParam(':MaGiamGia', $MaGiamGia);
            $stmt->bindParam(':MaKhuyenMai', $MaKhuyenMai);
            $stmt->execute();
        }
	}
?>