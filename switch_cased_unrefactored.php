<?php

class StatistikaPilihan
{
    public function rerata($arrData)
    {
        echo 'Rerata : ' . array_sum($arrData) / count($arrData);
    }

    public function median($arrData)
    {
        $jumlahData = count($arrData);
        $nilaiTengah = floor(($jumlahData - 1) / 2);

        if ($jumlahData % 2) {
            echo 'Median: ' . $arrData[$nilaiTengah];
        } else {
            $bawahTengah = $arrData[$nilaiTengah];
            $atasTengah = $arrData[$nilaiTengah + 1];
            echo 'Median: ' . (($bawahTengah + $atasTengah) / 2);
        }
    }

    public function nilaiMaksimal($arrData)
    {
        echo 'Nilai Maksimal: ' . max($arrData);
    }

    public function nilaiMinimal($arrData)
    {
        echo 'Nilai minimal: ' . min($arrData);
    }

    public function noChoice()
    {
        echo 'Anda tidak memilih.';
    }

    public function tendensiSentralUntuk($tendensiSentral, $arrData)
    {
        switch ($tendensiSentral) {
            case 'rerata':
                $this->rerata($arrData);
            case 'median':
                $this->median($arrData);
            case "maks":
                $this->nilaiMaksimal($arrData);
            case "min":
                $this->nilaiMinimal($arrData);
            default:
            $this->noChoice($arrData);
        }
    }
}

$arrData = [34, 22, 89, 12, 55];
$tendensiSentral = new StatistikaPilihan;
$tendensiSentral->tendensiSentralUntuk('rerata', $arrData);