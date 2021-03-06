<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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

    use RegistersUsers {
     // change the name of the name of the trait's method in this class
     // so it does not clash with our own register method
        register as registration;
    }

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/Verify';

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
          'title' => 'required|string|max:25',
          'first_name' => 'required|string|max:255',
          'last_name' => 'required|string|max:255',
          'cell_number' => 'required|string|max:255',
          'home_number' => 'nullable|string|max:255',
          'country' => 'required|string|max:255',
          'date_of_birth' => 'required|date',
          'occupation' => 'required|string|max:255',
          'funds' => 'required|string|max:255',
          'referral_id' => 'nullable|integer|max:255',
          'address' => 'required|string|max:255',
          'postal_address' => 'nullable|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'password' => 'required|string|min:6|confirmed',
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
        return User::create([
          'title' => $data['title'],
          'first_name' => $data['first_name'],
          'last_name' => $data['last_name'],
          'cell_number' => $data['cell_number'],
          'home_number' => $data['home_number'],
          'country' => $data['country'],
          'date_of_birth' => $data['date_of_birth'],
          'occupation' => $data['occupation'],
          'funds' => $data['funds'],
          'referral_id' => $data['referral_id'],
          'address' => $data['address'],
          'postal_address' => $data['postal_address'],
          'email' => $data['email'],
          'password' => bcrypt($data['password']),
          'google2fa_secret' => $data['google2fa_secret'],
        ]);
    }

    public function register(Request $request)
    {
        //Validate the incoming request using the already included validator method
        $this->validator($request->all())->validate();

        // Initialise the 2FA class
        $google2fa = app('pragmarx.google2fa');

        // Save the registration data in an array
        $registration_data = $request->all();

        // Add the secret key to the registration data
        $registration_data["google2fa_secret"] = $google2fa->generateSecretKey();

        // Save the registration data to the user session for just the next request
        $request->session()->flash('registration_data', $registration_data);

        // Generate the QR image. This is the image the user will scan with their app
     // to set up two factor authentication
        $QR_Image = $google2fa->getQRCodeInline(
            config('app.name'),
            $registration_data['email'],
            $registration_data['google2fa_secret']
        );

        // Pass the QR barcode image to our view
        return view('google2fa.register', ['QR_Image' => $QR_Image, 'secret' => $registration_data['google2fa_secret']]);
    }
    public function completeRegistration(Request $request)
    {
        // add the session data back to the request input
        $request->merge(session('registration_data'));

        // Call the default laravel authentication
        return $this->registration($request);
    }
}
