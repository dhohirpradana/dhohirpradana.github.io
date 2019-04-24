<?php namespace App\Library\Topsis;

class SolusiIdeal{

	public $matrikNormalisasiBobot;

	public $kriteria;

	public function __construct($kriteria, $matrikNormalisasiBobot){

		$this->kriteria = $kriteria;
		$this->matrikNormalisasiBobot = $matrikNormalisasiBobot;
	
	}

	public function make(){

		$kel = $this->kelompokkan();
		$positif = $this->positif($kel);
		$negatif = $this->negatif($kel);

		$data['positif'] = $positif;
		$data['negatif'] = $negatif;
		return $data;
	
	}

	public function kelompokkan(){
	
		foreach ($this->kriteria as $key => $value) {
			foreach ($this->matrikNormalisasiBobot as $i => $v) {
				$data[$key][$i] = $v[$key];			
			}
		}

		return $data;
	
	}

	public function positif($kel){
		foreach ($this->kriteria as $key => $value) {
			$data[$key]=max($kel[$key]);
		}

		return $data;
	}

	public function negatif($kel){
		foreach ($this->kriteria as $key => $value) {
			$data[$key]=min($kel[$key]);
		}

		return $data;
	}

}