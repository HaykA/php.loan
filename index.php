<?php
/**
 * Created by PhpStorm.
 * User: hayk
 * Date: 22/02/2017
 * Time: 13:04
 */

$title = 'Loan';
require_once('view/head.phtml');

if (isset($_GET['capital']) && isset($_GET['rate']) && isset($_GET['years'])) {
    require_once('core/GraduatedPaymentLoan.php');
    require_once('core/FixedPaymentLoan.php');
    $graduatedPaymentLoan = new GraduatedPaymentLoan($_GET['capital'], $_GET['rate'], $_GET['years']);
    $fixedPaymentLoan = new FixedPaymentLoan($_GET['capital'], $_GET['rate'], $_GET['years']);
    require_once('view/payments_table.phtml');
} else {
    require_once('view/index_form.tpl');
}

require_once('view/footer.tpl');
