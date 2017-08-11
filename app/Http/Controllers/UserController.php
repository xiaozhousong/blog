<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Hash;
use Session;
use App\Role;


class UserController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(3);
        return view('manage.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('manage.users.create',['roles' => $roles]);
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
            'name' => 'required|max:25',
            'email' => 'required|email|unique:users',
            'password' =>'required|min:6'
           ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make('password');

        $user->save();

        $user->syncRoles($request->roles, $user->id);

        $user->save();
           
        // return redirect()->route('users.show', $user->id);

        if($user->save()){
            return redirect()->route('users.show', $user->id);
        }else{
            Session::flash('danger', 'Sorry, there is an error');
            return redirect()->route('users.create');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('manage.users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
        return view('manage.users.edit', ['user' => $user],['roles' => $roles]);
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
        $this->validate($request, [
            'name' => 'required|max:25',
            'email' => 'required|email|unique:users',
            'password' =>'required|min:6'
           ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make('password');

        $user->save();

        $user->syncRoles($request->roles, $user->id);

        $user->save();
           
        // return redirect()->route('users.show', $user->id);

        if($user->save()){
            return redirect()->route('users.show', $user->id);
        }else{
            Session::flash('danger', 'Sorry, there is an error');
            return redirect()->route('users.create');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect()->route('manage.index');

        // if($user->destroy()){
        //     Session::flash('success','The user is successfully delete');
        //     return redirect()->route('manage.users.index');
        // }else{
        //     Session::flash('danger', 'Sorry, there is an error');
        //     return redirect()->route('manage.users.index');
        // }
    }
}
