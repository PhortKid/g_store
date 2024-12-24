<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use  App\Models\User;
use DB;

class UsersManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=User::all();
        return view('dashboard.users_management.index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data =$request->validate(
            [
            'name'=>['required','min:2'],
            'email'=>['required','email'],
            'role'=>['required','min:2'],
            

          
            ]
        );

        
        $password= "Mpya@2025";
        //$password= fake()->randomNumber(6);

        $user=new User;
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->role=$request->input('role');
        $user->password=Hash::make($request->input('password'));
        $user->save();

       

        return redirect('/dash/users_management')->with('success','User Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data =$request->validate(
            [
            'name'=>['required'],
            'email'=>['required','email'],
            'role'=>['required','min:2'],
            //'password'=>['required','min:2'],

          
            ]
        );

        $user=User::find($id);
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->role=$request->input('role');
        //$user->password=Hash::make($request->password);
        $user->save();

        return redirect('/dash/users_management')->with('success','User Edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect('dash/users_management')->with('success','User Deleted');
    }
}
