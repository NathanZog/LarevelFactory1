<?php

namespace App\Http\Controllers;

use App\Models\Batiment;
use Illuminate\Http\Request;

class BatimentController extends Controller
{
    public function index(){
        $data = Batiment::all();
        return view('layout/batiment/batiment', compact("data"));
    }


    public function create(){

        return view('layout/batiment/create_batiment');
    }

    public function store(Request $request){
        $data = new Batiment();
        $data->nom = $request->nom;
        $data->description = $request->description;
        $data->save();
        return redirect("batiment");
    }

    public function destroy(Batiment $id){
        $data =$id;
        $data->delete();
        return redirect("batiment");
    }

    public function show(Batiment $id){
        $data = $id;
        return view('layout/batiment/show_batiment', compact("data"));
    }


    public function edit(Batiment $id){
        $data = $id;
        return view('layout/batiment/edit_batiment', compact("data"));
    }

    public function update(Batiment $id, Request $request){
        $data = $id;
        $data->nom = $request->nom;
        $data->description = $request->description;
        $data->save();
        return redirect("batiment");
    }


}
