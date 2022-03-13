<?php
    include '../models/Products.php';

    Class AddProductsContr extends Products {
        private $userid;
        private $image;
        private $name;
        private $dec;
        private $price;
        private $size1;
        private $size2;
        private $ring;
        private $qty;

        public function __construct($userid, $image, $name, $dec, $price, $size1,$size2, $ring, $qty) {
            $this->userid = $userid;
            $this->image = $image;
            $this->name = $name;
            $this->dec = $dec;
            $this->price = $price;
            $this->size1 = $size1;
            $this->size2 = $size2;
            $this->ring = $ring;
            $this->qty = $qty;
        }

        public function addProduct() {
            if ($this->emptyInput() == false) {
                // echo "Empty input!";
                header("Location: ../add_product.php?error=emptyinput");
                exit();
            }

            $this->setProduct($this->userid, $this->image, $this->name, $this->dec, $this->price, $this->size1, $this->size2, $this->ring, $this->qty);
        }

        
        // Signup error handlers
        // inputs handler

        private function emptyInput() {
            $result;
            if (empty($this->userid) || empty($this->image) || empty($this->name) || empty($this->dec) 
            || empty($this->price) || empty($this->size1) || empty($this->size2) || empty($this->ring) || empty($this->qty)) {
                $result = false;
            } else {
                $result = true;
            }
            return $result;
        }
    }
?>