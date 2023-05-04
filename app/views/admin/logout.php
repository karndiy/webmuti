<?php

@session_start();; // start the session

// unset all session variables
$_SESSION = array();

// destroy the session
session_destroy();

// redirect to some other page///
$msg = array("data"=>"logout");
header("Location: ".BASEURL);

// $this->view('home/index',['admin'=>$msg]);
// exit();

?>