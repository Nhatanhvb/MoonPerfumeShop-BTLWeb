<?php
	require_once APP_ROOT . '/models/category/modelCategory.php';
	class CategoryController {
		private $categoryModel;
		public function __construct() {
			$this->categoryModel = new Category();
		}
		public function listCategorys() {
			$categorys = $this->categoryModel->getAllCategory();
			include APP_ROOT . '/views/category/Category.php';
		}
		public function deleteCategory($MaDanhMuc) {
			$this->categoryModel->deleteCategory($MaDanhMuc);
			header('Location: index.php?action=category');
		}
		public function addCategoryForm() {
			include APP_ROOT . '/views/category/AddCategory.php';
		}
		public function addCategory() {
			$TenDanhMuc = $_POST['TenDanhMuc'];
			$this->categoryModel->addCategory($TenDanhMuc);
			header('Location: index.php?action=category');
		}
		public function editCategoryForm($MaDanhMuc) {
			$category = $this->categoryModel->getCategoryByMaDanhMuc($MaDanhMuc);
			include APP_ROOT . '/views/category/EditCategory.php';
		}
		public function editCategory($MaDanhMuc) {
			$TenDanhMuc = $_POST['TenDanhMuc'];
			$this->categoryModel->editCategory($MaDanhMuc, $TenDanhMuc);
			header('Location: index.php?action=category');
		}
	}
?>