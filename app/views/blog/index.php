<?php
$title = "blog";
require_once('public/templates/header.php');?>
<div class="container p-5">

	<h1>Our Blog</h1>
	<div class="row">
        <?php foreach ($data['blog'] as $blog) : 
        $img = explode(",", $blog->data);
        //echo '<p>'.$blog->id .'-'. $blog->name.'-'.$img[0].'</p>';
            ?>           

            <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top img-thumbnail" src="<?php echo $img[0]; ?>" onerror="{IMG_ERR}" style="height: 300px; width: auto; display: block;" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $blog->name;?></h5>
                            
                            <p class="card-text"><small class="text-muted"><a href="<?php echo BASEURL; ?>/blog/show/<?php echo $blog->name; ?>"><?php echo $blog->name;?></a></small></p>
                        </div>
                    </div>
            </div>

        <?php endforeach;?>

    </div>
</div>

<?php require_once('public/templates/footer.php');?>