<?php

namespace TIVY\Http\Controllers;

use Illuminate\Http\Request;
use TIVY\User;
use TIVY\Role;
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
    
        $user=User::findOrFail($id); 
      
       
  
        $this->validate($request,[
            'name'=>'required|min:5'
          ]);    
        
          if ($request->hasFile('img')) {
            // Eliminar imagen si  se va a actualizar
            $filePath = storage_path('/public/profile/' . $user->imagen);

            if (file_exists($filePath)) {
                unlink($filePath);
            }
            // Subir nueva imagen
            $file = $request->img;
            $image_profile = time() . $file->getClientOriginalName();
            $user->imagen = $image_profile;
            $file->storeAs('public/profile', $image_profile);
        }
          $user->name=$request->name;
          $user->lastname=$request->lastname;
          $user->description=$request->description;        
          $user->update();   
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

    public function updateRole( $id,$roleId){ 

        dd();
        $user=User::findOrFail($id); 
        
        
       //$role= Role::findOrFail($roleId);

    
    
       
       $user=User::findOrFail($id);    
       $role= Role::findOrFail($roleId);
       
       if($role->id==1){
           $user
           ->roles()
           ->detach(Role::where('name', 'admin')->first());
   
            $user
           ->roles()
           ->attach(Role::where('name', 'user')->first());
   
           $user->save();
       }
           else{
               $user
               ->roles()
               ->detach(Role::where('name', 'user')->first());
       
                $user
               ->roles()
               ->attach(Role::where('name', 'admin')->first());
       
               $user->save();            
           }
           return redirect()->route('home');
       }
   
   
       public function editState($id,Request $request){
   
            
           $user=User::findorfail($id);
         
   
   //estado 0 inhabilitado
   //estado 1 habulitado
   //estado 2 suspendido        

   
               $user->state=$request->state; 
               $user->save(); 
               return redirect()->route('home'); 
           
   }
}
