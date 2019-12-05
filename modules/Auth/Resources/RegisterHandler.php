<?php
namespace Modules\Auth\Resources;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response;
use App\User;
use Illuminate\Support\Facades\Auth;
class RegisterHandler extends Controller
{
    public function __construct(){}
    /**
     * __invoke
     *
     * @param \Illuminate\Http\Request $request
     * @param \Illuminate\Support\Facades\Response $response
     * @return void
     */
    public function __invoke(Request $request, Response $response)
  	{
          if(Auth::check()){
              return redirect()->intended('/dashboard');
          }
          return view('auth::register');
      }
}
