<?php
namespace Modules\Auth\Resources;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response;
use App\User;
use Illuminate\Support\Facades\Auth;
class LoginHandler extends Controller
{
    protected $redirect = '/dashboard';
    public function __construct(){}
    public function __invoke(Request $request, Response $response)
  	{
          if(Auth::check()){
              return redirect()->intended('/dashboard');
          }
          return view('auth::login');
    }
}
