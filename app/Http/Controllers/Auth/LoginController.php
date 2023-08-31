<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;

class LoginController extends Controller
{

    use AuthenticatesUsers, HasRoles;
    
    public function redirectTo(){

        if(Auth::user()->hasAnyRole('informatica')){
            return $this->redirectTo = route('home') ;
            
        }elseif(Auth::user()->hasAnyRole('suministros')){
            return $this->redirectTo = 'suministros' ;
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
