<?php
    class Dashboard extends AdminController{
        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            $this->pageTitle = "Dashboard";
            $this->render('dashboard/index.php');
        }
    }
?>