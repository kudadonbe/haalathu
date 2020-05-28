<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        
        return Validator::make($data, [
            'nid' => ['required', 'string', 'max:255', 'unique:users'],
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'user_img' => ['image'],
            // 'user_img' => ['required', 'image'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
        
        // dd($imagePath);
        // dd(request('user_img'));
        
        if (request('user_img')) {
            $imagePath = request('user_img')->store('uploads', 'public');
            $imagePath = '/storage/' . $imagePath;
            // dd("yes image");
        } else {
            // dd("no image");
            $imagePath = '/storage/' . 'uploads/f0kLFL66XCDbpae39KRlWZf2ynUc0l0Y2KJL0N77.jpeg';
            
        }
        // $imagePath = '/';

        return User::create([
            'nid' => $data['nid'],
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'user_img' => $imagePath,
            'password' => Hash::make($data['password']),
        ]);
    }
}
