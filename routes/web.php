<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {


    $client = Elasticsearch\ClientBuilder::create()->build();

    $result = $client->search([
        "index" => "book",
//        "body" => [
//            "query" => [
//                "match" => "ghoul"
//            ]
//        ]
    ]);
    var_dump($result['hits']['hits']);
//    return view('welcome');
});
