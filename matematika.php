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
     * Menghitung panjang sisi miring segitiga menggunakan rumus pitagoras
     * Rumus:  = akar (alas kuadrat + tinggi kuadrat)
     */
    function pitagoras($alas, $tinggi)
    {
        $kuadrat_alas = $this->kuadrat($alas);
        $kuadrat_tinggi = $this->kuadrat($tinggi);
        return sqrt($kuadrat_alas + $kuadrat_tinggi);
    }

    function luasKubus()
    {
    }
}

$bangunRuang = new Matematika();
echo 'Luas lingkaran: ' . $bangunRuang->luasLingkaran(30);
echo '<br>';
echo 'Keliling lingkaran: ' . $bangunRuang->kelilingLingkaran(8);
echo '<br>';
echo 'Panjang sisi miring segitiga: ' . $bangunRuang->pitagoras(20, 45);
