<?php
class Kendaraan
{
    public $merk;
    public function __construct($merk)
    {
        $this->merk = $merk;
    }
    public function berjalan()
    {
        return $this->merk . " sedang melaju...";

    }
}


class Mobil extends Kendaraan
{
    public $jumlahPintu = 4;
    public function bukaPintu()

    {
        return "Membuka " . $this->jumlahPintu . " pintu mobil " . $this->merk;
    }
}

$mobilRPL = new Mobil ("Honda");
echo $mobilRPL->berjalan();
echo "<br>";
echo $mobilRPL->bukaPintu();
?>