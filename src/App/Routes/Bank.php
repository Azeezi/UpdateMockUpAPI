<?php

$app->group('/bank', function() use ($app) {

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
//     $app->get('/getBank/{id}', \Mock\Controllers\BankController::class . ':getBank');

// /**
//  * @OA\Get(
//  *  path="/api/v1/bank/getBanks", 
//  *  tags={"Bank"},
//  *  summary="To fetch all bank details",
//  *  @OA\Response(response="200", description="success"),
//  *  @OA\Response(response="201", description="An error occured")
//  * )
//  */
    //  $app->get('/getBanks', \Mock\Controllers\BankController::class . ':getBanks');

//     $app->post('/createBank', \Mock\Controllers\BankController::class . ':createBank');

});