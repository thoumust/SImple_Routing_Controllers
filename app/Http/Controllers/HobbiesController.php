<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function hobby() {

        $data = 'sleeping';

        return view('Hobbies', ['hobby' => $data]);
    }
}
