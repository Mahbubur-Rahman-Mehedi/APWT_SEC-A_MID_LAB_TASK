<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Validator;
use App\User;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function verify(Request $req){

        //if(strlen($req->email)<50 && $req->email != '' && $req->password != '')

        $validation = Validator::make($req->all(), [
                'email'=> 'required|max:49',
                'password'=> 'required|min:8|max:20'
             ]);

             if($validation->fails()){
                    return redirect('/login')->with('errors', $validation->errors());
                //     return back()
                //             ->with('errors', $validation->errors())
                //             ->withInput();
                }

    }

}
