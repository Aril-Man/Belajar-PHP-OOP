<?php 

class mahasiswa
{
	public $nama;
	public $NIK;
	public $jurusan;
	public $kelamin;


	public function __construct($nama, $NIK, $jurusan, $kelamin)
	{
		$this->nama = $nama;
		$this->NIK = $NIK;
		$this->jurusan = $jurusan;
		$this->kelamin = $kelamin;
	}

	public function Getlabel()
	{
		$str = "{$this->nama} | {$this->NIK} | {$this->jurusan} | {$this->kelamin}";
		return $str;
	}
}

$data1 = new mahasiswa("Azriel Fauzi Hermansyah", "1907832", "Teknik Informatika", "Laki laki" );
$data2 = new mahasiswa("Ahmad ikhsan Maulana", "1905732", "Teknik Informatika", "Laki laki");
$data3 = new mahasiswa("Puja maulida Herwanto", "1906832", "Teknik Informatika", "Perempuan");


// Cetak hasil
echo "Identitas 1 : " . $data1->Getlabel();
echo "<br><br>";
echo "Identitas 2 : " . $data2->Getlabel();
echo "<br><br>";
echo "Identitas 3 : " . $data3->Getlabel();

?>