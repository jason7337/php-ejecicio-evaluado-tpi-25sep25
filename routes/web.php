<?php
use lib\Route;
use app\controllers\BlogController;

Route::get("/", [BlogController::class,"principal"]);
Route::get("/inicio", [BlogController::class,"inicio"]);
Route::get("/lenguaje", [BlogController::class,"lenguaje"]);
Route::get("/contactar", [BlogController::class,"contactar"]);
Route::post("/contactar", [BlogController::class,"procesar_contacto"]);

Route::dispatch();
?>