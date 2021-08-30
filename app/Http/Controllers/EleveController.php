<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    public function index(){
        $data = Eleve::all();
        return view('layout/eleve/eleve', compact("data"));
    }


    public function create(){

        return view('layout/eleve/create_eleve');
    }

    public function store(Request $request){
        $data = new Eleve();
        $data->nom = $request->nom;
        $data->nom = $request->age;
        $data->nom = $request->état;
        $data->nom = $request->prénom;
        $data->description = $request->description;
        $data->save();
        return redirect("eleve");
    }

    public function destroy(Eleve $id){
        $data =$id;
        $data->delete();
        return redirect("eleve");
    }

    public function show(Eleve $id){
        $data = $id;
        return view('layout/eleve/show_eleve', compact("data"));
    }


    public function edit(Eleve $id){
        $data = $id;
        return view('layout/eleve/edit_eleve', compact("data"));
    }

    public function update(Eleve $id, Request $request){
        $data = $id;
        $data->nom = $request->nom;
        $data->nom = $request->age;
        $data->nom = $request->état;
        $data->nom = $request->prénom;
        $data->description = $request->description;
        $data->save();
        return redirect("eleve");
    }
}
