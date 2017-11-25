<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\User;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('name','Asc')->paginate(10);
        //$users = User::All();
        return view('admin/users/index',['users'=>$users,'ActiveMenu'=>'admin.users.index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/users/create',['ActiveMenu'=>'admin.users.create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        //
        $user = new User($request->All());
        $user->password = bcrypt($request->password);
       	$user->save();
        
        $flash='danger';
        //$flash['message']="se ha registrado ". $user->name ." de forma exitosa";
        return redirect()->route('admin.users.index');

        //dd($user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit',['user'=>$user,'ActiveMenu'=>'admin.users.create']);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();

        // return redirect()->route('admin.users.index')->with('success','El usuario ha sido editado');
        $flash = ['success'=>'el usuario ha sido eliminado'];
        return redirect()->route('admin.users.index')->with('info',$flash);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::find($id);
        $user->delete();

        Flash::error('El usuario'.$user->name.' ha sido eliminado')->important();
        return redirect()->route('admin.users.index');
    }
}
