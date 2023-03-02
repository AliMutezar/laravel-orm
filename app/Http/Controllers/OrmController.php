<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class OrmController extends Controller
{
    public function index()
    {
        $role_user = User::with('roles')->get();
        // dd($role_user);
        return view('many-to-many', [
            'role_user' => $role_user
        ]);
    }
}
