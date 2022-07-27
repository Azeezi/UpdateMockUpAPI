<?php

$app->group('/Country', function() use ($app) {

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
    $app->get('/getCountry/{id}', \Mock\Controllers\CountryController::class . ':getCountry');

/**
 * @OA\Get(
 *  path="/api/v1/Country/getCountrys", 
 *  tags={"Country"},
 *  summary="To fetch all Country details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/getCountrys', \Mock\Controllers\CountryController::class . ':getCountrys');

    $app->post('/createCountry', \Mock\Controllers\CountryController::class . ':createCountry');

});