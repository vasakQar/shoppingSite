<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin\ContactInfo\ContacUs;
use App\Models\Admin\ContactInfo\HeaderInfo;
use App\Models\Admin\ContactInfo\SocialSite;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use View;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $contact     = ContacUs::all();
        $socialSites = SocialSite::all();
        $headerInfo  = HeaderInfo::all();
        View::share('contact', $contact);
        View::share('socialSites',$socialSites);
        View::share('headerInfo',$headerInfo);
        $this->middleware('guest')->except('logout');
    }

    protected function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('/shop/index');
    }
}
