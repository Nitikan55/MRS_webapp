<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserdataController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

//  Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');

//  Route::get('/userdata', 
//     [UserdataController::class, 'index'
//     ])->name('userdata');   


//     Route::get('/adduser', 
//     [UserdataController::class, 'adduser'
//     ])->name('adduser');

//     Route::get('/edituser/{id}', 
//         function($id){
//             return view('edituser',compact('id'));
//     })->name('edituser');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
   
 Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard'); 

    Route::get('/userdata', 
    [UserdataController::class, 'index'
    ])->name('userdata');
  
    Route::get('/adduser', 
    [UserdataController::class, 'adduser'
    ])->name('adduser');

    Route::get('/edituser/{id}', 
        function($id){
            return view('edituser',compact('id'));
    })->name('edituser');

});
