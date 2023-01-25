<?php

    session_start();

    function isLogedIn(){
        if(isset($_SESSION['admin_id'])){
            return true;
        }else{
            return false;
        }
    }