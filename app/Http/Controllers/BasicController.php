<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function __construct()
    {
       // $this->middleware('edad');
    }
    public function edad($age = null)
    {
   		
    	if($age == null){
    	echo "The age is not setted";}
    	else{
    		echo "My age is " . $age;
    	}
    	//return redirect()->route('edad');
    }
    public function nombre($name = null)
    {
    	if($name == null){
    	echo "El nombre es obligatorio";}
    	else{
    		echo "My name is " . $name;
    	}
    }
    public function age()
    {
        echo "Bienvenido";
    }
    public function vista()
    {
        //$Data = array('fecha' => '30 de noviembre de 2016' );
        return view('layout.vista',['fecha' => '30 de noviembre 2016']);
    }
}
