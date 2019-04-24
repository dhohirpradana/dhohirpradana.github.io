<?php namespace App\Library\Topsis;

class MatrikNormalisasi{

	public $kriteria;
	
	public $alternatif;

	public $akar;

	public function __construct($kriteria, $alternatif, $akar){

		$this->kriteria = $kriteria;
		$this->alternatif = $alternatif;
		$this->akar = $akar;
	}

	public function make(){
		foreach ($this->alternatif as $key => $value) {
			foreach ($this->kriteria as $i => $v) {
				$data[$key][$i] = $value[$i]/$this->akar[$i];
			}
		}

		return $data;
	}


}