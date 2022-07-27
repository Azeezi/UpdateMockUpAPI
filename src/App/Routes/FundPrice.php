<?php

$app->group('/FundPrice', function() use ($app) {

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
    $app->get('/FundPrice/{id}', \Mock\Controllers\BankController::class . ':FundPrice');

/**
 * @OA\Get(
 *  path="/api/v1/FundPrice/getFundPrices", 
 *  tags={"FundPrice"},
 *  summary="To fetch all bank details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/getFundPrices', \Mock\Controllers\FundPriceController::class . ':getFundPrices');

    $app->post('/createFundPrice', \Mock\Controllers\FundPriceController::class . ':createFundPrice');

});