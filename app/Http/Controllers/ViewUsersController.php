<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ViewUsersController extends Controller
{
    public function view(){
        return view('viewUsers.viewUsers');
    }

    public function view2(){
        return view('viewUsers.addUser');
    }

    public function addUser(Request $request){
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->firstname = $request->firstName;
        $user->lastname = $request->lastName;
        $user->password = $request->password;
        $user->save();

        return back();
    }

    public function viewUpdateUser($idUser){
        return view('viewUsers.updateUser', [
            'user' => User::find($idUser),
            ]);

    }


    public function getUsers(){
        return view('viewUsers.viewUsers', [
            'users' => User::all(),
        ]);

    }

    public function updateUser(Request $request){
        $user = User::where('id', $request->id)->update(['email' => $request->email, 'username' => $request->username, 'firstname' => $request->firstName, 'lastname' => $request->lastName, 'password' => bcrypt($request->password), 'banned' => $request->fav_language]);
        return redirect('/seeUsers');

    }
}
