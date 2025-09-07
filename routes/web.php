<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/{id}/{name?}', function (string $id, string $name = null) {
    //return 'User ID: '.$id;
    return view('homepage',['id' => $id, 'name' => $name]);
});

//Route::view('/home', 'homepage');

Route::get('/greeting', [UserController::class, 'index'])->name('gt');

Route::prefix('blog')->group(function () {
        Route::get('/view', function () {
        return 'This is blog view page';
    });
    Route::get('/create', function () {
        return 'This is blog create page';
    });
    Route::get('/update', function () {
        return 'This is blog update page';
    });
    Route::get('/delete', function () {
        return 'This is blog delete page';
    });
});

Route::fallback(function () {
    return 'This is fallback route';
});

Route::view('/app', 'app');
Route::view('/feature1', 'feature1');

Route::get('/student', [StudentController::class, 'index'])->name('student.index');
Route::get('/student/getcourse', [StudentController::class, 'getCourse'])->name('student.course');
Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/student/store', [StudentController::class, 'store'])->name('student.store');
Route::post('/student/show', [StudentController::class, 'getData'])->name('student.show');

