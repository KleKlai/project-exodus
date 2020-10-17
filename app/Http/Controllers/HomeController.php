<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
use App\Model\Art;
use App\Model\Support\Ticket;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $user       = User::all()->count();
        $artwork    = Art::all()->count();
        $ticket     = Ticket::all()->count();

        $table = \DB::getSchemaBuilder()->getColumnListing('users');

        //Remove Element in Array
        $table = \array_diff($table, ["password", "remember_token"]);

        // dd(Art::with('user')->get());

        return view('home', compact(
            'user',
            'artwork',
            'ticket',
            'table'
        ));
    }
}
