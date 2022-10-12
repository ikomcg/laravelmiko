<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
   public function index(){
	return "<h1>Home Page</h1>";
   }
    public function about(){
	return "<h1>About Page</h1>";
   }
    public function edi(){
	return "<h1>Contact Page</h1>";
   }
}
