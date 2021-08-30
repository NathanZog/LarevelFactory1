<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index(){
        $data = Formation::all();
        return view('layout/formation/formation', compact("data"));
    }


    public function create(){

        return view('layout/formation/create_formation');
    }

    public function store(Request $request){
        $data = new Formation();
        $data->nom = $request->nom;
        $data->description = $request->description;
        $data->save();
        return redirect("formation");
    }

    public function destroy(Formation $id){
        $data =$id;
        $data->delete();
        return redirect("formation");
    }

    public function show(Formation $id){
        $data = $id;
        return view('layout/formation/show_formation', compact("data"));
    }


    public function edit(Formation $id){
        $data = $id;
        return view('layout/formation/edit_formation', compact("data"));
    }

    public function update(Formation $id, Request $request){
        $data = $id;
        $data->nom = $request->nom;
        $data->description = $request->description;
        $data->save();
        return redirect("formation");
    }
}
