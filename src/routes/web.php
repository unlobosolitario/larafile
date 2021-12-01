<?php

Route::get('/mengajukan','unlobosolitario\larafile\Http\Controllers\FileController@indeks');
Route::post('/mengajukan/memindai','unlobosolitario\larafile\Http\Controllers\FileController@memindai');
Route::post('/mengajukan/baca','unlobosolitario\larafile\Http\Controllers\FileController@baca');
Route::post('/mengajukan/unduh','unlobosolitario\larafile\Http\Controllers\FileController@unduh');
Route::post('/mengajukan/mengunggah','unlobosolitario\larafile\Http\Controllers\FileController@mengunggah');