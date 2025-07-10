<?php 
    class BaseUser {
        // properties
        protected static $count=0; // to count users
        const APP_NAME= 'TechApp'."<br>";
        // methods
        public static function register() {
            self::$count += 1;
            echo "User Registered in ".static::class."<br>";
        }
        public static function getCount() {
            echo "number of registred users are:".self::$count."<br>";
        }
    }
    class Admin  extends BaseUser{
        const ROLE ="Admin";
    }
    class Client  extends BaseUser{
        const ROLE ="Client";
    }
    echo BaseUser::APP_NAME;
    Admin::register();
    Client::register();
    Admin::register();
    echo BaseUser::getCount();
?>
