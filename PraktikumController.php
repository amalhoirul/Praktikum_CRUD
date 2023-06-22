<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PraktikumController extends Controller
{
    public function index()
    {
        // mengambil data dari table praktikum
        $praktikum = DB::table('praktikum')->get();

        // mengirim data praktikum ke view index
        return view('index',['praktikum' => $praktikum]);
    }
}
