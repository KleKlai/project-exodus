<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Mail\ProfileDeleted;
use Illuminate\Http\Request;
use App\User;
use Log;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function myProfile(User $user)
    {
        return view('admin.profile', compact('user'));
    }

    public function updateUser(ProfileUpdateRequest $request, User $user)
    {
        $user->update($request->all());

        flash('Profile save successfully.')->success()->important();

        return redirect()->back();
    }

    public function deleteUser(User $user)
    {

        $user->delete();

        Mail::to($user->email)->send(new ProfileDeleted($user));


        return back();
    }
}
