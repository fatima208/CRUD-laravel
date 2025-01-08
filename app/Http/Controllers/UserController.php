<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show(){
        $users=DB::table('users')
        ->orderBy('name')
        ->simplePaginate(3);
        return view('display',['data'=>$users]);
    }

    public function addUser(Request $req)  {
        $user= DB::table('users')->insert([
            'name'=>$req->name,
            'email'=>$req->email,
            'age'=>$req->age,
            'city'=>$req->city,
        ]);
        if($user){
         $req->session()->put('status','User data inserted successfully');
        return redirect()->route('show');}
        else{
            $req->session()->put('status','User data not inserted');
            return redirect()->route('show');
        }
    }
    public function deleteUser($id){
        $user=DB::table('users')->where('id',$id)->delete();
        if($user){
            return redirect()->route('show');
        }
    }
    public function editUser($id){
        $user=DB::table('users')->find($id);
        return view('updateuser',['data'=>$user]);
    }
    public function updateUser(Request $req,$id){
        $user=DB::table('users')->where('id',$id)->update([
            'name'=>$req->name,
            'email'=>$req->email,
            'age'=>$req->age,
            'city'=>$req->city,
        ]);
        if($user){
            $req->session()->put('status','User data updated successfully');
            return redirect()->route('show');
        }
        else{
            $req->session()->put('status','User data not updated');
            return redirect()->route('show');
        }
    }

}

