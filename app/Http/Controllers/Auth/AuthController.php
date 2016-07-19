<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/dash';

    /**
     * Where to redirect users after logout.
     *
     * @var string
     */
    protected $redirectAfterLogout = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    public function login(){
        return view('auth.login');
    }

    /**
     * Perform the login.
     *
     * @param  Request  $request
     * @return \Redirect
     */
    public function postLogin(Request $request)
    {
        // Process the request and validate the mandatory fields
        $this->validate($request, ['username' => 'required', 'password' => 'required']);
        if ($this->signIn($request)) {
            // get some values required to show data on dashboard
            $user_data = User::where('username', $request->input('username'))->first();
            session()->flash('msg','Bienvenido!');
            session(['username' => $request->input('username')]);
            //$request->session()->put('username', $request->input('username'));
            return redirect()->intended('/dash/history/me')->with('user_data', $user_data);
        }
        session()->flash('msg','Error en la autenticación');
        session(['username' => 'guest']);
        //$request->session()->put('username', 'guest');
        return redirect()->back();
    }
    /**
     * Destroy the user's current session.
     *
     * @return \Redirect
     */
    public function logout()
    {
        Auth::logout();
        session()->flash('msg','Se cerro la sesi&oacute;n correctamente, gracias por usar este sistema de gesti&oacute;n');
        session(['username' => 'guest']);
        return redirect('login');
    }

    /**
     * Attempt to sign in the user.
     *
     * @param  Request $request
     * @return boolean
     */
    protected function signIn(Request $request)
    {
        return Auth::attempt($this->getCredentials($request), $request->has('remember'));
    }
    /**
     * Get the login credentials and requirements.
     *
     * @param  Request $request
     * @return array
     */
    protected function getCredentials(Request $request)
    {
        return [
            'username'  => $request->input('username'),
            'password'  => $request->input('password')
        ];
    }

    public function gotoRegister(){
        return redirect('login');
    }
}
