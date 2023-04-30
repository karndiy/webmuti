<?php
    $name = $data['blog'][0]->name;
    $ep = $this->decodename($data['blog'][0]->ep);
    $imgs = explode(",",$data['blog'][0]->data);

$title = "Page: ".$name.'-'.$ep;
require_once('public/templates/header.php');?>

<div class="container p-5">

    <?php 

        //print_r($data['blog']);
    
            foreach ($imgs as $img) : 
                echo '<img src="'.$img.'" class="img-fluid" alt="Responsive image" width="100%" onerror="{IMG_ERR}" loading="lazy">';
            endforeach;
    ?>
</div>


<?php require_once('public/templates/footer.php');?>