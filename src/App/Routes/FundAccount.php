<?php

$app->group('/FundAccount', function() use ($app) {

/**
 * @OA\Get(
 *  path="/api/v1/bank/getBank/{id}", 
 *  tags={"Bank"},
 *  @OA\Parameter(name="id",in="query",required=true,description="Bank ID", @Oa\Schema(type="string")),
 *  summary="To fetch a bank details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/getFundAccount/{id}', \Mock\Controllers\BankController::class . ':getFundAccount');

/**
 * @OA\Get(
 *  path="/api/v1/FundAccount/getFundAccounts", 
 *  tags={"Bank"},
 *  summary="To fetch all bank details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/getFundAccounts', \Mock\Controllers\FundAccountController::class . ':getFundAccounts');

    $app->post('/createFundAccount', \Mock\Controllers\FundAccountController::class . ':createFundAccount');

});