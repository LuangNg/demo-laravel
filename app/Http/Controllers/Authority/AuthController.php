<?php

namespace App\Http\Controllers\Authority;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AuthController extends Controller {
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
    public function __construct() {
        
    }

    /**
     * 
     * @param array $data
     * @return
     */
    protected function validator(array $data) {
        
    }

    /**
     * <p>verify that if the user is exsit in database
     * @return type
     */
    protected function verifyUserIfExist($username, $password) {
//        $user = DB::select('select * from account where acct_name = ? and password = ?', 
//                                [$account, $password]);
        $user = DB::table('account')
                ->where('username', '=', $username)
                ->get();
        return $user;
    }

    /**
     * 
     * @param $request
     * @return string
     */
    public function register(Request $request) {
        //get date from front-end form
        $username = $request->input('username');
        $password = $request->input('password');
        $confirmPassword = $request->input('confirmPassword');
        $email = $request->input('email');
        $agreement = $request->input('agreement');

        //check if agree with the protocal
        if (!isset($agreement) || $agreement != '1') {
            return 'pls read the protocal.';
        }

        if ($password != $confirmPassword) {
            return 'Confirm password does not match password you input.';
        }

        //verify if the account has exist
        $user = $this->verifyUserIfExist($username, $password);
        if (count($user) > 0) {
            return 'The account does exsit, pls go to sign in.';
        }

        $timestamp = time();
        //write register data into table accout
        DB::table('account')->insert(
                [
                    'ac_id' => sha1($timestamp),
                    'username' => $username,
                    'password' => sha1($password),
                    'email' => $email,
                    'status' => '1',
                    'created_time' => $timestamp,
                    'role_type' => '1',
                    'last_signin_time' => $timestamp,
                    'last_signin_ip' => '127.0.0.1',
                ]
        );
        return 'success';
    }

    /**
     * 
     * @param array $data
     * @return string
     */
    public function signIn(Request $request) {
        $username = $request->input('username');
        $password = $request->input('password');
        $user = DB::table('account')
                ->where('username', '=', $username)
                ->where('password', '=', sha1($password))
                ->get();
        if (count($user) == 1) {
            return 'Welcome '.$user[0]->nickname;
        } else {
            return 'failed';
        }
    }

    /**
     * 
     */
    public function __destruct() {
        
    }

}
