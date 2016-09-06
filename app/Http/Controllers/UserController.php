<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use Auth;

class UserController extends Controller
{

    public function getLogin () {
        return view('login');
    }

    public function postLogin (Request $request) {

        $input = $request->all();

        if (Auth::attempt([ 'name' => $input['name'], 'password' => $input['password'] ])) {
            $user = User::where('name', $input['name'])->first();
            session(['user' => $user]);

            return response()->json([
                'status' => 'accepted',
                'next'   => url('task/index')
            ]);
        } else {
            return response()->json([
                'status' => 'rejected'
            ]);
        }

    }

    public function logout () {
        session()->flush();

        return redirect('user/login');
    }

}
