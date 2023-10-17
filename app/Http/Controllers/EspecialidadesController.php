<?php

namespace App\Http\Controllers;

use App\Models\Especialidad;
use Illuminate\Http\Request;

class EspecialidadesController extends Controller
{
    public function index()
    {
        $especialidades=Especialidad::all();

        return view("especialidades.index", compact("especialidades"));
    }

    public function add()
    {
        return view("especialidades.add");
    }

    public function store(Request $request){
        //dd($request->all());
        $nuevaEspecialidad=new Especialidad($request->all());
        $nuevaEspecialidad->save();
        return redirect("especialidades");
    }


    public function edit($id)
    {
        $especialidad=Especialidad::find($id);
        return view("especialidades.edit",compact("especialidad"));
    }

    public function update(Request $request){
        $especialidad=Especialidad::find($request->id);
        $especialidad->update($request->all());
        return redirect("especialidades");
    }

    public function delete($id){
        $especialidad=Especialidad::find($id);
        $especialidad->delete();
        return redirect("especialidades");
    }
}
