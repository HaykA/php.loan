<?php

/**
 * Created by PhpStorm.
 * User: Hayk
 * Date: 11/04/2017
 * Time: 11:14
 */
interface Loan
{
    function getCapital();
    function getRate();
    function getYears();
    function getPaymentTable();
    function getRateProportion();
    function getTotalAmount();
    function getTotalInterest();
}