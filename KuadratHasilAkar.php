<?php namespace App\Library\Topsis;

class KuadratHasilAkar{

	public $kriteria;
	
	public $alternatif;

	public function __construct($kriteria, $alternatif){

		$this->kriteria = $kriteria;
		$this->alternatif = $alternatif;

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

		foreach($this->alternatif as $i=>$alt){
			foreach ($this->kriteria as $idx=>$k) {
				$data[$i][$idx] = pow($alt[$idx],2);
			}
		}

		return $data;
	}

	public function total($alt){
		foreach ($this->kriteria as $i => $v) {
			$data[$i] = 0;		
		}
		foreach ($alt as $key => $value) {
			foreach ($this->kriteria as $i => $v) {
				$data[$i]+=$value[$i];
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