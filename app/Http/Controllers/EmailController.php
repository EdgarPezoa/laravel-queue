<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\EmailQueue; 
use Mail;

class EmailController extends Controller
{
    public function index(){
        return view('index');
    }

    public function contacto(Request $request){
        $nombre = $request->nombre;
        $mensaje = $request->mensaje;
        $para = "pezoa.1@gmail.com";

        Mail::to($para)->send(new EmailQueue($nombre, $mensaje));
        return redirect()->back();
    }
}
