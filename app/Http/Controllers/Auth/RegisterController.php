<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';

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
            'name' => ['required', 'string', 'max:255'],
            'mobile' => ['required', 'string', 'max:255'],
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:100',
		
		/**
             * custom field
             */
            // 'fathername' => ['required', 'string', 'max:255'],
            // 'mothername' => ['required', 'string', 'max:255'],
            // 'presentaddress' => ['required', 'string', 'max:255'],
            // 'permanentaddress' => ['required', 'string', 'max:255'],
            // 'mobile' => ['required', 'string', 'max:255'],
            // 'parentmobileno' => ['required', 'string', 'max:255'],
            // 'presentschoolname' => ['required', 'string', 'max:255'],
            // 'classname' => ['required', 'string', 'max:255'],
            // 'roll' => ['required', 'string', 'max:255'],
            // 'examlanguage' => ['required', 'string', 'max:255'],
            // /**
            //  * custom field
            //  */

            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
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
        //dd($data);
        if($data['image']){
            //$image= $data->file('image');
            $img=time().'.'.$data['image']->getClientOriginalExtension();
            //dd($img);
             //$location= public_path('img/profile/'.$img);
             $data['image']->move(public_path('img/profile'),$img);
 }
        
        return User::create([
            'name' => $data['name'],
            'image' => $img,
        
            //'email' => $data['email'],
	        'fathername' => $data['fathername'],
            'mothername' => $data['mothername'],
            'presentaddress' => $data['presentaddress'],
            'permanentaddress' => $data['permanentaddress'],
            'mobile' => $data['mobile'],
            //'parentmobileno' => $data['parentmobileno'],
            'presentschoolname' => $data['presentschoolname'],
            'classname' => $data['classname'],
            'roll' => $data['roll'],
            'examlanguage' => $data['examlanguage'],
            'session' => date('Y'),
            'password' => Hash::make($data['mobile']),
        ]);
    }
}
