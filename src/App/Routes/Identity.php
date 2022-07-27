<?php

$app->group('/Identity', function() use ($app) {

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
    $app->get('/getIdentity/{id}', \Mock\Controllers\IdentityController::class . ':getIdentity');

/**
 * @OA\Get(
 *  path="/api/v1/Identity/getIdentities", 
 *  tags={"Currency"},
 *  summary="To fetch all Currency details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/getIdentities', \Mock\Controllers\IdentityController::class . ':getIdentities');

    $app->post('/createIdentity', \Mock\Controllers\IdentityController::class . ':createIdentity');

});