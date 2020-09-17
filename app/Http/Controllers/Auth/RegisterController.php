<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

//Register Component
use App\Model\Register\Gallery;
use App\Model\Register\Regional;
use App\Model\Register\Special;

//Roles and Permission
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Override Registeration Form
     */
    public function showRegistrationForm()
    {
        $gallery    = Gallery::all();
        $regional   = Regional::all();
        $special    = Special::all();

        return view('auth.register', compact(
            [
                'gallery',
                'regional',
                'special'
            ]
        ));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'          => ['required', 'string', 'max:255'],
            'email'         => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'mobile'        => ['required', 'min:10', 'max:10', 'string'],
            'category'      => ['required'],
            'password'      => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // Custom Validate to add subcategory data
        $subcategory = null;

        if(!empty($data['gallery'])){
            $subcategory = $data['gallery'];
        }

        if(!empty($data['regional'])){
            $subcategory = $data['regional'];
        }

        if(!empty($data['special'])){
            $subcategory = $data['special'];
        }

        $user = User::create([
            'name'          => $data['name'],
            'email'         => $data['email'],
            'mobile'        => $data['mobile'],
            'category'      => $data['category'],
            'subcategory'   => $subcategory,
            'password'      => Hash::make($data['password']),
        ]);

        //Assign artist
        $user->assignRole('Artist');

        return $user;
    }
}
