<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerifikasiDataFotoController extends Controller
{
    public function index()
    {
        return view('verifikator.VerifikasiDataFoto');
    }
}
