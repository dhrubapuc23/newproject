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
Route::get('/student/show', [StudentController::class, 'getData'])->name('student.show')->middleware('auth');
Route::get('student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
Route::post('student/update/{id}', [StudentController::class, 'update'])->name('student.update');
Route::get('student/delete/{id}', [StudentController::class, 'destroy'])->name('student.delete');
Route::get('student/file-upload', [StudentController::class, 'fileUpload'])->name('student.file');
Route::post('student/file-upload', [StudentController::class, 'fileUploadSubmit'])->name('student.file.submit');
Route::get('get-pdf', [StudentController::class, 'getPDF'])->name('student.pdf');
Route::get('send-email', [StudentController::class, 'sendEmail'])->name('student.email');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
