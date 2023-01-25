<?php
    class Admins extends Controller{
        public function __construct(){

            $this->adminModel = $this->model('Admin');
        }

        public function login(){
            //check for logings
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //process the login form


                //initialize data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);    


                $data = [
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'email_err' => '',
                    'password_err' => '',
                ];

                //validate Email
                if(empty($data['email'])){
                    $data['email_err'] = 'Please Enter Email';
                } 

                //validate Email
                if(empty($data['password'])){
                    $data['password_err'] = 'Please Enter Password';
                }

                //check for data in DB

                if($this->adminModel->FUBE($data['email'])){
                    //data found

                }else{
                    //data not found
                    $data['email_err'] = 'No Admin Found';
                }

                //when errors are empty
                if(empty($data['email_err']) && empty($data['password_err'])){
                    //validated
                    //set logged admin
                    $loggedInAdmin = $this->adminModel->login($data['email'], $data['password']);

                    if($loggedInAdmin){
                        //create session
                        $this->CAS($loggedInAdmin);
                    }else{
                        $data['password_err'] = 'Password Incorrect';

                        $this->view('admins/login', $data);
                    }
                } else {

                    //load the view with the errors
                    $this->view('admins/login', $data);
                }

            } else{
                //initialize data
                $data = [
                    'email' => '',
                    'password' => '',
                    'email_err' => '',
                    'password_err' => ''
                ];

                //load login view
                $this->view('admins/login', $data);
            }
        }

        public function CAS($admin){
            $_SESSION['admin_id'] = $admin->id;
            $_SESSION['admin_email'] = $admin->email;
            redirect('products/dashboard');
            
        }

        public function logout(){
            unset($_SESSION['admin_id']);
            unset($_SESSION['admin_email']);
            session_destroy();
            redirect('pages/index');
        }
    }