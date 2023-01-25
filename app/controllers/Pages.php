<?php
    class Pages extends Controller{
        
        public function __construct(){
            $this->productModel = $this->model('Product');
        }

        public function index(){


            $data = [
                
            ];

            $this->view('pages/index', $data);
        }

        public function about(){
            $data = [
                
            ];
            $this->view('pages/about', $data);
        }

        public function contact(){
            $data = [
                
            ];
            $this->view('pages/contact', $data);
        }


        public function info(){
           
            $products = $this->productModel->getProduct();

            $data = [
                'product' => $products
            ];
            
            
            $this->view('pages/info', $data);
        }


        public function products(){

            $products = $this->productModel->getProduct();

            $data = [
                'product' => $products
            ];
            
            $this->view('pages/products', $data);
        }
    }