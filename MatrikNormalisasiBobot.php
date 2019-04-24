<?php namespace App\Library\Topsis;

class MatrikNormalisasiBobot{

	public $bobot;

	public $matrikNormalisasi;

	public $kriteria;

	public function __construct($kriteria, $matrikNormalisasi, $bobot){

		$this->bobot = $bobot;
		$this->matrikNormalisasi = $matrikNormalisasi;
		$this->kriteria = $kriteria;
	
	}

	public function make(){
		
		foreach ($this->matrikNormalisasi as $key => $value) {
			foreach ($this->kriteria as $i => $v) {
				$data[$key][$i] = $value[$i]*$this->bobot[$i];
			}
		}

		return $data;
	}
}