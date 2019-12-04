<?php
namespace Modules\Dashboard\Resources;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response;
use App\User;
use Illuminate\Support\Facades\Auth;
class DashboardHandler extends Controller{

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function __invoke(Request $request, Response $response)
	{
        return view('dashboard::index');
    }
}
