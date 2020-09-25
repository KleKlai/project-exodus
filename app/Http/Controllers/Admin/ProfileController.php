<?php

namespace App\Http\Controllers\Admin;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Mail\ProfileDeleted;
use Illuminate\Http\Request;
use Carbon\Carbon;
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
        //Revoke all Roles
        $user->roles()->detach();
        //Revoke all permission first
        $user->revokePermissionTo($user->getAllPermissions());
        $user->delete();

        Mail::to($user->email)->send(new ProfileDeleted($user));


        return back();
    }

    public function markVerified(User $user)
    {
        $user->update([
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        flash('Profile verified')->success()->important();

        return redirect()->back();
    }
}
