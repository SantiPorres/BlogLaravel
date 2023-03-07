<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Validator;
// use Illuminate\Validation\Rule;
// use Illuminate\Validation\Concerns\ValidatesAttributes;



class UserController extends Controller
{
    public function index() 
    {
        // $user=User::all();
        // return view('auth.login');
    }

    public function sesion(Request $request) {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $username = $request->input('username');
        
        $credentials = $request->only('email', 'password');


        if (Auth::attempt($credentials)) {
            // dd(Auth::id());
            return redirect()->intended('/dashboard')->with('message', "Bienvenid@ ".$username);
        }

        return redirect('/')->with('message', "Usuario o contraseña incorrecto");

        
        // $credentials = $request->getCredentials();
        
        // if (!Auth::validate($credentials)) {
            //     return redirect('/')->with('message', 'Usuario o contraseña incorrectos');
        // }
        // $user = AUth::getProvider()->retrieveByCredentials($credentials);

        // Auth::login($user);

        // return $this->authenticated($request, $user);

   
        // $credentials = $request->only('name', 'password');
        // if (Auth::attempt($credentials)) {
        //     return redirect()->intended('dashboard')
        //                 ->withSuccess('Signed in');
        // }

        // return redirect(return redirect('/dashboard'););
  
        // return redirect("login")->withSuccess('Login details are not valid');

        // $email = $request->input('email');
        // $password = $request->input('password');

        //User::where('username', $user_id)->get();

        // // $user_qs[0]['id'] = User::where('name', $name)->get('name');
        // $user_qs = User::where('email', $email)->where('password', $password)->first();
        // if (!empty($user_qs)) {
        //     return redirect('/dashboard')->with('message', "Bienvenid@ ".$name);
        // }
        // $credentials = $request->only('email', 'password');
        // dd(Auth::attempt($credentials));
    }

    public function store(Request $request)
    {
        $user = new User;

        $username = $request->input('username');
        $email = $request->input('email');

        $user_qs = User::where('username', $username)->get();

        if (count($user_qs) > 0) {
            return redirect('/newUser')->with('message', 'El usuario ya fue registrado');
        } 
        
        $user_qs = User::where('email', $email)->get();

        if (count($user_qs) > 0) {
            return redirect('/newUser')->with('message', 'El correo ya fue registrado');
        } 

        if ($request->input('password') != $request->input('confirmpassword')) {
            return redirect('/newUser')->with('message', 'Las contraseñas no coinciden');
        }
        
        // $user->name=$request->input('name');
        // $user->email=$request->input('email');
        // $user->password=$request->input('password');
        // $user->save();
        // dd($request->input());  
        User::create([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);
        
        return redirect('/dashboard')->with('message','¡Registro satisfactorio!');
        
    }

    public function authenticated(Request $request, $user) {
        return redirect('/dashboard');
    }
}
