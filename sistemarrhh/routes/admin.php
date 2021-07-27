<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;

Route::get('', function () {
    return "Hola administrador";
});