<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class EditLinkcardController extends Controller
{
    public function index(){
        return view('editLinkcard');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'lc_bio' => ['required', 'string', 'max:255']
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'lc_bio' => $data['lc_bio']
        ]);
    }
}
