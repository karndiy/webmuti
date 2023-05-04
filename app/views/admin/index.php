<?php 
$title = "Admin"; 
require_once('public/templates/header.php');?>

<?php 

function showLoginForm($error = '') {
//     // display error message if provided
    if (!empty($error)) {
       echo '<p class="error">' . $error . '</p>';
     }
    
  }

?>


<div class="container p-5">

	<h1>admin index</h1>
    <hr>
    <?php 
   // print_r($_SESSION);
    //print_r();
    //print_r($admin);
    if(!isset($data['admin'])){showLoginForm($data['admin']);}

     
    ?>
    <hr>
	
</div>

<?php require_once('public/templates/footer.php');?>

