<?php
    class Admin{
        private $db;

        public function __construct(){
            $this->db = new Database;
        }
        //find user by email
        public function FUBE($email){
            
            $this->db->query('SELECT * FROM admins WHERE email = :email');
            $this->db->bind(':email', $email);

            $row = $this->db->single();

            //check row
            if($this->db->rowCount() > 0){
                return true;
            } else{
                return false;
            }
        }

        //login user
        public function login($email,$password){
            $this->db->query('SELECT * FROM `admins` WHERE email = :email');
            $this->db->bind(':email', $email);

            $row = $this->db->single();

            $hashed = $row->password;

            if(password_verify($password ,$hashed)){
                return $row;
            }else{
                return false;
            }
        }
    }