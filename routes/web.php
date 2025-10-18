<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserdataController;
use App\Http\Controllers\MachinedataController;
use App\Models\machine;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Route placeholder removed (was misspelled 'dasboard')

Route::get('/userdata', [UserdataController::class, 'index'])->name('userdata');

// Dashboard route (shows machines)
Route::get('/dashboard', function () {
    $model = machine::all();
    return view('dashboard', compact('model'));
})->name('dashboard');

    Route::get('/addmachine', 
     [MachinedataController::class, 'addmachine'
     ])->name('addmachine');


      Route::get('/editmachine/{id}', function($machine_id) {
        return view('editmachine', compact('machine_id'));
    })->name('editmachine');

    Route::get('/adduser', 
    [UserdataController::class, 'adduser'
    ])->name('adduser');

    Route::get('/edituser/{id}', 
        function($id){
            return view('edituser',compact('id'));
    })->name('edituser');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
   
//  Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard'); 

    // Route::get('/userdata', 
    // [UserdataController::class, 'index'
    // ])->name('userdata');
  
    // Route::get('/adduser', 
    // [UserdataController::class, 'adduser'
    // ])->name('adduser');

    // Route::get('/edituser/{id}', 
    //     function($id){
    //         return view('edituser',compact('id'));
    // })->name('edituser');

});
