<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function index(){
        {
            return view('contacto');
        }

    }

    public function store(Request $request){
        
        Mail::to('ivan278_@hotmail.com')->send(new ContactanosMailable($request->all()));

        return "Mensaje enviado";

    }
}
