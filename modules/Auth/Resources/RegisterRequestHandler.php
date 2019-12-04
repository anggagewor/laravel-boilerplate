<?php
namespace Modules\Auth\Resources;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class RegisterRequestHandler extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
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
        $validator = Validator::make($request->all(),[
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
            return redirect()->route('auth.login');
    }
}
