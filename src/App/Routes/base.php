<?php
use Tuupola\Middleware\HttpBasicAuthentication;

$app->group('/api/v1', function($app) {
    $root = $_SERVER['DOCUMENT_ROOT'];
    require $root .'/src/App/Routes/Bank.php';
    require $root .'/src/App/Routes/lov.php';
    require $root .'/src/App/Routes/mutualFund.php';
    require $root .'/src/App/Routes/General.php';
    require $root .'/src/App/Routes/CustomerMng.php';
    require $root .'/src/App/Routes/Country.php';
    require $root .'/src/App/Routes/Currency.php';
    require $root .'/src/App/Routes/Location.php';
    require $root .'/src/App/Routes/Identity.php';
    require $root .'/src/App/Routes/Nationality.php';
    require $root .'/src/App/Routes/Officer.php';
    require $root .'/src/App/Routes/Position.php';
    require $root .'/src/App/Routes/Relationship.php';
    require $root .'/src/App/Routes/Sector.php';
    require $root .'/src/App/Routes/State.php';
    require $root .'/src/App/Routes/Title.php';
    require $root .'/src/App/Routes/TurnOver.php';
    require $root .'/src/App/Routes/GetFund.php';
    require $root .'/src/App/Routes/FundPrice.php';
    require $root .'/src/App/Routes/FundAccount.php';
    require $root .'/src/App/Routes/FundAccountId.php';
    require $root .'/src/App/Routes/FundRedemption.php';
    require $root .'/src/App/Routes/FundSubscription.php';
    require $root .'/src/App/Routes/DoFundAcnt.php';
    require $root .'/src/App/Routes/GetCustomerId.php';
    require $root .'/src/App/Routes/GetCustomerFundsCustomerId.php';
    require $root .'/src/App/Routes/GetCashAccountCustomerId.php';
    require $root .'/src/App/Routes/DoCashAccount.php';
    require $root .'/src/App/Routes/DoCashDeposit.php';
    require $root .'/src/App/Routes/DoCashWithdrawal.php';
    require $root .'/src/App/Routes/DoPlacement.php';





});//->add(HttpBasicAuthentication::class);
