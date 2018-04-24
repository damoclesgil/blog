<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function postContact(Request $request){
        dd($request);
    }
}