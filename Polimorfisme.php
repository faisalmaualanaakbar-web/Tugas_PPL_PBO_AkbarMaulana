<?php
class profesi {
    public function bekerja() {
        return "Melakukan pekerjaan umum...";

    }
}


class Guru extends profesi {
    public function bekerja() {
        return "Pergi ke kelas dan mengajar siswa SMK.";
    }
}


class programmer extends profesi {
    public function bekerja(){
        return "Membuka VS code, mengetik kode PHP, dan meminum kopi.";
    }
}

$pakGuru = new Guru();
$anakRPL = new programmer();
echo $pakGuru->bekerja();
echo "<br>";
echo $anakRPL->bekerja();
?>