<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RequestMessage;
use Symfony\Component\HttpFoundation\Response;

class PagesController extends Controller
{
    public function home(Request $request){


    	return view('home');
    }

    public function contact(){
    	return view('contacto');

    	
    }

    public function saludo($nombre = 'Invitado'){

    	$consola = [''];

    	return view('saludo', compact('nombre', 'consola'));
    }

    public function mensajes(RequestMessage $request){
    
    	/*if($request->has('nombre')){
    		return 'El nombre es: '.$request->input('nombre'); 
    	}*/

    	$data = $request->all();

    	return redirect()->route('contacto')
    	->with(['info'=>'Formulario enviado','nombre'=>$data]);

    }
}
