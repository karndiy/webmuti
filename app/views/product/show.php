<?php 
$title = "Product"; 
require_once('public/templates/header.php');?>

<div class="container p-5">
	<main>
	<!-- <div>
	    <h1><?php echo $data['product']->name; ?></h1>
		<p><?php echo $data['product']->description; ?></p>
		<p>Price: <?php echo $data['product']->price; ?></p>
		
	</div> -->
	

	<div class="row">
        <div class="col-md-6">

			<div class="card mb-6 box-shadow">
					<img class="card-img-top img-thumbnail" src="<?php echo BASEURL.'/public/img/p/'.$data['product']->image; ?>" style="height: 300px; width: auto; display: block;" alt="Card image cap">
					<div class="card-body"></div>
			</div>
          <!-- <img src="<?php echo BASEURL.'/public/img/p/'.$data['product']->image; ?>" alt="Product Image" style="height: 350px; width: auto; display: block;" class="product-img"> -->
        </div>
        <div class="col-md-6">
          <h1><?php echo $data['product']->name; ?></h1>
          <p class="lead"><?php echo $data['product']->description; ?></p>
          <p><strong>Price:</strong> <?php echo $data['product']->price; ?></p>
		  <p class="card-text"><small class="text-muted"><a href="<?php echo BASEURL; ?>/product/show/<?php echo $data['product']->id; ?>"><?php echo $data['product']->name;?></a></small></p>
          <form>
            <div class="form-group">
              <label for="quantity">Quantity</label>
              <input type="number" class="form-control" id="quantity" min="1" max="10" value="1">
            </div>
            <button type="submit" class="btn btn-primary">Add to Cart</button>
          </form>
        </div>
      </div>



	</main>
</div>
	
<?php require_once('public/templates/footer.php');?>

