<?php

/**
 * Created by PhpStorm.
 * User: Hayk
 * Date: 11/04/2017
 * Time: 11:15
 */

require_once ('AbstractLoan.php');
require_once ('Payment.php');

class GraduatedPaymentLoan extends AbstractLoan
{
    function getPaymentTable()
    {
        $paymentTable = array();
        $repayment = $this->capital / $this->years;
        $remainingCapital = $this->capital;
        for ($yearIndex = 1; $yearIndex <= $this->years; $yearIndex++) {
            $interest = $remainingCapital * $this->getRateProportion();
            $remainingCapital -= $repayment;
            $paymentTable[] = new Payment($yearIndex, $repayment, $interest, $remainingCapital);

        }
        return $paymentTable;
    }
}