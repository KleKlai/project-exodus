<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class Partial extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function trashUser()
    {
        $data = User::select('id','uuid', 'name', 'category')
                ->onlyTrashed()
                ->get();

        return view('admin.user_management.trash', compact('data'));
    }
}
