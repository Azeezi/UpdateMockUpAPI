<?php

$app->group('/Nationality', function() use ($app) {

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
    $app->get('/getNationality/{id}', \Mock\Controllers\NationalityController::class . ':getNationality');

/**
 * @OA\Get(
 *  path="/api/v1/Nationality/getNationalities", 
 *  tags={"Currency"},
 *  summary="To fetch all Currency details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/getNationalities', \Mock\Controllers\NationalityController::class . ':getNationalities');

    $app->post('/createNationality', \Mock\Controllers\NationalityController::class . ':createNationality');

});