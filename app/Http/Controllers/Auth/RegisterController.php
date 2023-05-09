<?php

namespace App\Http\Controllers\Auth;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\RegistersUsers;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

class RegisterController extends VoyagerBaseController
{
    use RegistersUsers;
    protected $redirectTo = '/login';

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

}
