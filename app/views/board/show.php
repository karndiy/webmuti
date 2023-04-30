<?php
$title = "Board";
require_once('public/templates/header.php');?>
<div class="container p-5">
<?php 
echo 'show -> board';
echo '<hr>';
//print_r($data['board']);


foreach ($data['board'] as $data) : 
    echo '<p>'.$data->title.' - '.$data->created_at.'</p>';


 endforeach;

?>
</div>

<?php require_once('public/templates/footer.php');?>