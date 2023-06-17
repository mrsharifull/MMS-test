<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $data['users'] = User::latest()->get();
        return view('admin.users.view',$data);

    }
}
