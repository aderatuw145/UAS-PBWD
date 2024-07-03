<?php

use Illuminate\Support\Facades\Route;
use App\Models\Room;

Route::get('/', function () {
    // Ambil semua kamar dari database
    $rooms = Room::all();

    // Kirim data kamar ke view home
    return view('home', ['rooms' => $rooms]);
});
