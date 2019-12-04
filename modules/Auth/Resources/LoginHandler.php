<?php
namespace Modules\Auth\Resources;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response;
use App\User;
class LoginHandler extends Controller
{
    protected $redirect = '/dashboard';
    public function __construct()
    {

    }
    public function __invoke(Request $request, Response $response)
	{
        return view('auth::login');
    }

    private function checkUsername($username){}
    private function checkPassword($password){}
}
