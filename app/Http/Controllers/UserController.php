<?php

namespace TIVY\Http\Controllers;

use Illuminate\Http\Request;
use TIVY\User;
use Redirect;
USE TIVY\Tivy;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   
    public function show(User $user)
    {
        $myTivies= Tivy::all()->where('state','=',2);
        $pendingTivies= Tivy::all()->where('state','=',1);
        $tiviesIGone=array();
        $upComingTivies=array();
        
    

        return view('pages.profile', 
        ['user'=> $user,'myTivies'=>$myTivies,'pendingTivies'=>$pendingTivies,
        'tiviesIGone'=>$tiviesIGone,'upComingTivies'=>$upComingTivies]);
    }
    

    public function destroy(User $user)
    {
        $filePath = storage_path('app/public/storage' . $user->img);

        if (file_exists($filePath)) {
            unlink($filePath);
        }
        $user->delete();
        return redirect()->route('home');
    }
    

    public function edit($id)
    {        $user=User::findOrFail($id);  
        return view('user.edit',['user' => $user]);
    }

    public function update(Request $request, $id)
    {               

  
        $this->validate($request,[
            'name'=>'required|min:5'
          ]);    
          $user=User::findOrFail($id); 

          if ($request->hasFile('img')) {
            // Eliminar imagen si  se va a actualizar
            $filePath = storage_path('app/public/user/' . $user->img);
            if (file_exists($filePath)) {
                unlink($filePath);
            }
            // Subir nueva imagen
            $file = $request->file('img');
            $image_profile = time() . $file->getClientOriginalName();
            $user->img = $image_profile;
            $file->storeAs('public/storage', $image_profile);
        }

          $user->name=$request->name;
          $user->lastname=$request->lastname;
          $user->fecha=$request->fecha;
          $user->email=$request->email;   
          $user->password=bcrypt($request->password);
          $user->save();   
          return redirect()->route('home');
    }

    public function activate($codigo){
        //se extraen los campos de la db donde el codigo coicida
        $users=User::where('codigo',$codigo);
        //se cuentan los users dentro del array user
        $exist=$users->count();        
        $user=$users->first();
        //verificacion de la existencia del usuarion y si esta inactivo
        if($exist==1 and $user->active==0)
        {
            $id=$user->id;
            return view('auth.data_complete',compact('id'));
        }else{
            return redirect::to('/');
        }

    }

    public function complete(Request $request, $id){

        $user=USer::find($id);
        $user->password=bcrypt($request->password);
        $user->activo=1;

        $user->save();
        return redirect::to('/login');
    }
}
