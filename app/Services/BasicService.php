<?php

namespace App\Services;

class BasicService
{
    /*
    |--------------------------------------------------------------------------
    | basic service
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */
    
    /**
     * 
     * @param type $username
     * @param type $password
     * @return type
     */
    public function verifyUser($username, $password){
        $user = null;
        
        return $user;
    }
    
    /**
     * 
     * @return session
     */
    public function createSesssion(){
        $session;
        return $session;
    }
    
    /**
     * destroy session
     */
    public function destroySession(){
        
    }
}
