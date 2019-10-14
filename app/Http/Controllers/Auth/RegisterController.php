<?php

namespace TIVY\Http\Controllers\Auth;

use TIVY\User;
use TIVY\Role;
use TIVY\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/respuesta';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

//Funcion que genera el codigo aleatorio //
function generarCodigo($longitud) {
    $key = '';
    $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
    $max = strlen($pattern)-1;
    for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
    return $key;
}
//Fin de la funcion//

    protected function validator(array $data)
    {
        $fecha_actual = date("d-m-Y");       
        $fecha= date("Y-m-d",strtotime($fecha_actual."- 18 year"));
        
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],            
            'fecha'=>['required','date',"before:$fecha"],    
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'termsConditions'=>['required'],
           
           
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \TIVY\User
     */
    protected function create(array $data)
    {
        $codigo=$this->generarCodigo(8);

        $datos=array('name'=>$data['name'],'lastname'=>$data['lastname'],'fecha'=>$data['fecha'],'codigo'=>$codigo);

        $this->email($datos,$data['email']);


        $user=User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'lastname'=>$data['lastname'],
            'fecha'=>$data['fecha'],
            'codigo' =>$codigo,
         
        ]);

        $user
        ->roles()
        ->attach(Role::where('name', 'user')->first());

        return $user;
    }

    function email($datos,$email){

        Mail::send('emails.plantilla',$datos,function($message) use ($email){
           
            $message->subject('Welcome to TIVY');
            $message->to($email);
            $message->from('norepply@TIVY.co.cr','TIVY');
        });
    }
}
