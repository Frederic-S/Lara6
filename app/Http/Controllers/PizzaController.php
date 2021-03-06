<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    public function index()
    {
        $pizzas = Pizza::all();
        // OTHER METHODS
        // $pizzas = Pizza::orderBy('name', 'desc')->get();
        // $pizzas = Pizza::where('type', 'hawaiian')->get();
        // $pizzas = Pizza::latest()->get();

        return view('pizzas.index', [
            'pizzas' => $pizzas
        ]);
    }

    public function create()
    {
        return view('pizzas.create');
    }

    public function show($id)
    {

        $pizza = Pizza::findOrFail($id);


        return view('pizzas.show', ['pizza' => $pizza]);
    }
}
