<?php
namespace Modules\Auth\Resources;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response;
use App\User;
use Illuminate\Support\Facades\Auth;
class LogoutHandler extends Controller
{
  public function __construct(){}
  public function __invoke(Request $request, Response $response){
    Auth::logout();
    return redirect()->route('auth.login');
  }
}
