<?php

@session_start();; // start the session

// unset all session variables
$_SESSION = array();

// destroy the session
session_destroy();

// redirect to some other page///
//header("Location: ".BASEURL);
$msg = array("data"=>"logout");
$this->view('home/index',['admin'=>$msg]);
exit();

?>