<?php

class Siswa{
    public $nrp, $nama, $daftarNilai = array();
    public function __construct($nrp, $nama, $daftarNilai){
        $this->nrp = $nrp;
        $this->nama = $nama;
        $this->daftarNilai = $daftarNilai;
    }
}

class Nilai{
    public $mapel, $nilai;
    public function __construct($mapel, $nilai)
    {
        $this->mapel = $mapel;
        $this->nilai = $nilai;
    }
}

function random_string(){
    $str = random_bytes(10);
    $str = base64_encode($str);
    $str = str_replace(["+", "/", "="], "", $str);
    $str = substr($str, 0, 10);
    return $str;
}

function random_nilai(){
    return rand(0,100);
}

function random_mapel(){
    $mapel = array('Bahasa Inggris', 'Bahasa Jepang', 'Bahasa Indonesia');
    $randomindex = rand(0,2);
    return $mapel[$randomindex];
}
// siswa baru
$daftarNilai[3] = new Nilai('Bahasa Inggris', 100);
$newSiswa = new Siswa('231191', 'Adam Albani', $daftarNilai);
// gemerate 10 siswa baru
$siswa = array($newSiswa);
for($i= 0; $i <= 10; $i++){
    $daftarNilai[3] = new Nilai(random_mapel(), random_nilai());
    $generatesiswa = new Siswa('231101'.$i, random_string(), $daftarNilai);
    array_push($siswa, $generatesiswa);
}
var_dump($siswa);
?>