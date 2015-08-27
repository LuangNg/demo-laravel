<?php

namespace App\Http\Controllers\Authority;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{   
    /*
    |--------------------------------------------------------------------------
    | Sign in & registration Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */
    
    /**
     * <p>class default construct function
     */
    public function __construct()
    {
        
    }
    
    /**
     * 
     * @param array $data
     * @return
     */
    protected function validator(array $data)
    {
        
    }
    
    /**
     * <p>verify that if the user is exsit in database
     * @return type
     */
    protected function verifyUser($account, $password)
    {
        $user = DB::select('select * from account where acct_name = ? and password = ?', 
                                [$account, $password]);
        return $user;
    }
    
    /**
     * 
     * @param $request
     * @return string
     */
    public function register(Request $request)
    {
       return 'success'; 
    }
    
    /**
     * 
     * @param array $data
     * @return string
     */
    public function signIn(Request $request)
    {
        $account = $request->input('account');
        $password= $request->input('password');
        $user = verifyUser($account, $password);
        if(is_null($user)){
            return 'failed';
        }else{
            return 'Sign in success';
        }
        
    }
    
    /**
     * 
     */
    public function __destruct()
    {
        
    }
}