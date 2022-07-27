<?php

$app->group('/FundSubscription', function() use ($app) {

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
    $app->get('/getFundSubscription/{id}', \Mock\Controllers\FundSubscriptionController::class . ':getFundSubscription');

/**
 * @OA\Get(
 *  path="/api/v1/FundSubscription/getFundSubscriptions", 
 *  tags={"Country"},
 *  summary="To fetch all Country details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/getFundSubscriptions', \Mock\Controllers\FundSubscriptionController::class . ':getFundSubscriptions');

    $app->post('/createFundSubscription', \Mock\Controllers\FundSubscriptionController::class . ':createFundSubscription');

});