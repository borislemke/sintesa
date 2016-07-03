<?php
/*
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "sintesa_translate";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$stmt = $conn->prepare("SELECT * FROM pages");
$result = $stmt->execute();
$results = $stmt->fetchAll();
$arrayResult = [];

foreach ($results as $row) {
	$row = json_decode(json_encode($row));
	$arrayRow = [];
	$arrayRow["id"] = $row->id;
	$arrayRow["title"] = $row->title;
	$arrayRow["url"] = $row->url;
	$arrayRow["bodyclass"] = $row->bodyclass;
	$arrayRow["meta"] = $row->meta;
	$arrayRow["layout"] = $row->layout;
	$arrayRow["status"] = $row->status;
	$arrayRow["user_id"] = $row->user_id;
	$arrayRow["navigation_id"] = $row->navigation_id;
	$arrayRow["hotel_id"] = $row->hotel_id;
	$arrayRow["created_at"] = $row->created_at;
	$arrayRow["updated_at"] = $row->updated_at;
	$arrayRow["content"] = json_decode($row->content);
	$arrayResult[] = $arrayRow;
}

$fp = fopen('translatable.json', 'w');
fwrite($fp, json_encode($arrayResult));
fclose($fp);

$conn = null;
die();
*/

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylorotwell@gmail.com>
 */

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels nice to relax.
|
*/

require __DIR__.'/../bootstrap/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

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

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
