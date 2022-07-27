<?php

$app->group('/Currency', function() use ($app) {

/**
 * @OA\Get(
 *  path="/api/v1/Currency/getCurrency/{id}", 
 *  tags={"Currency"},
 *  @OA\Parameter(name="id",in="query",required=true,description="Currency ID", @Oa\Schema(type="string")),
 *  summary="To fetch a Currency details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/getCurrency/{id}', \Mock\Controllers\CurrencyController::class . ':getCurrency');

/**
 * @OA\Get(
 *  path="/api/v1/Currency/getCurrencys", 
 *  tags={"Currency"},
 *  summary="To fetch all Currency details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/getCurrencys', \Mock\Controllers\CurrencyController::class . ':getCurrencys');

    $app->post('/createCurrency', \Mock\Controllers\CurrencyController::class . ':createCurrency');

});