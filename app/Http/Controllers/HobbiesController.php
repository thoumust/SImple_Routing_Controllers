<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function show($id) {

        $data = array(
            "id" => $id,
            "name" => "sleep"
        );
        return view('Hobbies', ['data' => $data]);
    }
}
