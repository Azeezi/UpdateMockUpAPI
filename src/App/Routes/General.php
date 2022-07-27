<?php

$app->group('/General', function() use ($app) {



  


 /**
 * @OA\Get(
 *  path="/api/v1/lov/GetApiStatus", 
 *  tags={"ApiStatus"},
 *  summary="To fetch all ApiStatus details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
 $app->get('/getApiStatus', \Mock\Controllers\ApiStatusController::class . ':getApiStatus');

/**
 * @OA\Get(
 *  path="/api/v1/lov/GetProducts", 
 *  tags={"Products"},
 *  summary="To fetch all Products details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/getProducts', \Mock\Controllers\ProductsController::class . ':getProducts');


/**
 * @OA\Get(
 *  path="/api/v1/lov/getKeys", 
 *  tags={"getkeys"},
 *  summary="To fetch all keys details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/getKeys', \Mock\Controllers\KeysController::class . ':getKeys');


/**
 * @OA\Get(
 *  path="/api/v1/lov/getUpdates", 
 *  tags={"getUpdates"},
 *  summary="To fetch all getUpdates details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/getUpdates', \Mock\Controllers\UpdatesController::class . ':getUpdates');



/**
 * @OA\Get(
 *  path="/api/v1/lov/getLGA", 
 *  tags={"getLGA"},
 *  summary="To fetch all getLGA details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/getLGA', \Mock\Controllers\LGAController::class . ':getLGA');
















});