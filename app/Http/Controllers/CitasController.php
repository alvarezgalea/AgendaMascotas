<?php

namespace App\Http\Controllers;   
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class CitasController extends Controller
{

    public function index(){
        return view('citas.index');
    }

    public function store(Request $request){   
      $insert =   DB::table('citas')->insert([
            'fechaCita' => $request->input('fecha'),
            'horaCita' => $request->input('hora'),
            'mascotaCita' =>$request->input('mascota')
        ]);

        echo json_encode($insert);
        return;
        Request()->validate(citas::$rules);
        $citas = citas::create($request->all());
    }

}
