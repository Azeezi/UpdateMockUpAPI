<?php

$app->group('/TurnOver', function() use ($app) {

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
    $app->get('/getTurnOver/{id}', \Mock\Controllers\TurnOverController::class . ':getTurnOver');

/**
 * @OA\Get(
 *  path="/api/v1/TurnOver/getTurnOvers", 
 *  tags={"Currency"},
 *  summary="To fetch all Currency details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/getTurnOvers', \Mock\Controllers\TurnOverController::class . ':getTurnOvers');

    $app->post('/createTurnOver', \Mock\Controllers\TurnOverController::class . ':createTurnOver');

});