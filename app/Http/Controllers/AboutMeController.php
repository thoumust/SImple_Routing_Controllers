<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function show($id) {

        $data = array(
            "id" => $id,
            "name" => "Leslie"
        );
        return view('AboutMe', ['data' => $data]);
    }
}
