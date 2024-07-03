<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil semua kamar dari database 
        $rooms = Room::all();

        //Kirim data kamar ke view home
        return view('home', ['rooms' => $rooms]);
    }
}
