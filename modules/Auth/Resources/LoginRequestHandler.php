<?php
namespace Modules\Auth\Resources;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class LoginRequestHandler extends Controller
{
    protected $redirect = '/dashboard';
    protected $username = 'email';

    public function __construct()
    {

    }
    public function __invoke(Request $request, Response $response)
	{
        $checkUsername = User::where($this->username,$request->username)->first();
        if(!$checkUsername){
            $validator = [$this->username => 'Username or Password Invalid'];
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if (Hash::check($request->password,$checkUsername->password)) {
            Auth::login($checkUsername, true);
            return redirect()->intended($this->redirect);
        }else{
            dump($credentials);
        }
    }

}
