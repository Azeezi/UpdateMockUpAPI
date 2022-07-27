<?php

$app->group('/FundRedemption', function() use ($app) {

/**
 * @OA\Get(
 *  path="/api/v1/Country/getCountry/{id}", 
 *  tags={"Country"},
 *  @OA\Parameter(name="id",in="query",required=true,description="Country ID", @Oa\Schema(type="string")),
 *  summary="To fetch a Country details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/getFundRedemption/{id}', \Mock\Controllers\FundRedemptionController::class . ':getFundRedemption');

/**
 * @OA\Get(
 *  path="/api/v1/FundRedemption/getFundRedemptions", 
 *  tags={"Country"},
 *  summary="To fetch all Country details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/getFundRedemptions', \Mock\Controllers\FundRedemptionController::class . ':getFundRedemptions');

    $app->post('/createFundRedemption', \Mock\Controllers\FundRedemptionController::class . ':createFundRedemption');

});