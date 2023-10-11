<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EditLinkcard;
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

    /*protected function validator(array $data)
    {
        return Validator::make($data, [
            'lc_bio' => ['required', 'string', 'max:255']
        ]);
    }*/

    public function store(Request $request){
        $validatedData = $request->validate([
            'lc_bio' => ['required','string','max:255']
        ]);
        EditLinkcard::create($validatedData);
        return redirect()->route('editLinkcard')->with('success', 'Linkcard Updated Successfully');
    }

    /*protected function create(array $data)
    {
        return User::create([
            'lc_bio' => $data['lc_bio']
        ]);
    }*/
}
