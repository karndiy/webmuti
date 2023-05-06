<?php 
$title = "Show Shorturls"; 
require_once('public/templates/header.php');?>


<div class="container p-5">
<h1>show index</h1>

<?php 

//print_r($data);
$url = $data['shorturl']['url'];
$short_url = $data['shorturl']['short_url'];
echo   'copy link this.-> <a href="'.$url.'" target="_blank">'.BASEURL.'/shorturl/'.$short_url.'</a>';

?>
</div>

<?php require_once('public/templates/footer.php');?>