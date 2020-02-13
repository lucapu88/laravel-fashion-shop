<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cloth;

class ClothController extends Controller
{
    public function index() {
      $prodotti = Cloth::all();
      return view('clothes', compact('prodotti'));
    }
}
