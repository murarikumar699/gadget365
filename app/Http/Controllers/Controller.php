<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use  App\Models\User;
use  App\Models\UserDevice;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function checkOtp($email,$otp){
        try{           
            $user = User::where('email',$email)->first();           
            if(!$user){
                return [
                    'status' => false,
                    'errors' => 'Invalid Email Address'
                ];
            }

            if($user->otp != $otp){
                return[
                    'status' => false,
                    'errors' => 'Invalid OTP'
                ];
            }
     
            User::where('id',$user->id)->update(['is_email_verified' => true]);
            $token = $user->createToken('token')->accessToken;
            return [
                'status' => true,                       
                'success' => 'OTP Verified Successfully',
                'token' => $token,    
            ];
        }catch (\Exception $e) {
            return [
                'status' => false,
                'errors' => 'Something went wrong'
            ];
        }
    }

    public function verify($email){
        try{           
            $user = User::where('email',$email)->first();           
            if(!$user){
                return [
                    'status' => false,
                    'errors' => 'Invalid Email Address'
                ];
            }

            User::where('id',$user->id)->update(['is_email_verified' => true]);
            $token = $user->createToken('token')->accessToken;
            return [
                'status' => true,                       
                'success' => 'OTP Verified Successfully',
                'token' => $token,    
            ];
        }catch (\Exception $e) {
            return [
                'status' => false,
                'errors' => 'Something went wrong'
            ];
        }
    }

    public function createOtp(){
        return mt_rand(2000,9000);
    }
}
