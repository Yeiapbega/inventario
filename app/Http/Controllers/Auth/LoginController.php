<?php

namespace App\Http\Controllers\Auth;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $ajax) 
    {
        if($ajax->ajax())
        {
            $request = $ajax->all();
            $data = Validator::make($request, 
            [
                'dni' => 'required|min:6',        
                'pass' => 'required|min:2',
                '_token' => 'required'    
            ],
            [
                'dni.required' => 'El campo dni no puede estar vacio',
                'pass.required' => 'El campo password no puede estar vacio',
                '_token.required' => 'token vacio'
            ]); 
            if ($data->fails()) 
            {
                return response()->json(['errors' => $data->errors()]);
            }
            if($this->hasTooManyLoginAttempts($ajax))
            {
              $this->fireLockoutEvent($ajax);
              return $this->sendLockoutResponse($ajax);
            }   
            //dd($request->all());
            // if (Auth::viaRemember()) 
            // {
            //     return 'cookie';
            // }            
            if(Auth::attempt(['dni' => $request["dni"], 'password' => $request['pass']], false)) 
            {           
               // $datos = DB::table('auth')
               //             ->select('dni as user_dni', 'email as user_email','fname as nombre','flname as apellido','phone')
               //             ->where('dni', $request["dni"])
               //             ->get()
               //             ->toArray();
               // //dd($datos->toArray());
               // foreach ($datos[0] as $key => $value) 
               // {
               //      session([$key => $value]);
               // }
               
               return response()->json(['message' => "Has sido conectado al servidor", 
                                 'errors' => false, 
                                 'type' => 'check']);
               //redirect('/home');
            }
            else
            {
               return response()->json(['message' => "Las credenciales no fueron encontradas en nuestros registros", 
                                 'errors' => false, 
                                 'type' => 'notCredential']);
            }     
        }
    }

    public function logout()
    {
        Auth::logout();
        session()->flush();
        return redirect('');
    }
}
