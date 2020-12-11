<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function uploadAvatar(Request $request)
    {
        if($request->hasFile('image')) {
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('images', $filename, 'public');
            \App\Models\User::find(1)->update(['avatar' => $filename]);
        }
        return redirect()->back();
    }

    public function index()
    {
        /*$data = [
            'name'=>'Elon',
            'email'=>'elon@bitfumes.com',
            'password'=>'password',
        ];

        \App\Models\User::create($data);*/


        /*$user = new User();
        $user->name = 'sarthak';
        $user->email = 'sarthak@bitfumes.com';
        $user->password = bcrypt('password');
        $user->save();*/

        $user = \App\Models\User::all();
        return $user;

        //User::where('id', 2)->delete();

        //User::where('id', 5)->update(['name'=>'bitfumesss']);

        //$user = User::all();
        //return $user;

        //DB::insert('insert into users (name,email,password) values (?,?,?)', [
        //    'sarthak', 'sarthak@bitfumes.com', 'password',
        //]);

        //$users = DB::select('select * from users');
        //return $users;

        //DB::update('update users set name = ? where id = 1', ['Bitfumes']);

        /*DB::delete('delete from users where id=1');
        $users = DB::select('select * from users');
        return $users;*/

        return view('home');
    }
}
