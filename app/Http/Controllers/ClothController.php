<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cloth;
class ClothController extends Controller
{
    public function index(){
      $tuttiVestiti = Cloth::all();
      return view('clothes', ['vestiti' => $tuttiVestiti]);
    }
    public function create() {
      return view('create');
    }
    public function store(Request $request) {
      $dati = $request->all();
      $nuovoVestito = new Cloth();
      // $nuovoVestito->description = $dati['description'];
      // $nuovoVestito->gender = $dati['gender'];
      // $nuovoVestito->size = $dati['size'];
      // $nuovoVestito->color = $dati['color'];
      $nuovoVestito->fill($dati);
      $nuovoVestito->save();
      return redirect()->route('pagina-vestiti');
    }
}
