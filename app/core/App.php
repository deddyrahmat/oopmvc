<?php

    class App{

        private $controller = 'Home';
        private $method = 'index';
        private $params = [];

        public function __construct()
        {
            $url = $this->parseURL();

            // cek file di controller apakah sesuai dengan url[0]
            if (file_exists("../app/controllers/$url[0].php")) {
                $this->controller = $url[0];
                unset($url[0]);
            }

            // panggil file controller dan instansiasi
            require_once "../app/controllers/$this->controller.php";
            $this->controller = new $this->controller;

            // cek method dari instansiasi diatas
            if (isset($url[1])) {
                if (method_exists($this->controller, $url[1])) {
                    $this->method = $url[1];
                    unset($url[1]);
                }
            }

            // cek url, apakah masih ada sisa. jika ada simpan url menjadi parameter
            if (isset($url)) {
                $this->params = array_values($url);
            }

            // panggil sesluruh data 
            call_user_func_array([$this->controller, $this->method], $this->params);



        }

        public function parseURL()
        {
            // cek apakah ada url yang dikirim
            if (isset($_GET['url'])) {
                // jika ada url, hapus tanda slash diakhir url
                $url = rtrim($_GET['url'], '/');
                // cegah karakter aneh yang dikirm di url
                $url = filter_var($url, FILTER_SANITIZE_URL);
                // pecah url dan simpan
                $url = explode('/',$url);
                
                return $url;
            }
        }
    }