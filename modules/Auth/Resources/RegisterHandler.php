<?php
namespace Modules\Auth\Resources;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response;
use App\User;
class RegisterHandler extends Controller
{
    public function __construct()
    {

    }
    /**
     * __invoke
     *
     * @param \Illuminate\Http\Request $request
     * @param \Illuminate\Support\Facades\Response $response
     * @return void
     */
    public function __invoke(Request $request, Response $response)
	{
        return view('auth::register');
    }
}
