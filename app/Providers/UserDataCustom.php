<?php

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View; 

class User {

    public $username;
    
    public $email;

    function __construct($username, $email) {
        $this->username = $username;
        $this->email = $email;
    }
}

class UserDataCustom extends ServiceProvider{

    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // 
        $user = new User('rico', 'luis@gmail.com');
        View::share(['user'=> $user]);
    }




     
}