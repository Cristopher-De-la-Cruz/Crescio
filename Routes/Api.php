<?php

require_once __DIR__ . '/Route.php';
require_once __DIR__ . '/../Middleware/AuthMiddleware.php';
require_once __DIR__ . '/../Controllers/AuthController.php';
require_once __DIR__ . '/../Controllers/ExampleController.php';
use App\Routes\Route;
use App\Middleware\AuthMiddleware;
use App\Controllers\AuthController;
use App\Controllers\ExampleController;

/**
 * API ROUTES
 */

// PUBLIC ROUTES
Route::addRoute('GET', '', function() { return Route::getRoutes(); });
Route::addRoute('GET', 'helloworld', [ExampleController::class, 'helloworld']);
Route::addRoute('GET', 'generateToken', [AuthController::class, 'generateToken']);
Route::addRoute('POST', 'saveFile', [ExampleController::class, 'save']);
Route::addRoute('POST', 'saveImage', [ExampleController::class, 'saveImg']);

// AUTH ROUTES
Route::addRoute('GET', 'readToken', [AuthController::class, 'readToken'], [AuthMiddleware::class]);

?>
