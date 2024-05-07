<?php
/**
* Task 4 - Function
* function kelulusan
* function grade
*/
	function kelulusan($nilai){
		/**
		* Function kelulusan, jika:
		* total nilai lebih dari 55 maka lulus
		* total nilai kurang dari 55 maka tidak lulus
		*/
		if($nilai > 55){
			$hasil ='Lulus';
		}else{
				$hasil ='Tidak lulus';
			}
			return $hasil;
		}
	
	
	function grade($Total) {
	  /**
		* Function grade, jika:
		* total nilai <= 100 maka A
		* total nilai <= 84 maka B
		* total nilai <= 69 maka C
		* total nilai <= 55 maka D
		* total nilai <= 35 maka E
		* selain itu maka I
		*/ 
		if($Total <= 100 && $Total >= 85){
			$grade = "A";
			$predikat = "Sangat memuaskan";
		} elseif($Total <= 84 && $Total >= 70){
			$grade = "B";
			$predikat = "Memuaskan";
		} elseif($Total <= 69 && $Total >= 56){
			$grade = "C";
			$predikat = "Cukup";
		} elseif($Total <= 55 && $Total >= 36){
			$grade = "D";
			$predikat = "Ngulang";
		} elseif($Total <= 35 && $Total >= 0){
			$grade = "E";
			$predikat = "Tidak Lulus";
		} else{
			$grade = "I";

		}
		return [$grade, $predikat];
	}

	function rata_rata($uts, $uas, $praktik) {
		$rata2 = ($uts + $uas + $praktik) / 3;
		return $rata2;
	}
?>