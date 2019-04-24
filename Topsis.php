<?php namespace App\Library\Topsis;

use App\Library\Topsis\KuadratHasilAkar;
use App\Library\Topsis\MatrikNormalisasi;
use App\Library\Topsis\MatrikNormalisasiBobot;
use App\Library\Topsis\SolusiIdeal;
use App\Library\Topsis\MatrikNormalisasiBobotSolusiIdeal;
use App\Library\Topsis\JarakAlternatif;

/*
|	@created by : Angga Kesuma / lapro.id
|	Class untuk menghitung keputusan menggunkan metode TOPSIS
|	tidak  termasuk perangkingan, perangkingan dilakukan disisi basisdata
*/

class Topsis {
	
	public $kriteria;
	
	public $alternatif;
	
	public $bobot;

	public $solusiIdeal;

	public function __construct($kriteria, $alternatif, $bobot){
		$this->bobot 		= $bobot;
		$this->kriteria 	= $kriteria;
		$this->alternatif 	= $alternatif;
	}

	public function makeAlternatif(){

		return $this->alternatif;
	}


	public function make(){
		
		$positif = $this->setSolusiIdeal('positif')->jarakAlternatif()['akar'];

		$negatif =  $this->setSolusiIdeal('negatif')->jarakAlternatif()['akar'];

		foreach ($positif as $key => $value) {
			$data[$key] = $negatif[$key] / ($negatif[$key]+$positif[$key]);
		}
		
		return $data;

	}


	public function kuadratHasilAkar(){
		
		$kha = new KuadratHasilAkar($this->kriteria, $this->alternatif);

		return $kha->make();

	}

	public function matrikNormalisasi(){

		$akar = $this->kuadratHasilAkar()['akar'];

		$mn = new MatrikNormalisasi($this->kriteria,$this->alternatif,$akar);

		return $mn->make();

	}

	public function matrikNormalisasiBobot(){

		$matrikNormalisasi = $this->matrikNormalisasi();

		$mnb = new MatrikNormalisasiBobot($this->kriteria,$matrikNormalisasi,$this->bobot);

		return $mnb->make();
	}

	public function solusiIdeal(){

		$matrikNormalisasiBobot = $this->matrikNormalisasiBobot();

		$sol = new SolusiIdeal($this->kriteria, $matrikNormalisasiBobot);

		return $sol->make();
	}

	public function setSolusiIdeal($kondisi){

		$solusiIdeal = $this->solusiIdeal();

		if('positif' == $kondisi){

			$this->solusiIdeal = $solusiIdeal['positif'];
		
		}elseif('negatif' == $kondisi){

				$this->solusiIdeal = $solusiIdeal['negatif'];

		}

		return $this;

	}

	/* 
	|	untuk menggunakan fungsi di bawah ini harus mengaktifkan 
	|	fungsi selSolusiIdeal (positif/negatif)
	*/

	public function matrikNormalisasiBobotSolusiIdeal(){

		$matrikNormalisasiBobot = $this->matrikNormalisasiBobot();

		$solusiIdeal = $this->solusiIdeal;

		$mnbsol = new MatrikNormalisasiBobotSolusiIdeal($this->kriteria, $matrikNormalisasiBobot, $solusiIdeal);

		return $mnbsol->make();

	}

	public function jarakAlternatif(){
		
		$matrikNormalisasiBobotSolusiIdeal = $this->matrikNormalisasiBobotSolusiIdeal();

		$ja = new JarakAlternatif($this->kriteria,$matrikNormalisasiBobotSolusiIdeal);

		return $ja->make();
	}

	

}