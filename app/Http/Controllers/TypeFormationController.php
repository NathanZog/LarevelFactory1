<?php

namespace App\Http\Controllers;

use App\Models\TypeFormation;
use Illuminate\Http\Request;

class TypeFormationController extends Controller
{
    public function index(){
        $data = TypeFormation::all();
        return view('layout/typeformation/typeformation', compact("data"));
    }


    public function create(){

        return view('layout/typeformation/create_typeformation');
    }

    public function store(Request $request){
        $data = new TypeFormation();
        $data->nom = $request->nom;

        $data->save();
        return redirect("typeformation");
    }

    public function destroy(TypeFormation $id){
        $data =$id;
        $data->delete();
        return redirect("typeformation");
    }

    public function show(TypeFormation $id){
        $data = $id;
        return view('layout/typeformation/show_typeformation', compact("data"));
    }


    public function edit(TypeFormation $id){
        $data = $id;
        return view('layout/typeformation/edit_typeformation', compact("data"));
    }

    public function update(TypeFormation $id, Request $request){
        $data = $id;
        $data->nom = $request->nom;

        $data->save();
        return redirect("typeformation");
    }
}
