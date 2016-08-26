<?php

namespace App\Helper;

use App\User;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

trait RegistersUsers
{
    use RedirectsUsers;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRegister($page)
    {
        return $this->showRegistrationForm($page);
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm($page)
    {
        if (property_exists($this, 'registerView')) {
            return view($this->registerView)->with([
                'page' => $page
            ]);
        }

        return view('auth.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postRegister(Request $request)
    {
        return $this->register($request);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
//        $validator = $this->validator($request->all());
//
//        if ($validator->fails()) {
//            $this->throwValidationException(
//                $request, $validator
//            );
//        }

        Auth::guard($this->getGuard())->login($this->create($request->all()));

//        return redirect($this->redirectPath());
        return Auth::user();
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return string|null
     */
    protected function getGuard()
    {
        return property_exists($this, 'guard') ? $this->guard : null;
    }

    protected function create(array $data)
    {
        return User::create([
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
