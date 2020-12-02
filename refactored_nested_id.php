<?php

class ATM
{
    function isInactiveCard($status){
        if ($status == 'inactive') {
            return TRUE;
        }
    }
    function isExpiredCard($status){
        if ($status == 'expired') {
            return TRUE;
        }
    }
    function isWrongPIN($status){
        if ($status == 'wrong') {
            return TRUE;
        }
    }
    function isInsufficientAmount($status){
        if ($status == 'insufficient') {
            return TRUE;
        }
    }

    function main($status) {
        if ($this->isInactiveCard($status) == TRUE) {
            return 'Your card is inactive. Please activate it.';
        }
        if ($this->isExpiredCard($status) == TRUE) {
            return 'Your card is expired.';
        }
        if ($this->isWrongPIN($status) == TRUE) {
            return 'Wrong PIN!';
        }
        if ($this->isInsufficientAmount($status) == TRUE) {
            return 'Insufficient amount.';
        }
        return 'Take your money.';
    }
}

$atm = new ATM;
$withdrawl = $atm->main('insufficient');
echo $withdrawl;
