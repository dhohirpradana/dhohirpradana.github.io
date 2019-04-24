<?php namespace App\Library\Topsis;

class JarakAlternatif{


	public $matrikNormalisasiBobotSolusiIdeal;

	public $kriteria;

	public function __construct($kriteria, $matrikNormalisasiBobotSolusiIdeal){
	
	$this->matrikNormalisasiBobotSolusiIdeal = $matrikNormalisasiBobotSolusiIdeal;
		
	$this->kriteria = $kriteria;
	
	}

	public function make(){
		$alt = $this->kuadrat();
		$total = $this->total($alt);
		$akar = $this->akar($total);

		$data['alternatif'] = $alt;
		$data['total'] = $total;
		$data['akar'] = $akar;

		return $data;
	}

	public function kuadrat(){

		foreach($this->matrikNormalisasiBobotSolusiIdeal as $i=>$alt){
			foreach ($this->kriteria as $idx=>$k) {
				$data[$i][$idx] = pow($alt[$idx],2);
			}
		}

		return $data;
	}
	public function total($alt){

		foreach ($alt as $key => $value) {
			$data[$key] = 0;
			foreach ($this->kriteria as $i => $v) {
				$data[$key]+=$value[$i];
			}
		}

		return $data;

	}

	public function akar($total){
		foreach ($total as $i => $v) {
			$data[$i] = sqrt($v);		
		}

		return $data;
	}

}