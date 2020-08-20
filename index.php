<?php 

class Start{
	
	public $nama;
	public $kelas;
	public $jurusan;

	public function __construct($nama, $kelas, $jurusan)
	{
		$this->nama = $nama;
		$this->kelas = $kelas;
		$this->jurusan = $jurusan;
	}

	public function Getlabel()
	{
		return "$this->nama, $this->kelas, $this->jurusan";
	}
}

$coba1 = new Start("Azriel" , "XI", "RPL");
$coba2 = new Start("Alfi" ,"XI" , "RPL");
$coba3 = new Start("Lutfi" ,"XI" , "RPL");
$coba4 = new Start("Fadlan" ,"XI" , "RPL");
$coba5 = new Start("Icas" ,"XI" , "RPL");
$coba6 = new Start("Wildan" ,"XI" , "RPL");

echo "identitas 1 : " . $coba1->Getlabel();
echo "<br>";
echo "identitas 2 : " .$coba2->Getlabel();
echo "<br>";
echo "identitas 3 : " .$coba3->Getlabel();
echo "<br>";
echo "identitas 4 : " .$coba4->Getlabel();
echo "<br>";
echo "identitas 5 : " .$coba5->Getlabel();
echo "<br>";
echo "identitas 6 : " .$coba6->Getlabel();

?>