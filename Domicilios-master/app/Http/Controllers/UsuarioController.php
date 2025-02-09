<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empleado;
use Illuminate\Support\Str;

//viene de Spatie
//use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr; 
use Cache;

class UsuarioController extends Controller
{
    /** 
     * Display a listing of the resource.
     */
    public function index() 
    {
        $roles = Role::pluck('name','name')->all();
        $usuarios = User::all();


        $empleados = Empleado::all();
/*
        foreach ($usuarios as $key => $user) {
            if (Cache::has('user-is-online-' . $user->id)){
                $usuarios[$key]->status = 'Online';
            }else{
                $usuarios[$key]->status = 'Offline';
            }
        }
*/
//dd($usuarios);
        $nota = " ";
        return view('usuarios.index',compact('usuarios', 'roles', 'empleados', 'nota')); 

    }

    /** 
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('usuarios.crear',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);
    
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
    
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
    
        return redirect()->route('usuarios.usuariolista');

        */
    }


    public function guardaru(Request $request)
    {
        /*
        $usuario = new User();
        $usuario->password = Hash::make($usuario['password']);
        if ($request->hasFile('avatar')) {
            $imagen = $request->file("avatar");
            $nombreimagen = Str::slug(time()) . "." . $imagen->guessExtension();
            $usuario->avatar = $nombreimagen;
            $ruta = public_path("/fotos");
            $imagen->move($ruta, $nombreimagen);
        }
        $usuario->name = $request->input("name");
        $usuario->email = $request->input("email");
        //$usuario->email_verified_at = ;
        $usuario->save();
        $usuario->assignRole($request->input('roles'));
        */

        $ema = $request->input('email');
        $envios = User::where('email', $ema)
        ->get();
        /*
        dd($ema);
        if($envios){
            $roles = Role::pluck('name','name')->all();
            $usuarios = User::all();
            $empleados = Empleado::all();
    
            foreach ($usuarios as $key => $user) {
                if (Cache::has('user-is-online-' . $user->id)){
                    $usuarios[$key]->status = 'Online';
                }else{
                    $usuarios[$key]->status = 'Offline';
                }
            }
            $nota = "El usuario ya existe";
            return view('usuarios.index', compact('usuarios', 'roles', 'empleados', 'nota'));
        }
        //dd($envios);
      
*/
        $input = $request->all();
        if ($request->hasFile('avatar')) {

            $imagen = $request->file("avatar");
            $nombreimagen = Str::slug(time()) . "." . $imagen->guessExtension();
            //$input['avatar'] = "HOla";
            //dd($input['avatar']);
            $ruta = public_path("/fotos");
            $imagen->move($ruta, $nombreimagen);
           // dd($nombreimagen);
           
        $input['password'] = Hash::make($input['password']);
    
        $user = User::create($input);
        $ultimoemp = User::latest('id')->first();
        $ultimoemp->avatar = $nombreimagen;
        $ultimoemp->save();
        


        $user->assignRole($request->input('roles'));
        return redirect()->route('indexuser');
        }
        
        $input['password'] = Hash::make($input['password']);
    
        $user = User::create($input);
        /*
        $ultimoemp = User::latest('id')->first();
        $ultimoemp->avatar = $nombreimagen;
        $ultimoemp->save();
        
*/

        $user->assignRole($request->input('roles'));
     /*

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        if ($request->hasFile('avatar')) {

            $imagen = $request->file("avatar");
            $nombreimagen = Str::slug(time()) . "." . $imagen->guessExtension();
            $input->avatar = $nombreimagen;
            $ruta = public_path("/fotos");
            $imagen->move($ruta, $nombreimagen);
        }


        $user = User::create($input);
        $user->assignRole($request->input('roles'));
        */
        return redirect()->route('indexuser');
    }

    /**
     * Display the specified resource.
     */
    public function vista(string $id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        return view('usuarios.usuerview',compact('user', 'roles'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
    
        return view('usuarios.userview',compact('user','roles','userRole'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function editarusuario(Request $request, string $id)
    {
        /*
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]); 
    */
        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));    
        }
    
        $user = User::find($id);
        


        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
    
        $user->assignRole($request->input('roles'));


        if ($request->hasFile('avatar')) {
            $usuario = User::find($id);
            $imagen = $request->file("avatar");
            $nombreimagen = Str::slug(time()) . "." . $imagen->guessExtension();
            $usuario->avatar = $nombreimagen;
            //dd($input['avatar']);
            $ruta = public_path("/fotos");
            $imagen->move($ruta, $nombreimagen);
           // dd($nombreimagen);
           $usuario->save();
        }
    
        return redirect()->route('indexuser');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function eliminaruser(string $id)
    {
        User::find($id)->delete();
        return redirect()->route('indexuser');
    }

    public function eliminartodouser(Request $request)
    {
        $todos = $request->get("checked");
        foreach($todos as $pedido){
            User::find($pedido)->delete();

            }
        //$todos = $request->get("valores");

        //dd($todos);
       // User::find($id)->delete();
        //return redirect()->route('indexuser');
        return redirect()->route('indexuser');
    }


    
}