<?php 
$title = "Admin"; 
require_once('public/templates/header.php');?>

<?php 
function showLoginForm($error = '') {
    // display error message if provided
    if (!empty($error)) {
      echo '<p class="error">' . $error . '</p>';
    }
    
    // display login form
    echo '<div class="container">';
    echo '<form method="post" action="admin/index.php">';
    echo '<label for="username">Username:</label>';
    echo '<input type="text" name="username" id="username">';
    echo '<label for="password">Password:</label>';
    echo '<input type="password" name="password" id="password">';
    echo '<input type="submit" name="login" value="Login">';
    echo '</form>';
    echo '</div>';
  }

?>


<div class="container p-5">

	<h1>admin index</h1>
    <hr>
    <?php 
    //print_r();
    //print_r($admin);
     showLoginForm($data['admin']);
    ?>
    <hr>
	
</div>

<?php require_once('public/templates/footer.php');?>

