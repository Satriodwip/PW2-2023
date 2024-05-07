<?php
    class Favcity {
		// Property
        protected $kota;
        protected $icon;
        protected $jmlpddk;

        protected function __construct($kota, $icon){
            $this->kota = $kota;
            $this->icon = $icon;
            
        }
        

        protected function getinfo(){
            echo 'Nama Kota : ' . $this->kota . '<br>';
            echo 'Icon Kota : ' . $this->icon . '<br>';
            

        }
    }

    class Yogyakarta extends Favcity {
        public $jmlpddk;

        public function __construct($kota, $icon, $jmlpddk) {
            parent:: __construct($kota, $icon);
            $this->jmlpddk = $jmlpddk;
        } 
        public function getinfoYogyakarta(){
            parent::getinfo();
            echo 'Jumlah Penduduk : ' . $this->jmlpddk . '<br>';
        }
    }

    class Bali extends Favcity {
        public $jmlpddk;

        public function __construct($kota, $icon, $jmlpddk) {
            parent:: __construct($kota, $icon);
            $this->jmlpddk = $jmlpddk;
        } 
        public function getinfoBali(){
            parent::getinfo();
            echo 'Jumlah Penduduk : ' . $this->jmlpddk . '<br>';
        }
    }
    class Lombok extends Favcity {
        public $jmlpddk;

        public function __construct($kota, $icon, $jmlpddk) {
            parent:: __construct($kota, $icon);
            $this->jmlpddk = $jmlpddk;
        } 
        public function getinfLombok(){
            parent::getinfo();
            echo 'Jumlah Penduduk : ' . $this->jmlpddk . '<br>';
        }
    }
    

?>