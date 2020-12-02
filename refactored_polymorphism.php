<?php

interface StatistikaInterface
{
    public function tendensiSentral($arrData);
}

class Rerata implements StatistikaInterface
{
    public function tendensiSentral($arrData)
    {
        echo 'Rerata : '.array_sum($arrData) / count($arrData);
    }
}

class Median implements StatistikaInterface
{
    public function tendensiSentral($arrData)
    {
        $jumlahData = count($arrData);
        $nilaiTengah = floor(($jumlahData - 1) / 2);

        if ($jumlahData % 2) {
            echo 'Median: '. $arrData[$nilaiTengah];
        } else {
            $bawahTengah = $arrData[$nilaiTengah];
            $atasTengah = $arrData[$nilaiTengah + 1];
            echo 'Median: '.(($bawahTengah + $atasTengah) / 2);
        }
    }
}

class Maksimal implements StatistikaInterface
{
    public function tendensiSentral($arrData)
    {
        echo 'Nilai Maksimal: '. max($arrData);
    }
}

class Minimal implements StatistikaInterface
{
    public function tendensiSentral($arrData)
    {
        echo 'Nilai minimal: '. min($arrData);
    }
}

class NoTendensiSentral implements StatistikaInterface
{
    public function tendensiSentral($arrData)
    {
        echo 'Anda tidak memilih.';
    }
}

class StatistikaPilihan
{
    public static function tendensiSentralUntuk($tendensiSentral)
    {
        switch ($tendensiSentral) {
            case 'rerata':
                return new Rerata;
            case 'median':
                return new Median;
            case "maks":
                return new Maksimal;
            case "min":
                    return new Minimal;
            default:
                return new NoTendensiSentral;
        }
    }
}

$arrData = [34,22,89,12,55];
StatistikaPilihan::tendensiSentralUntuk('rerata')->tendensiSentral($arrData);
echo '<br>';
StatistikaPilihan::tendensiSentralUntuk('median')->tendensiSentral($arrData);
echo '<br>';
StatistikaPilihan::tendensiSentralUntuk('maks')->tendensiSentral($arrData);
echo '<br>';
StatistikaPilihan::tendensiSentralUntuk('min')->tendensiSentral($arrData);

