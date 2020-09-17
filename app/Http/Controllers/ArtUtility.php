<?php

namespace App\Http\Controllers;

use App\Services\NotificationService as Notify;
use Illuminate\Http\Request;
use App\Model\Art;

class ArtUtility extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Method to change art status
    public function status(Art $art, Request $request) {

        $request->validate([
            'status'    => 'required',
            'remark'    => 'nullable|max:255'
        ]);

        $art->update($request->all());

        //Flash Message to view
        flash($art->name . ' has been approved.')->success();

        //Notify Artist for this art
        Notify::User($art->user_id, 'System', 'Your artwork has been approved.');

        return redirect()->back();
    }
}
