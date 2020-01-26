<?php

class AdminRouter {

    function checkAdmin() {
        session_start();
        if ($_SESSION['admin']) {
            return true;
        } else {
            die("you have no rights");
        }
    }

}