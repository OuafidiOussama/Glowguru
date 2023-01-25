<?php
    class Product {
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function getProduct(){
            $this->db->query('SELECT * FROM `products`');

            $res = $this->db->resultSet();

            return $res;
        }

        public function addProduct($data){
            $this->db->query('INSERT INTO products (title, price, disc, picture) VALUES (:title, :price, :disc, :picture)');
            $this->db->bind(':title', $data['title']);
            $this->db->bind(':price', $data['price']);
            $this->db->bind(':disc', $data['disc']);
            $this->db->bind(':picture', $data['picture']);
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function edit($data) {
            $this->db->query("UPDATE `products` SET `title`= :title, `price`= :price ,`picture`= :picture,`disc`= :disc WHERE id = :id");
            $this->db->bind(':title', $data['title']);
            $this->db->bind(':price', $data['price']);
            $this->db->bind(':picture', $data['picture']);
            $this->db->bind(':disc', $data['disc']);
            $this->db->bind(':id', $data['id']);
            
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function delete($id) {
            $this->db->query("DELETE FROM products WHERE id = :id");
            $this->db->bind(':id', $id);
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function getProductById($id) {
            $this->db->query("SELECT * FROM products WHERE id = :id");
            $this->db->bind(':id', $id);
            $row = $this->db->single();
            if($row){
                return $row;
            }else {
                return false;
            }
        }
    }