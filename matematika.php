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

    /* Menghitung panjang sisi miring segitiga menggunakan rumus pitagoras
    * Rumus:  = akar (alas kuadrat + tinggi kuadrat)
    */
    function pitagoras($alas, $tinggi)
    {
        $kuadrat_alas = $this->kuadrat($alas);
        $kuadrat_tinggi = $this->kuadrat($tinggi);
        return sqrt($kuadrat_alas + $kuadrat_tinggi);
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

    /**
     * Luas persegi panjang
     * Rumus: panjang * lebar
     */
    function luasPersegiPanjang($panjang, $lebar)
    {
        return $panjang * $lebar;
    }

    /**
     * Luas keliling bola
     * Rumus: (4/3 * Phi) * jari-jari kuadrat
     */
    function kelilingBola($jari_jari)
    {
        $empat_per_tiga = 4/3;
        return ($empat_per_tiga * $this->phi) * $this->kuadrat($jari_jari);
    }
}

$bangunRuang = new Matematika();
echo 'Luas lingkaran: ' . $bangunRuang->luasLingkaran(30);
echo '<br>';
echo 'Keliling lingkaran: ' . $bangunRuang->kelilingLingkaran(8);
echo '<br>';
echo 'Luas sisi kubus: ' . $bangunRuang->luasKubus(8);
echo '<br>';
echo 'Panjang sisi miring segitiga: ' . $bangunRuang->pitagoras(20, 45);
echo '<br>';
echo 'Luas persegi panjang: ' . $bangunRuang->luasPersegiPanjang(12, 17);
echo '<br>';
echo 'Keliling bola: ' . $bangunRuang->kelilingBola(17);

