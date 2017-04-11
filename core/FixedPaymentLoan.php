<?php

/**
 * Created by PhpStorm.
 * User: Hayk
 * Date: 11/04/2017
 * Time: 11:14
 */
require_once('AbstractLoan.php');
require_once ('Payment.php');

class FixedPaymentLoan extends AbstractLoan
{
    function getPaymentTable()
    {
        $paymentTable = array();
        $annualPayment = $this->getAnnualPayment();
        $remainingCapital = $this->capital;
        for ($yearIndex = 1; $yearIndex <= $this->years; $yearIndex++) {
            $interest = $remainingCapital * $this->getRateProportion();
            $repayment = $annualPayment - $interest;
            $remainingCapital -= $repayment;
            $paymentTable[] = new Payment($yearIndex, $repayment, $interest, $remainingCapital);
        }
        return $paymentTable;
    }



    private function getAnnualPayment()
    {
        return $this->capital * (
                $this->getRateProportion() + $this->getRateProportion() /
                (
                    pow(($this->getRateProportion() + 1), $this->years) - 1
                )
            );
    }
}