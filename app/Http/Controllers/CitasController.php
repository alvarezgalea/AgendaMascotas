<?php

namespace App\Http\Controllers;
use App\Models\citas;
use Illuminate\Http\Request;




class CitasController extends Controller
{
    //

    //agregdo
    public function index(){


        return view('citas.index');
    }



    public function store(Request $request){
        
        Request()->validate(citas::$rules);
        $citas = citas::create($request->all());
    }






}
