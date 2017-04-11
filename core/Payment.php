<?php

/**
 * Created by PhpStorm.
 * User: Hayk
 * Date: 11/04/2017
 * Time: 11:18
 */
class Payment
{
    private $yearIndex;
    private $repayment;
    private $interest;
    private $remainingCapital;

    public function __construct($yearIndex, $repayment, $interest, $remainingCapital)
    {
        $this->yearIndex = $yearIndex;
        $this->repayment = $repayment;
        $this->interest = $interest;
        $this->remainingCapital = $remainingCapital;
    }

    public function getYearIndex()
    {
        return $this->yearIndex;
    }

    public function getRepayment()
    {
        return $this->repayment;
    }

    public function getInterest()
    {
        return $this->interest;
    }

    public function getRemainingCapital()
    {
        return $this->remainingCapital;
    }

    public function getMonthlyPaymentAmount()
    {
        return $this->getAnnualPaymentAmount() / 12;
    }

    public function getAnnualPaymentAmount()
    {
        return $this->getRepayment() + $this->getInterest();
    }
}