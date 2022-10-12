<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserRegistration extends Controller
{
    public function postRegistration(Request $request){
        return 'hello';
    }
    public function show($id){
        $data =  array(
            "id" => $id,
            "Email" => "Miko C Gurrobat",
            "Password" => "12345miko",
        );
        return view('register',['data' => $data])->middleware('auth');
    }
}
?>