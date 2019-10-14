<?php

namespace TIVY\Http\Controllers;

use TIVY\Tivy;
use Illuminate\Http\Request;
use TIVY\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Validator;
use Redirect;
use Illuminate\Support\Facades\DB;

class TivyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'tittle' => 'required',
             'img' => 'image|nullable|max:1999',
             'description' => 'required',
             'date' => 'required',
             'startTime'=> 'required',
             'duration' => 'required',
             'place'=> 'required',
             'capacity'=>'required|integer|min:0'
         ]);

        $image_tivy = 'image-not-found.png';        
        if ($request->hasFile('btn_file')) {            
            $file = $request->btn_file;
            $image_tivy = time() . $file->getClientOriginalName();
            $file->storeAs('/public/tivy/', $image_tivy);  
             }

        $tivy = new Tivy();

        $tivy->tittle  = $request->tittle;
        $tivy->description = $request->description;        
        $tivy->date = $request->date;    
        $tivy->startTime = $request->startTime;   
        $tivy->duration = $request->duration;
        $tivy->state = 1;   
        $tivy->place = $request->place;  
        $tivy->capacity = $request->capacity;           
        $tivy->img = $image_tivy;
      //  $user = User::where('id', $request->user);
        $tivy->user()->associate($request->user);          
        $tivy->save();      
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \TIVY\Tivy  $tivy
     * @return \Illuminate\Http\Response
     */
    public function show(Tivy $tivy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \TIVY\Tivy  $tivy
     * @return \Illuminate\Http\Response
     */
    public function edit(Tivy $tivy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \TIVY\Tivy  $tivy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {     
        $this->validate($request, [
            'tittle' => 'required',
             'img' => 'image|nullable|max:1999',
             'description' => 'required',
             'date' => 'required',
             'startTime'=> 'required',
             'duration' => 'required',
             'place'=> 'required',
             'capacity'=>'required|integer|min:0'
         ]);

        $tivy = tivy::findOrFail($id);
        
        
       
         
             if ($request->hasFile('btn_file')) {
                // Eliminar imagen si  se va a actualizar
                
                $filePath = storage_path('/public/tivy/'. $tivy->img);
               
                if (file_exists($filePath)) {
                   
                    unlink($filePath);
                }    
                // Subir nueva imagen                  
                $file = $request->btn_file;
                $image_tivy = time() . $file->getClientOriginalName();
               
                $file->storeAs('/public/tivy/', $image_tivy);  
                
                $tivy->img = $image_tivy;
                
            }
             /////////////////////
        $tivy->tittle  = $request->tittle;
        $tivy->description = $request->description;        
        $tivy->date = $request->date;    
        $tivy->startTime = $request->startTime;   
        $tivy->duration = $request->duration;
        $tivy->state = 1;   
        $tivy->place = $request->place;  
        $tivy->capacity = $request->capacity;
      //  $user = User::where('id', $request->user);
        $tivy->user()->associate($request->user);          
        $tivy->update();      
        return redirect()->route('home');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \TIVY\Tivy  $tivy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tivy $tivy)
    {
        $filePath = storage_path('/public/tivy/' . $tivy->img);

        if (file_exists($filePath)) {
            unlink($filePath);
        }

        // File::delete($filePath);

        $tivy->delete();
        return redirect('/home')->with('success', 'Eliminado');
    }


    public function showAuthorize()
    {
        $unauthorizeTivies=DB::table('tivies')->join('users', 'tivies.user_id', '=', 'users.id')->select('tivies.id','tivies.tittle','tivies.img','users.id as user_id','users.name')->get();    
        return view('pages.showAuthorize',['unauthorizeTivies'=>$unauthorizeTivies]);        
    }

    public function allow($id )
    {   
        $tivy = tivy::findOrFail($id);
        // $publication->img = $request->img; 
        // $publication->titulo = $request->titulo;
        // $publication->text = $request->text;
        $tivy->state ="2";    
        $tivy->save();

        //////
        
        return view('pages.showAuthorize');  
        /////
   }
    
}
