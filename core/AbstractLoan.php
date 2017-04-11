<?php

/**
 * Created by PhpStorm.
 * User: Hayk
 * Date: 11/04/2017
 * Time: 11:26
 */

require_once ('Loan.php');
require_once ('Payment.php');

abstract class AbstractLoan implements Loan
{
    protected $capital;
    protected $rate;
    protected $years;

    public function __construct($capital, $rate, $years)
    {
        $this->capital = $capital;
        $this->rate = $rate;
        $this->years = $years;
    }

    public function getCapital()
    {
        return $this->capital;
    }

    public function getRate()
    {
        return $this->rate;
    }

    public function getYears()
    {
        return $this->years;
    }

    public function getRateProportion()
    {
        return $this->rate / 100;
    }

    public function getTotalInterest()
    {
        $totalInterest = 0;
        foreach($this->getPaymentTable() as $payment)
        {
            if ($payment instanceof Payment) {
                $totalInterest += $payment->getInterest();
            }
        }
        return $totalInterest;
    }

    public function getTotalAmount()
    {
        return $this->getTotalInterest() + $this->capital;
    }
}