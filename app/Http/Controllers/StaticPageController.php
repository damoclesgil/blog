<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Session;
use Mail;

class StaticPageController extends Controller{
    public function getHome(){
        return view('website.home');
    }
    public function getAbout(){
        $firstName = 'Dâmocles';
        $lastName = 'Gil';
        $fullName = $firstName . ' ' . $lastName;
        $email = 'damoclesgil@gmail.com';
        return view('website.about', compact('fullName', 'email'));
    }
    public function getContact(){
        return view('website.contact');
    }
    public function postContact(Request $request)
    {
        // Validação dos campos
        $inputs = $request->validate([
            'name' => 'required|between:3,50',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'bodyMessage' => 'required|min:5'
        ]);

        // Envio do email utilizando o Mailer
        Mail::to('damoclesgil@gmail.com', 'TaskList Contato')->send(new ContactMail($inputs));
    
        // Mensagem de sucesso para ser exibida
        Session::flash('success', 'Email enviado com sucesso!');
        return redirect()->route('contact');
    }
}