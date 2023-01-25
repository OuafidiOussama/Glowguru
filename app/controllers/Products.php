<?php
    class Products extends Controller{

        private $productModel;

        public function __construct(){
            $this->productModel = $this->model('Product');

        }
        

        public function dashboard(){

            $products = $this->productModel->getProduct();

            $data = [
                'product' => $products
            ];
        

            $this->view('products/dashboard', $data);
        }

        public function productlist(){

            $products = $this->productModel->getProduct();

            // var_dump($products);
            // exit;

            $data = [
                'product' => $products
            ];

            $this->view('products/productlist', $data);
        }

        public function addForm(){
            $data = [

            ];

            $this->view('products/add');
        }

        public function add(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $count = count($_POST['title']);
                for ($i = 0; $i < $count; $i++) {

                    $img = $_FILES['picture']['tmp_name'][$i];
                    $img_name = $_FILES['picture']['name'][$i];
                    move_uploaded_file($img, 'prd_images/' . $img_name);

                    $data = [
                        'title' => trim($_POST['title'][$i]),
                        'price' => trim($_POST['price'][$i]),
                        'disc' => trim($_POST['disc'][$i]),
                        'picture' => trim($img_name)
                    ];

                    if($this->productModel->addProduct($data)){
                        redirect('products/productlist');
                    } else{
                        die('Something Went Wrong');

                    }
                }
                
            } else{

                $data = [
                    'title' => '',
                    'price' => '',
                    'disc' => '',
                    'picture' => ''
                ];
                $this->view('products/productlist', $data);

            }
        }

        public function edit($id){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){


                $productId = $this->productModel->getProductById($id);
                // print_r($_POST);
                // echo '<br>';
                // print_r($_FILES);
                // echo '<br>';
                // echo $_FILES['picture']['tmp_name'];
                // exit;
                $image_tmp = $_FILES['picture']['tmp_name'];
                $image_name = $_FILES['picture']['name'];
                move_uploaded_file($image_tmp ,'prd_images/' . $image_name);
                if (!empty($_FILES['picture']['name'])) {
                    // update data
                    $data = [
                        'id' => $productId->id,
                        'picture' => trim($image_name),
                        'title' => trim($_POST['title']),
                        'price' => trim($_POST['price']),
                        'disc' => trim($_POST['disc'])
                    ];
                } else {
                    // update data
                    $data = [
                        'id' => $productId->id,
                        'picture' => $productId->picture,
                        'title' => trim($_POST['title']),
                        'price' => trim($_POST['price']),
                        'disc' => trim($_POST['disc'])
                    ];
                }

                if ($this->productModel->edit($data)) {
                    redirect('Products/productlist');
                } else {
                    die('Something went wrong!!!!!');
                }

                
            }else {

                $productId = $this->productModel->getProductById($id);

                // init data
                $data = [
                    'id' => $productId->id,
                    'picture' => $productId->picture,
                    'title' => $productId->title,
                    'price' => $productId->price,
                    'disc' => $productId->disc
                    
                ];

                // load view
                $this->view('products/edit', $data);
            }
        }

        public function delete($id) {
            if ($this->productModel->delete($id)) {
                redirect('products/productlist');
            } else {
                die('ops something went wrong');
            }
        }
    }
    

