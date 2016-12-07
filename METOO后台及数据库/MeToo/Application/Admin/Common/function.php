<?php
function isLogin() {
    if(!isset($_SESSION['username']) || $_SESSION['username']==""){
        return false;
    }
    return true;
}