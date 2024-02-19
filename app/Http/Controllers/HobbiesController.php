<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index() {
        $id = 1;

        $data = [
            "id" => $id,
            "hobby" => "sleeping"
        ];

        return view('Hobbies', $data);
    }
}
