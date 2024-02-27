<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//models
use App\Models\Train;

class TrainController extends Controller
{
    public function index()
    {

        //recupero tutti gli elementi di questo dato 
        //con questo comando sto eseguendo il comando sql select * from movies
        $trains = Train::all();

        //dd($trains);

        return view('trains.index', compact('trains'));
    }
    public function show($id)
    {
        //recupera ogni singolo movie
        //select * from movies where id = $id poi first mi esgue la query e mi restituisce solo il primo elemento 
        $train = Train::where('id', $id)->first();

        return view('trains.show', compact('train'));
    }
}
