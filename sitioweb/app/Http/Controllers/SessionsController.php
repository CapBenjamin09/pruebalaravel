<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Usuario;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $request = request()->only('mail', 'password');

        
        if(auth()->attempt($request) == false)
        {   
            return back()->withErrors([
                'message' => 'El correo o la contraseña es incorrecta, por favor intenta de nuevo.'
            ]);
        }
        return redirect()->to('/');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->to('/');
    }
}
