<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
class userController extends Controller
{
    public function index(){
        $users=User::get();
        return view( 'admin.users.index',compact('users'));
    }
    public  function create(){
        return view( 'admin.users.create');
    }
    public  function store( Request $request){
        $request->validate([
       
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        User::create([
            'name' => $request['name'],
            'email' =>$request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect('/admin/users')->with('statues','User Created');
     
    }
    public  function edit($id){
        // return $id;
        $user=User::find($id);
        return view('/admin.users.edit',compact('user'));
    } 
    public  function update(Request $request,$id){

    //   return  $request->all();
      $request->validate([
       'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$id],
        'password' => ['required', 'string', 'min:8'],
    ]);
    $user=User::find($id);
    $user->update([
        'name' => $request['name'],
        'email' =>$request['email'],
        'password' => Hash::make($request['password']),
    ]);
    return redirect('/admin/users')->with('statues','User Updeated');
    }
    public  function destroy($id){
        // return $id;
        $user=User::find($id);
        $user->delete();
        return redirect()->back()->with('statues','User Delete');


    }

}
