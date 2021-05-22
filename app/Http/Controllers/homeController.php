<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class homeController extends Controller{
    public function home(){
        return view("home0249");
    }
    public function artikle(){
        return view("artikel0249");
    }
    public function about(){
        return view("aboutme0249");
    }
}
