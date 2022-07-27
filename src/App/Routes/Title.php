<?php

$app->group('/Title', function() use ($app) {

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
    $app->get('/getTitle/{id}', \Mock\Controllers\StateController::class . ':getTitle');

/**
 * @OA\Get(
 *  path="/api/v1/Title/getTitles", 
 *  tags={"Currency"},
 *  summary="To fetch all Currency details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/getTitles', \Mock\Controllers\TitleController::class . ':getTitles');

    $app->post('/createTitle', \Mock\Controllers\TitleController::class . ':createTitle');

});