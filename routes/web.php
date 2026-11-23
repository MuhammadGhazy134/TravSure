<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('buyer.home');
});

Route::view('/buyer/login', 'buyer.login')->name('buyer.login');


/*
|--------------------------------------------------------------------------
| Preview Views TravSure
|--------------------------------------------------------------------------
| Khusus development lokal untuk melihat tampilan Buyer dan Seller.
| Hapus route ini sebelum deployment production.
*/

if (app()->environment('local')) {
    Route::get('/preview/{path}', function (string $path) {
        $viewName = str_replace('/', '.', $path);

        abort_unless(view()->exists($viewName), 404);

        return view($viewName);
    })
    ->where('path', '(?:buyer|seller)/[a-z0-9/_-]+');
}
