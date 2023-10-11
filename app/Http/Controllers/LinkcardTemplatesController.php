<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkcardTemplatesController extends Controller
{
    public function index(){
        return view('linkcardTemplateOne');
    }
}
