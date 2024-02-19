<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function skills() {
        $data = 'multi-task';

        return view('Skills', ['skills' => $data]);
    }
}