<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index() {
        $id = 1;

        $data = [
            "id" => $id,
            "skills" => "multi-tasking"
        ];

        return view('Skills', $data);
    }
}