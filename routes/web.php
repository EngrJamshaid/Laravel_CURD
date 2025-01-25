<?php

use App\Http\Controllers\teachercontroller;
use Database\Seeders\teacherseeder;
use Illuminate\Support\Facades\Route;

Route::controller(teachercontroller::class)->group(function () {

    Route::get('/','ShowAllTeacher')->name('ReadTeacher');
    Route::get('/singleT/{id}','SingleTeacher')->name('SingleReadTeacher');
    
    Route::view('/addteacher','teacherform')->name('Addteacher');
    
    Route::post('/teacherinsert','AddTeacherTable')->name('insertTeacherintoTable');
    
    Route::get('/updateform/{id}','upform')->name('formpopulae');
    
    Route::put('/updatedata/{id}','update')->name('updateTeacherData');
    
    
    Route::get('/delete/{id}','delee')->name('del');

});


// Route::get('/',[teachercontroller::class,'ShowAllTeacher'])->name('ReadTeacher');
// Route::get('/singleT/{id}',[teachercontroller::class,'SingleTeacher'])->name('SingleReadTeacher');

// Route::view('/addteacher','teacherform')->name('Addteacher');

// Route::post('/teacherinsert',[teachercontroller::class,'AddTeacherTable'])->name('insertTeacherintoTable');

// Route::get('/updateform/{id}',[teachercontroller::class,'upform'])->name('formpopulae');

// Route::put('/updatedata/{id}',[teachercontroller::class,'update'])->name('updateTeacherData');


// Route::get('/delete/{id}',[teachercontroller::class,'delee'])->name('del');