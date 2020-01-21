<?php

class AdminBase{

    public static function getRight(){
            if($_SERVER['PHP_AUTH_USER'] == 'admin'){
                return true;
            }
             else{
                return false;
            } 
    }
}