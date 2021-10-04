<?php

use Illuminate\Support\Facades\Route;

// Route::get('1', function () {
//     return 'satu';
// });

// Route::get('2', function () {
//     return 'dua';
// });

// Route::get('3', function () {
//     return 'tiga';
// });

// Route::get('4', function () {
//     return 'empat';
// });

// Route::get('5', function () {
//     return 'lima';
// });

// parameter wajib
// Route::get('/{nama}/{tahun_lahir}', function ($nama, $tahun_lahir) {
//     return 'Nama : ' . $nama .'<br>' .'Tahun : ' . $tahun_lahir;
// });

// parameter opsional
// Route::get('/{nama?}/{tahun_lahir}', function ($nama, $tahun_lahir = null) {
//     return 'Nama : ' . $nama .'<br>' .'Tahun : ' . $tahun_lahir;
// });


Route::get('/hitung-luas-segitiga/{alas?}/{tinggi?}', function ($alas = 1, $tinggi = 1) {
    $luas = $alas * $tinggi / 2;
    return 'Alas nya : ' . $alas . '<br>'
    . 'Tingginya : ' . $tinggi . '<br>'
    . 'Hasil luas segitiga : ' .$luas;
});
