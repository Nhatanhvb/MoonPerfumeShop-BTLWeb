<?php
    require_once APP_ROOT . '/models/dashboard/modelDashboard.php';
    class DashboardController {
        private $dashboardModel;
        public function __construct() {
            $this->dashboardModel = new Dashboard();
        }
        public function loadDashboard() {
            $countCustomer = $this->dashboardModel->countCustomer();
            $countProduct = $this->dashboardModel->countProduct();
            $countOrder = $this->dashboardModel->countOrder();
            $countCategory = $this->dashboardModel->countCategory();
            include APP_ROOT . '/views/dashboard/Dashboard.php';
        }
    }
?>