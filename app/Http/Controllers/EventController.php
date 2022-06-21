<?php

namespace App\Http\Controllers;

use App\Models\cadastro;
use Illuminate\Http\Request;


use App\Models\User;

class EventController extends Controller
{


    public function store (Request $request) {



        $calls = new cadastro;

        $calls->title = $request->title;
        $calls->location = $request->location;
        $calls->private = $request->private;
        $calls->description = $request->description;
        $calls->created_at = $request->created_at;
       
        $calls->date = $request->date;
        $calls->problems = $request->problems;

        // Image Upload
        if($request -> hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now") . "." . $extension);

            $requestImage->move(public_path('img/calls'), $imageName);

            $calls->image = $imageName;

        }


        $user = auth()->user();
        $calls->user_id = $user->id;

        $calls->save();

        return redirect ('/')->with('msg', 'Reclamação criado com Sucesso !');
    }

}

