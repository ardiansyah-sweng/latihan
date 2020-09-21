<?php

class Matematika
{
    private $phi = 3.14;

    /**
     * Menghitung nilai kuadrat pangkat dua
     * pangkat = nilai^pangkat
     */
    function kuadrat($nilai)
    {
        $pangkat = 2;
        return pow($nilai, $pangkat);
    }

    /**
     * Menghitung Luas Lingkaran
     * Rumus: 0.25 * 3.14 * diameter kuadrat
     */
    function luasLingkaran($diameter)
    {
        $seperempat = 0.25;
        return $seperempat * $this->phi * $this->kuadrat($diameter);
    }

    /**
     * Menghitung Keliling Lingkaran
     */
    function kelilingLingkaran($jari_jari)
    {
        $dua = 2;
        return $this->phi * $dua * $jari_jari;
    }

    /**
     * Menghitung Luas Permukaan Kubus
     * Rumus jika panjang satu sisi diketahui 
     * Luas kubus = 6 * Sisi kuadrat
     */
    function luasKubus($sisi)
    {
        $enam_sisi = 6;
        return $enam_sisi * $this->kuadrat($sisi);
    }
}

$bangunRuang = new Matematika();
echo 'Luas lingkaran: ' . $bangunRuang->luasLingkaran(30);
echo '<br>';
echo 'Keliling lingkaran: ' . $bangunRuang->kelilingLingkaran(8);
echo '<br>';
echo 'Luas sisi kubus: ' . $bangunRuang->luasKubus(8);
