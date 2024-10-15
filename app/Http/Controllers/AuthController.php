<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(){
      return view('auth/login');
    }

    public function logear(Request $request){
        $estudiante = Estudiante::where('expediente', $request->expediente)->first();

        if ($estudiante && $estudiante->nip === $request->nip) {
            Auth::login($estudiante);  // Iniciar sesión manualmente
            return to_route('home');
        } else {
            return to_route('login');
        }
    }

    public function home(){
      return view('pages/home');
    }

    public function logout(){
      Session::flush();
      Auth::logout();
      return to_route('login');
    }
}
