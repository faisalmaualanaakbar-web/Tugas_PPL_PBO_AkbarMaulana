<?php
class Siswa {
    private $nama;
    private $nilaiPBO;

    public function setData($namaBaru, $nilaiBaru) {
        $this->nama = $namaBaru;

        if($nilaiBaru <= 100) {
        $this->nilaiPBO = $nilaiBaru;
        } else {
        $this->nilaiPBO = 100;
        }
    }

    public function getInfo() {
        return "siswa: " . $this->nama . ", Nilai PBO: " . $this->nilaiPBO;
    }
}


$siswa1 = new Siswa();
$siswa1->setData("Abuy", 50);

echo $siswa1->getInfo();
?>