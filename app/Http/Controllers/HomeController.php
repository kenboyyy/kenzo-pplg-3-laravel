<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }


   public function about (){
       $data = [
           'name'  => 'Kenzo Wibowo',
           'address' => 'Purwokerto',
           'email' => 'kenzowibowo14@gmail.com'

       ];
       return view('about', $data);
   }
}