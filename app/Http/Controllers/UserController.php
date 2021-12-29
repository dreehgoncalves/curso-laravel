<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function lista()
    {
        // $user = new User();
        // $user->name = 'John';
        // $user->email = 'John@example.com';
        // $user->password = Hash::make('123');
        // $user->save();

        // echo '<h1>lista</h1>';

        $user = User::all()->first();
        return view('lista', ['user' => $user]);
    }
}
