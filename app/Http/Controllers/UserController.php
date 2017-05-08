<?php
namespace App\Http\Controllers;
use App\User1;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function postSignUp(Request $request)
    {
        $email = $request ['email'];
        $first_name = $request ['first_name'];
        $password = bcrypt($request ['password']);

        $user1=new User1();
        $user1->email=$email;
        $user1->first_name=$first_name;
        $user1->password=$password;

        $user1->save();

        return redirect()->back();
    }
    public function postSignIn(Request $request)
    {

    }
}