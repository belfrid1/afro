<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PaymentController;
use App\Models\Tag;
use App\Models\Video;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'string', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     * @param  \Illuminate\Http\Request  $request
     */
    protected function create(array $data)
    {

        if($data['role'] !== "subscribed"){
            //for admin
            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'role' => $data['role'],
            ]);
        }else{
            $response = (new PaymentController)->pay($data);
            // 16.66 for 6 month 19.98 for 3 month 29.25 for 1 month
            $today = Carbon::today();
            // for 1 month
            if($data['amount'] == 29.25){
                $periodeSubscription = Carbon::parse($today)->addDay(30) ;
            }
            // 3 moonth
            if($data['amount'] == 19.98){

                $periodeSubscription = Carbon::parse($today)->addDay(90) ;
            }
            // 6 moonth
            if($data['amount'] == 16.66){
                $periodeSubscription = Carbon::parse($today)->addDay(180) ;

            }

            $end_subscription_date = $today + $periodeSubscription;
            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'role' => $data['role'],
                'payment_status' => false,
                'end_subscription_date' => $end_subscription_date,
            ]);
        }
    }

    public function showRegistrationForm(){
        $tags = Tag::all();
        $videos = Video::All();
        return view('auth.front.register',compact('tags','videos'));
    }
}
