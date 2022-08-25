<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use RTippin\Messenger\Facades\Messenger;
// use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

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
    protected string $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Log the user out of the application.
     *
     * @param  Request  $request
     * @return RedirectResponse|JsonResponse
     */

     public function authenticate(Request $request)
    {
     
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($this->credentials())) {
            return redirect()->intended('messenger');
        }
    }
   
    protected function credentials(Request $request)
      {
        
        if($request->get('name')){
          $user = DB::table('users')->where('name',$request->get('name'))->first();
          
          // dump(Crypt::decryptString($user->password));
          // return ['email'=>$user->email,'password'=> Crypt::decryptString($user->password)];
          return ['email'=>$user->email,'password'=> '123456789'];
        }
        else if(is_numeric($request->get('email'))){
          return ['phone'=>$request->get('email'),'password'=>$request->get('password')];
        }
        elseif (filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {
          return ['email' => $request->get('email'), 'password'=>$request->get('password')];
        }
      }

    public function logout(Request $request)
    {
        if ($request->user()) {
            Messenger::setProviderToOffline($request->user());
        }

        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/');
    }
    
}
