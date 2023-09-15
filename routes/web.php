<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use Illuminate\Support\Facades\Route;

include(base_path('routes/admin.php'));
include(base_path('routes/website.php'));
Route::fallback( function (){
   abort(404);
});
