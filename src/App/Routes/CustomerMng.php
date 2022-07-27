<?php

$app->group('/CustomerMng', function() use ($app) {



  


 /**
 * @OA\Get(
 *  path="/api/v1/lov/GetApiStatus", 
 *  tags={"ApiStatus"},
 *  summary="To fetch all ApiStatus details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
 $app->get('/getApiStatus', \Mock\Controllers\ApiStatusController::class . ':getApiStatus');




 /**
 * @OA\Get(
 *  path="/api/v1/lov/getCustomers", 
 *  tags={"getCustomers"},
 *  summary="To fetch all getCustomers details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetCustomers', \Mock\Controllers\CustomersController::class . ':getCustomers');


 /**
 * @OA\Get(
 *  path="/api/v1/lov/getCustomerByBanks", 
 *  tags={"getCustomerByBanks"},
 *  summary="To fetch all getCustomerByBanks details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetCustomerByBanks', \Mock\Controllers\CustomerByBanksController::class . ':getCustomerByBanks');


/**
 * @OA\Get(
 *  path="/api/v1/lov/getCustomerByCashAccounts", 
 *  tags={"getCustomerByCashAccounts"},
 *  summary="To fetch all CustomerByCashAccounts details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetCustomerByCashAccounts', \Mock\Controllers\CustomerByCashAccountsController::class . ':getCustomerByCashAccounts');


/**
 * @OA\Get(
 *  path="/api/v1/lov/getCustomerPositions", 
 *  tags={"getCustomerPositions"},
 *  summary="To fetch all CustomerPositions details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetCustomerPositions', \Mock\Controllers\CustomerPositionsController::class . ':getCustomerPositions');


/**
 * @OA\Get(
 *  path="/api/v1/lov/getCustomerDetails", 
 *  tags={"getCustomerDetails"},
 *  summary="To fetch all CustomerDetails details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetCustomerDetails', \Mock\Controllers\CustomerDetailsController::class . ':getCustomerDetails');



/**
 * @OA\Get(
 *  path="/api/v1/lov/getCustomerDetailsByLoginID", 
 *  tags={"getCustomerDetailsByLoginID"},
 *  summary="To fetch all CustomerDetails details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetCustomerDetailsByLoginID', \Mock\Controllers\CustomerDetailsByLoginIDController::class . ':getCustomerDetailsByLoginID');



/**
 * @OA\Get(
 *  path="/api/v1/lov/getIsValidLoginIDs", 
 *  tags={"getIsValidLoginIDs"},
 *  summary="To fetch all getIsValidLoginIDs details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetIsValidLoginIDs', \Mock\Controllers\IsValidLoginIDsController::class . ':getIsValidLoginIDs');

/**
 * @OA\Get(
 *  path="/api/v1/lov/getIndividualCustomerDocStatuss", 
 *  tags={"getIndividualCustomerDocStatuss"},
 *  summary="To fetch all getIsValidLoginIDs details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetIndividualCustomerDocStatuss', \Mock\Controllers\IndividualCustomerDocStatussController::class . ':getIndividualCustomerDocStatuss');


/**
 * @OA\Get(
 *  path="/api/v1/lov/getDoNewIndividuals", 
 *  tags={"getDoNewIndividuals"},
 *  summary="To fetch all getDoNewIndividuals details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetDoNewIndividuals', \Mock\Controllers\DoNewIndividualsController::class . ':getDoNewIndividuals');

/**
 * @OA\Get(
 *  path="/api/v1/lov/getDoNewCorporates", 
 *  tags={"getDoNewCorporates"},
 *  summary="To fetch all getDoNewCorporates details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetDoNewCorporates', \Mock\Controllers\DoNewCorporatesController::class . ':getDoNewCorporates');


/**
 * @OA\Get(
 *  path="/api/v1/lov/getDoNewJoints", 
 *  tags={"getDoNewJoints"},
 *  summary="To fetch all getDoNewJoints details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetDoNewJoints', \Mock\Controllers\DoNewJointsController::class . ':getDoNewJoints');


/**
 * @OA\Get(
 *  path="/api/v1/lov/getDoUpdateIndividualEmails", 
 *  tags={"getDoUpdateIndividualEmails"},
 *  summary="To fetch all getDoUpdateIndividualEmails details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetDoUpdateIndividualEmails', \Mock\Controllers\DoUpdateIndividualEmailsController::class . ':getDoUpdateIndividualEmails');



/**
 * @OA\Get(
 *  path="/api/v1/lov/getDoUpdateIndividualAddresses", 
 *  tags={"getDoUpdateIndividualAddresses"},
 *  summary="To fetch all getDoUpdateIndividualEmails details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetDoUpdateIndividualAddreses', \Mock\Controllers\DoUpdateIndividualAddresesController::class . ':getDoUpdateIndividualAddreses');


/**
 * @OA\Get(
 *  path="/api/v1/lov/getDoUpdateIndividualIDs", 
 *  tags={"getDoUpdateIndividualIDs"},
 *  summary="To fetch all getDoUpdateIndividualEmails details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetDoUpdateIndividualIDs', \Mock\Controllers\DoUpdateIndividualIDsController::class . ':getDoUpdateIndividualIDs');


/**
 * @OA\Get(
 *  path="/api/v1/lov/getDoUpdateIndividualEmploys", 
 *  tags={"getDoUpdateIndividualEmploys"},
 *  summary="To fetch all getDoUpdateIndividualEmails details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetDoUpdateIndividualEmploys', \Mock\Controllers\DoUpdateIndividualEmploysController::class . ':getDoUpdateIndividualEmploys');



/**
 * @OA\Get(
 *  path="/api/v1/lov/getCashAccountByAccountNos", 
 *  tags={"getCashAccountByAccountNos"},
 *  summary="To fetch all getDoUpdateIndividualEmails details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetCashAccountByAccountNos', \Mock\Controllers\CashAccountByAccountNosController::class . ':getCashAccountByAccountNos');


/**
 * @OA\Get(
 *  path="/api/v1/lov/getCashAccounts", 
 *  tags={"getCashAccounts"},
 *  summary="To fetch all getDoUpdateIndividualEmails details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetCashAccounts', \Mock\Controllers\CashAccountsController::class . ':getCashAccounts');


/**
 * @OA\Get(
 *  path="/api/v1/lov/getCashAccountsByPhoneNos", 
 *  tags={"getCashAccountsByPhoneNos"},
 *  summary="To fetch all getDoUpdateIndividualEmails details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetCashAccountsByPhoneNos', \Mock\Controllers\CashAccountsByPhoneNosController::class . ':getCashAccountsByPhoneNos');


/**
 * @OA\Get(
 *  path="/api/v1/lov/getCashAccountsByReferences", 
 *  tags={"getCashAccountsByReferences"},
 *  summary="To fetch all getCashAccountsByReferences details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetCashAccountsByReferences', \Mock\Controllers\CashAccountsByReferencesController::class . ':getCashAccountsByReferences');


/**
 * @OA\Get(
 *  path="/api/v1/lov/getCashAccountTransactionByCurrentDates", 
 *  tags={"getCashAccountTransactionByCurrentDates"},
 *  summary="To fetch all getCashAccountTransactionByCurrentDates details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetCashAccountTransactionByCurrentDates', \Mock\Controllers\CashAccountTransactionByCurrentDatesController::class . ':getCashAccountTransactionByCurrentDates');

/**
 * @OA\Get(
 *  path="/api/v1/lov/getCashBalances", 
 *  tags={"getCashBalances"},
 *  summary="To fetch all getCashBalances details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetCashBalances', \Mock\Controllers\CashBalancesController::class . ':getCashBalances');


/**
 * @OA\Get(
 *  path="/api/v1/lov/getChequeStatuss", 
 *  tags={"getChequeStatuss"},
 *  summary="To fetch all getChequeStatuss details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetChequeStatuss', \Mock\Controllers\ChequeStatussController::class . ':getChequeStatuss');



/**
 * @OA\Get(
 *  path="/api/v1/lov/getDoCashAccounts", 
 *  tags={"getDoCashAccounts"},
 *  summary="To fetch all getDoCashAccounts details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetDoCashAccounts', \Mock\Controllers\DoCashAccountsController::class . ':getDoCashAccounts');


/**
 * @OA\Get(
 *  path="/api/v1/lov/getDoCashDeposits", 
 *  tags={"getDoCashDeposits"},
 *  summary="To fetch all getDoCashDeposits details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetDoCashDeposits', \Mock\Controllers\DoCashDepositsController::class . ':getDoCashDeposits');

/**
 * @OA\Get(
 *  path="/api/v1/lov/getDoCashDepositReversals", 
 *  tags={"getDoCashDepositReversals"},
 *  summary="To fetch all getDoCashDeposits details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetDoCashDepositReversals', \Mock\Controllers\DoCashDepositReversalsController::class . ':getDoCashDepositReversals');


/**
 * @OA\Get(
 *  path="/api/v1/lov/getDoCashLienPlaces", 
 *  tags={"getDoCashLienPlaces"},
 *  summary="To fetch all getDoCashLienPlaces details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetDoCashLienPlaces', \Mock\Controllers\DoCashLienPlacesController::class . ':getDoCashLienPlaces');


// /**
//  * @OA\Get(
//  *  path="/api/v1/lov/getDoCashLienPlaces", 
//  *  tags={"getDoCashLienPlaces"},
//  *  summary="To fetch all getDoCashLienPlaces details",
//  *  @OA\Response(response="200", description="success"),
//  *  @OA\Response(response="201", description="An error occured")
//  * )
//  */
// $app->get('/GetDoCashLienPlaces', \Mock\Controllers\DoCashLienPlacesController::class . ':getDoCashLienPlaces');


/**
 * @OA\Get(
 *  path="/api/v1/lov/get$DoCashWithdrawals", 
 *  tags={"get$DoCashWithdrawals"},
 *  summary="To fetch all get$DoCashWithdrawals details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetDoCashWithdrawal', \Mock\Controllers\DoCashWithdrawalController::class . ':getDoCashWithdrawal');


/**
 * @OA\Get(
 *  path="/api/v1/lov/getDoCashWithdrawalReversal", 
 *  tags={"getDoCashWithdrawalReversal"},
 *  summary="To fetch all getDoCashWithdrawalReversal details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetDoCashWithdrawalReversals', \Mock\Controllers\DoCashWithdrawalReversalsController::class . ':getDoCashWithdrawalReversals');


/**
 * @OA\Get(
 *  path="/api/v1/lov/getTransactionByDates", 
 *  tags={"getTransactionByDates"},
 *  summary="To fetch all getTransactionByDates details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetTransactionByDates', \Mock\Controllers\TransactionByDatesController::class . ':getTransactionByDates');


/**
 * @OA\Get(
 *  path="/api/v1/lov/getTransactionByNumbers", 
 *  tags={"getTransactionByNumbers"},
 *  summary="To fetch all getTransactionByNumbersdetails",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetTransactionByNumbers', \Mock\Controllers\TransactionByNumbersController::class . ':getTransactionByNumbers');

/**
 * @OA\Get(
 *  path="/api/v1/lov/getDoNewGLBatchs", 
 *  tags={"getDoNewGLBatchs"},
 *  summary="To fetch all getDoNewGLBatchs",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetDoNewGLBatchs', \Mock\Controllers\DoNewGLBatchsController::class . ':getDoNewGLBatchs');


/**
 * @OA\Get(
 *  path="/api/v1/lov/getAMTBillCashAccounts", 
 *  tags={"getAMTBillCashAccounts"},
 *  summary="To fetch all getAMTBillCashAccounts",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetAMTBillCashAccounts', \Mock\Controllers\AMTBillCashAccountsController::class . ':getAMTBillCashAccounts');


/**
 * @OA\Get(
 *  path="/api/v1/lov/getAMTBillActives", 
 *  tags={"getAMTBillActives"},
 *  summary="To fetch all getAMTBillActives",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetAMTBillActives', \Mock\Controllers\AMTBillActivesController::class . ':getAMTBillActives');


/**
 * @OA\Get(
 *  path="/api/v1/lov/getAMTBillMatured", 
 *  tags={"getAMTBillMatured"},
 *  summary="To fetch all getAMTBillMatured",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetAMTBillMatured', \Mock\Controllers\AMTBillMaturedController::class . ':getAMTBillMatured');


/**
 * @OA\Get(
 *  path="/api/v1/lov/getAMTBillSellables", 
 *  tags={"getAMTBillSellables"},
 *  summary="To fetch all getAMTBillSellables",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetAMTBillSellables', \Mock\Controllers\AMTBillSellablesController::class . ':getAMTBillSellables');


/**
 * @OA\Get(
 *  path="/api/v1/lov/getDoAMTBillPurchases", 
 *  tags={"getDoAMTBillPurchases"},
 *  summary="To fetch all getDoAMTBillPurchases",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetDoAMTBillPurchases', \Mock\Controllers\DoAMTBillPurchasesController::class . ':getDoAMTBillPurchases');


/**
 * @OA\Get(
 *  path="/api/v1/lov/getDoAMTBillLiquidates", 
 *  tags={"getDoAMTBillLiquidates"},
 *  summary="To fetch all ggetDoAMTBillLiquidates",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetDoAMTBillLiquidates', \Mock\Controllers\DoAMTBillLiquidatesController::class . ':getDoAMTBillLiquidates');


/**
 * @OA\Get(
 *  path="/api/v1/lov/getNewRequests", 
 *  tags={"getNewRequests"},
 *  summary="To fetch all getNewRequests",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetNewRequests', \Mock\Controllers\NewRequestsController::class . ':getNewRequests');


});