<?php
		/**
		 * Task 1
		 * Buatlah class balok yang memiliki:
		 * 1. Private property panjang, lebar dan tinggi
		 * 2. Method __construct, getLuas, getKeliling dan getVolume
		 */ 

    class Balok {
        private $panjang;
        private $lebar;
        private $tinggi;
    
        public function __construct($p, $l, $t) {
		        // code..
                $this->panjang = $p;
                $this->lebar = $l;
                $this->tinggi = $t;
        }
    
        public function getLuas() {
            return 2 * (($this->panjang * $this->lebar) + 2* ($this->panjang * $this->tinggi) + 2 * ($this->lebar * $this->tinggi));
				}
    
        public function getKeliling() {
            return 4 * ($this->panjang + $this->lebar + $this->tinggi);
            
        }
    
        public function getVolume() {
            return $this->panjang * $this->lebar * $this->tinggi;
        
        }
    }
?>