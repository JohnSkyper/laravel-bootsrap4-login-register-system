<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class loginController extends BaseController
{
    public function login(Request $request)
    {
        $_username=$request->input('email');
        $_password=$request->input('password');
        
       // echo "User_name=".$request->input('email');
        
        $_get_user=DB::table('hx_user')->where('email',$request->input('email'))->first();
        
         //echo $_get_user->hash_pass;
         
         
        $_hpass=$_get_user->hash_pass;
        
        $_salt=$_get_user->salt_;
        
        $_calculated_hash=hash("sha256",$_password.$_salt,false);
        
        if($_hpass==$_calculated_hash)
        {
            echo "Login successful...!";
        }
        
    }
    
    public function register(Request $request)
    {
       
        $_username=$request->input('email');
        $_password=$request->input('password');
        $_ip=$request->ip();
        
        $_mt=mt_rand(1000,9999);
        $_un=uniqid();
        $_salt=$_mt.$_un;
        
        
        
        $_hash=hash("sha256",$_password.$_salt,false);
        
        
        
        $check_email=DB::table('hx_user')->where('email',$request->input('email'))->get()->count();
        if($check_email==0)
        {
        
        $id=DB::table('hx_user')->insert(
            
                  ["email"=>$request->input('email'),"hash_pass"=>$_hash,"salt_"=>$_salt,"ip"=>$_ip]
                );
                
        if(!empty($id))
        {
            echo "Registered successfully..!<a href='login'>Click here</a> to login";
        }
        }
        else
        {
            echo "Email already exist...!<a href='register'>Go back</a>";
        }
        
        
        
        
    }
}