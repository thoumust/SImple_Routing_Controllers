<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index() {
        $data = array (
            'name' => "Leslie Fuentes",
            'age' => "22"
        );
        return view('AboutMe', ['data' => $data]);
    }
}