<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth; 
use App\Events\UserLOggedInEvent;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    public function redirectTo() {
        if(Auth::check()) {
            $role = Auth::user()->role; 
            switch ($role) {
                case 'admin':
                    return '/admin-home';
                    break;
                case 'teacher':
                    UserLOggedInEvent::dispatch(Auth()->user());
                    return '/teacher-home';
                    break; 
                case 'student':
                    
                    UserLOggedInEvent::dispatch(Auth()->user());
                    return '/student-home';
                    break; 
                default:
                    return '/login'; 
                    break;
            }
        }else{
            return '/login'; 
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
