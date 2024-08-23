<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Serie;

class SeriesController extends Controller
{
    public function index () {
        $series = Serie::all();

        return view('series.index', compact('series'));
    }

    public function create () {
        return view('series.create');
    }

    public function store (Request $request) {
        $serie = new Serie();
        $serie->name = $request->name;
        $serie->save();

        return redirect("series");
    }

    public function edit (Request $request) {
        $serie = Serie::find($request->serie);

        return view('series.edit', compact('serie'));
    }

    public function update (Request $request) {
        $serie = Serie::find($request->serie);
        $serie->name = $request->name;
        $serie->save();

        return redirect("series");
    }

    public function destroy (Request $request) {
        $serie = $request->serie;

        Serie::destroy($serie);

        return redirect('series');
    }
}