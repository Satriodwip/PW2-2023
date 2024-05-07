<?php

    class Smartphone {
        protected $name;
        protected $type;

        protected function __construct($name, $type) {
            $this->name = $name;
            $this->type = $type;
        }

        protected function getInfoHp() {
            echo 'Nama Unit : ' . $this->name . '<br>';
            echo 'Variasi : ' . $this->type . '<br>';
        }
    }

    class PocoF5 extends Smartphone {
        public $price;

        public function __construct($name, $type, $price) {
            parent::__construct($name, $type, $price);
            $this->price = $price;
        }

        public function getInfoPocoF5() {
            parent::getInfoHp();
            echo 'Harga : ' . $this->price . '<br>';
        }
    }

    class RedmiNote13Pro extends Smartphone {
        public $price;

        public function __construct($name, $type, $price) {
            parent::__construct($name, $type, $price);
            $this->price = $price;
        }

        public function getInfoRedmiNote13Pro() {
            parent::getInfoHp();
            echo 'Harga : ' . $this->price . '<br>';
        }
    }

    class PocoX6Pro extends Smartphone {
        public $stat;

        public function __construct($name, $type, $stat) {
            parent::__construct($name, $type, $stat);
            $this->stat = $stat;
        }

        public function getInfoPocoX6Pro() {
            parent::getInfoHp();
            echo 'Status : ' . $this->stat . '<br>';
        }
    }

?>