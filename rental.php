
<?php

class Rental {
    private $hargaSewaPerHari;

    public function setHargaSewaPerHari($harga) {
        $this->hargaSewaPerHari = $harga;
    }

    public function getHargaSewaPerHari() {
        return $this->hargaSewaPerHari;
    }

    public function hitungDiskon($lamaSewa) {
        return 0;
    }
}

class RentalMobil extends Rental {
    public function hitungDiskon($lamaSewa) {
        if ($lamaSewa > 3) {
            return $this->getHargaSewaPerHari()
                * $lamaSewa * 0.10;
        }

        return 0;
    }
}

class RentalMotor extends Rental {
    public function hitungDiskon($lamaSewa) {
        if ($lamaSewa > 3) {
            return $this->getHargaSewaPerHari()
                * $lamaSewa * 0.05;
        }

        return 0;
    }
}

$mobil = new RentalMobil();
$mobil->setHargaSewaPerHari(200000);

$lamaMobil = 5;
$totalMobil = $mobil->getHargaSewaPerHari() * $lamaMobil;
$diskonMobil = $mobil->hitungDiskon($lamaMobil);

$motor = new RentalMotor();
$motor->setHargaSewaPerHari(100000);

$lamaMotor = 5;
$totalMotor = $motor->getHargaSewaPerHari() * $lamaMotor;
$diskonMotor = $motor->hitungDiskon($lamaMotor);

echo "<h2>Rental Mobil</h2>";
echo "Harga per hari: Rp " .
    number_format($mobil->getHargaSewaPerHari(), 0, ',', '.') . "<br>";
echo "Lama sewa: $lamaMobil hari<br>";
echo "Diskon: Rp " .
    number_format($diskonMobil, 0, ',', '.') . "<br>";
echo "Total bayar: Rp " .
    number_format($totalMobil - $diskonMobil, 0, ',', '.') . "<br>";

echo "<hr>";

echo "<h2>Rental Motor</h2>";
echo "Harga per hari: Rp " .
    number_format($motor->getHargaSewaPerHari(), 0, ',', '.') . "<br>";
echo "Lama sewa: $lamaMotor hari<br>";
echo "Diskon: Rp " .
    number_format($diskonMotor, 0, ',', '.') . "<br>";
echo "Total bayar: Rp " .
    number_format($totalMotor - $diskonMotor, 0, ',', '.') . "<br>";

?>