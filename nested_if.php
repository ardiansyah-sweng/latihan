<?php
class ATM
{
    function isActiveCard($status)
    {
        if ($status == 'active') {
            return TRUE;
        }
    }
    function isExpiredCard($status)
    {
        if ($status == 'expired') {
            return TRUE;
        }
    }
    function isWrongPIN($status)
    {
        if ($status == 'wrong') {
            return TRUE;
        }
    }
    function isInsufficientAmount($status)
    {
        if ($status == 'insufficient') {
            return TRUE;
        }
    }

    function main($statusActiveCard, $statusExpiredCard, $statusPIN, $statusAmount)
    {
        if ($this->isActiveCard($statusActiveCard) == TRUE) {
            if ($this->isExpiredCard($statusExpiredCard) == TRUE) {
                return 'Your card is expired.';
            } else {
                if ($this->isWrongPIN($statusPIN) == TRUE) {
                    return 'Wrong PIN!';
                } else {
                    if ($this->isInsufficientAmount($statusAmount) == TRUE) {
                        return 'Insufficient amount.';
                    } else {
                        return 'Please take your money.';
                    }
                }
            }
        } else {
            return 'Your card is inactive. Please activate it.';
        }
    }
}

$atm = new ATM;
$withdrawl = $atm->main('active', 'exist', 'right', 'sufficient');
echo $withdrawl;