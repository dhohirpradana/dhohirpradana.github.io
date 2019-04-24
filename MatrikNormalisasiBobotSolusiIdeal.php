<?php namespace App\Library\Topsis;

class MatrikNormalisasiBobotSolusiIdeal{

	public $solusiIdeal;

	public $matrikNormalisasiBobot;

	public $kriteria;

	public function __construct($kriteria, $matrikNormalisasiBobot, $solusiIdeal){

		$this->solusiIdeal = $solusiIdeal;
		$this->matrikNormalisasiBobot = $matrikNormalisasiBobot;
		$this->kriteria = $kriteria;
	
	}

	public function make(){

		foreach ($this->matrikNormalisasiBobot as $key => $value) {

			foreach ($this->kriteria as $i => $v) {
			
				$data[$key][$i] = $value[$i] - $this->solusiIdeal[$i]; 
			
			}
		}

		return $data;

	}

}