<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use  App\Models\User;
use  App\Models\UserDevice;

class AuthController extends Controller
{

    public function socialLogin(Request $request){
        $validator = Validator::make(request()->all(), [          
            'social_login_type' => 'required',           
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->messages()->all()
            ], 400);
        }
        $login_type = request()->social_login_type;        

        $validator = Validator::make(request()->all(), [          
            'name' => 'required',
            'email' => 'required|email',
            $login_type => 'required',
            'lat' => 'required',
            'long' => 'required',
            'address' => 'required',
            'device_type' => 'required',
            'device_token' => 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->messages()
            ], 400);
        }

        try{
            $user = User::where('email',$request->email)->where('is_email_verified',true)->first();
            if(!$user){
                $user = User::create(request()->except('device_type','device_token'));
                UserDevice::create(['user_id' => $user->id,'device_type' => $request->device_type,'device_token' => $request->device_token]);
                User::where('id',$user->id)->update(['is_email_verified' => true]);
            }            
            $token = $user->createToken('token')->accessToken;
            return response()->json([
                'status' => true,            
                'success' => 'Login Successfully',
                'token' => $token,
            ], 200);
        }catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'errors' => 'Something went wrong'
            ], 400);
        }
    }

}
