<?php

$app->group('/mutualFund', function() use ($app) {



  


 /**
 * @OA\Get(
 *  path="/api/v1/lov/GetFundPrice", 
 *  tags={"FundPrice"},
 *  summary="To fetch all bank details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
 $app->get('/GetFundPrice', \Mock\Controllers\FundPriceController::class . ':getFundPrices');

/**
 * @OA\Get(
 *  path="/api/v1/lov/GetFundAccount", 
 *  tags={"FundAccount"},
 *  summary="To fetch all FundAccount details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetFundAccount', \Mock\Controllers\FundAccountController::class . ':getFundAccount');




/**
 * @OA\Get(
 *  path="/api/v1/lov/GetFundSubscriptions", 
 *  tags={"FundSubscriptions"},
 *  summary="To fetch all DoFundAcnt details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
 $app->get('/GetFundSubscription', \Mock\Controllers\FundSubscriptionController::class . ':getFundSubscriptions');





/**
 * @OA\Get(
 *  path="/api/v1/lov/GetFund", 
 *  tags={"Fund"},
 *  summary="To fetch all Fund details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/getFund', \Mock\Controllers\FundController::class . ':getFund');









/**
 * @OA\Get(
 *  path="/api/v1/lov/getFundPrices", 
 *  tags={"getFundPrices"},
 *  summary="To fetch all getFundPrices details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/getFundPrice', \Mock\Controllers\FundPriceController::class . ':getFundPrice');




/**
 * @OA\Get(
 *  path="/api/v1/lov/getFundTransactions", 
 *  tags={"getFundTransactions"},
 *  summary="To fetch all getFundTransactions details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/getFundTransactions', \Mock\Controllers\FundTransactionsController::class . ':getFundTransactions');



/**
 * @OA\Get(
 *  path="/api/v1/lov/getFundYield", 
 *  tags={"getFundYield"},
 *  summary="To fetch all getFundYield details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/getFundYield', \Mock\Controllers\FundYieldController::class . ':getFundYields');



/**
 * @OA\Get(
 *  path="/api/v1/lov/getFundAccounts", 
 *  tags={"getFundAccounts"},
 *  summary="To fetch all getFundAccounts details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetFundAccounts', \Mock\Controllers\FundAccountsController::class . ':getFundAccounts');


/**
 * @OA\Get(
 *  path="/api/v1/lov/getPortFolio", 
 *  tags={"getPortFolio"},
 *  summary="To fetch all getPortFolio details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetPortFolio', \Mock\Controllers\PortFolioController::class . ':getPortFolio');



/**
 * @OA\Get(
 *  path="/api/v1/lov/getPortFolies", 
 *  tags={"getPortFolies"},
 *  summary="To fetch all getPortFolio details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetPortFolies', \Mock\Controllers\PortFoliesController::class . ':getPortFolies');


/**
 * @OA\Get(
 *  path="/api/v1/lov/getFundByCustomers", 
 *  tags={"getFundByCustomers"},
 *  summary="To fetch all getFundByCustomers details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetFundByCustomers', \Mock\Controllers\FundByCustomersController::class . ':getFundByCustomers');


/**
 * @OA\Get(
 *  path="/api/v1/lov/getCustomerPositionByBVN", 
 *  tags={"CustomerPositionByBVN"},
 *  summary="To fetch all CustomerPositionByBVN details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetCustomerPositionByBVN', \Mock\Controllers\CustomerPositionByBVNController::class . ':getCustomerPositionByBVN');


/**
 * @OA\Get(
 *  path="/api/v1/lov/getIsMMFAccount", 
 *  tags={"getIsMMFAccount"},
 *  summary="To fetch all getIsMMFAccount details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetIsMMFAccount', \Mock\Controllers\IsMMFAccountController::class . ':getIsMMFAccount');


/**
 * @OA\Get(
 *  path="/api/v1/lov/getUnsubscribedFunds", 
 *  tags={"getUnsubscribedFunds"},
 *  summary="To fetch all getIsMMFAccount details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetUnsubscribedFunds', \Mock\Controllers\UnsubscribedFundsController::class . ':getUnsubscribedFunds');


/**
 * @OA\Get(
 *  path="/api/v1/lov/getDoFundRedemptions", 
 *  tags={"getDoFundRedemptions"},
 *  summary="To fetch all getDoFundRedemptions details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetDoFundRedemptions', \Mock\Controllers\DoFundRedemptionsController::class . ':getDoFundRedemptions');




/**
 * @OA\Get(
 *  path="/api/v1/lov/getDoFundSubscriptions", 
 *  tags={"getDoFundSubscriptions"},
 *  summary="To fetch all getDoFundSubscriptions details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetDoFundSubscriptions', \Mock\Controllers\DoFundSubscriptionsController::class . ':getDoFundSubscriptions');


/**
 * @OA\Get(
 *  path="/api/v1/lov/getDoFundAccounts", 
 *  tags={"getDoFundAccounts"},
 *  summary="To fetch all getDoFundAccounts details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetDoFundAccounts', \Mock\Controllers\DoFundAccountsController::class . ':getDoFundAccounts');


});