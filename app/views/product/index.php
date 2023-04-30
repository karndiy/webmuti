<?php
$title = "Product"; 
require_once('public/templates/header.php');?>

<div class="container p-5">

	<h1>Our Products</h1>
	<div class="row">
	
		<?php foreach ($data['products'] as $product) : ?>
		<div class="col-md-4">
			<div class="card mb-4 box-shadow">
				<img class="card-img-top img-thumbnail" src="<?php echo BASEURL.'/public/img/p/'.$product->image; ?>" style="height: 300px; width: auto; display: block;" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title"><?php echo $product->name;?></h5>
					<p class="card-text"><?php echo $product->price;?></p>
					<p class="card-text"><small class="text-muted"><a href="<?php echo BASEURL; ?>/product/show/<?php echo $product->id; ?>"><?php echo $product->name;?></a></small></p>
			    </div>
		    </div>
			</div>
		<?php endforeach; ?>
	
	</div>
</div>

<?php require_once('public/templates/footer.php');?>


