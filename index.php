<?php

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| First we need to get an application instance. This creates an instance
| of the application / container and bootstraps the application so it
| is ready to receive HTTP / Console requests from the environment.
|
*/

$app = require __DIR__ . '/bootstrap/app.php';
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: DELETE, POST, GET, OPTIONS, PATCH, PUT");
header("Access-Control-Allow-Headers:*");

if ($_SERVER['REQUEST_METHOD'] == "OPTIONS") { //send back preflight request response
    return "";
}
/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$app->run();
