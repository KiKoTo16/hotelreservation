<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){

        $data = user::all();
        return view('user.index',['users'=>$data]);
    }
}
