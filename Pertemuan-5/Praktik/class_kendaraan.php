<?php
    class Vehicle {
		// Property
        protected $type;
        protected $fuel;
        protected $wheels;

        protected function __construct($type, $fuel){
            $this->type = $type;
            $this->fuel = $fuel;
            
        }
        

        protected function getinfo(){
            echo 'Jenis kendaraan :' . $this->type . '<br>';
            echo 'Bahan Bakar :' . $this->fuel . '<br>';
            

        }
    }

    class Motor extends Vehicle {
        public $wheels;

        public function __construct($type, $fuel, $wheels) {
            parent:: __construct($type, $fuel);
            $this->wheels = $wheels;
        } 
        public function getinfoMotor(){
            parent::getinfo();
            echo 'Jumlah Roda :' . $this->wheels . '<br>';
        }
    }

    class Submarine extends Vehicle {
        public $max_depth;

        public function __construct($type, $fuel, $max_depth) {
            parent:: __construct($type, $fuel);
            $this->max_depth = $max_depth;
        } 
        public function getinfoSubmarine(){
            parent::getinfo();
            echo 'Kedalaman :' . $this->max_depth . '<br>';
        }
    }

    // $motor = new Motor("Motor", "Bensin", 2);
    // $motor->getinfoMotor();
    // $submarine = new Submarine("Kapal Selam", "Solar", 900);
    // $submarine->getinfoSubmarine();
    

?>