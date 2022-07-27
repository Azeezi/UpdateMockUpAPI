<?php

$app->group('/DoCashAccount', function() use ($app) {

/**
 * @OA\Get(
 *  path="/api/v1/DoCashAccount/getDoCashAccount/{id}", 
 *  tags={"DoCashAccount"},
 *  @OA\Parameter(name="id",in="query",required=true,description="DoCashAccount", @Oa\Schema(type="string")),
 *  summary="To fetch a DoCashAccount details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/getDoCashAccount/{id}', \Mock\Controllers\DoCashAccountController::class . ':getDoCashAccount');

/**
 * @OA\Get(
 *  path="/api/v1/DoCashAccount/getDoCashAccounts", 
 *  tags={"DoCashAccount},
 *  summary="To fetch all DoCashAccount details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/getDoCashAccounts', \Mock\Controllers\DoCashAccountController::class . ':getDoCashAccounts');

    $app->post('/createDoCashAccounts', \Mock\Controllers\DoCashAccountsController::class . ':createDoCashAccounts');

});