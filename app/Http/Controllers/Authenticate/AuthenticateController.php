<?php

namespace App\Http\Controllers\Authenticate;

use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Models\Authenticate;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use JWTAuth;
use JWTAuthException;
use Console;

class AuthenticateController extends Controller
{
	public function login(Request $request){
				
		//$email = $request->input('email');
		//$password = $request->input('password');
		
		//if(($email == 'm@m.com') AND ($password=='123')){
								
			$credentials = $request->only('email', 'password');
			$token = null; 
			 
			try {
			   if (!$token = JWTAuth::attempt($credentials)) {
					return response()->json(['error' => 'Invalid Login Credentials'], 422);
			   }
			} catch (JWTAuthException $e) {
					return response()->json(['error' => 'Failed To Create Token'], 500);
			}
			
			return response()->json(compact('token'));
		//}
		
		//return response()->json(['error' => 'Invalid Login Credentials'], 401);
	}
	
	public function getAuthUser(Request $request){
        $user = JWTAuth::toUser($request->token);
        return response()->json(['result' => $user]);
    }
}