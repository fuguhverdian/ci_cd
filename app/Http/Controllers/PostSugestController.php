<?php

namespace App\Http\Controllers;

use App\Models\Post_sugetion;
use Illuminate\Http\Request;

class PostSugestController extends Controller
{
    public function sugestpost(Request $request){

        $validatedSugets = $request -> validate([
            'First_Name'=> 'required|max:255',
            'Last_Name'=> 'required|max:255',
            'Email'=> 'required|regex:/(.+)@(.+)\.(.+)/i',
            'Pesan'=> 'required'
        ]);


        Post_sugetion::create($validatedSugets);
        return redirect('/')->with('success','keren');
    }
}