<?php 
$title = "Home"; 
require_once('public/templates/header.php');?>

<div class="container p-3">
<main>
    <h1>Welcome to our online store!</h1>
	<p>Click <a href="<?php echo BASEURL; ?>/product">here</a> to see our products.</p>
    <hr>
    <br>

</main>

<div class="row  ">
      <div class="col-md-9 ">
        <div class="row mt-2 px-2">
        <h2 class="text-body-emphasis">Blog</h2>
        <p>Blog-Manga Last recent</p>
        <!-- <ul class="list-unstyled ps-0"> -->
      
        <?php foreach ($data['blog'] as $data_blog) : ?>         
          <?php $img =explode(",",$data_blog->data) ;?>
            <div class="px-1 col-4 col-md-3 col-lg-2">
                  <div class="card mb-3 " style="max-width: 176px; "> 
                    <a href="<?php echo BASEURL;?>/blog/show/<?=$data_blog->name; ?>" alt="">
                      <img class="card-img-top img-fluid" src="<?=$img[0];?>"  width="100%" style="max-height: 182px; " onerror="this.onerror=null;this.src='<?=IMG_ERR;?>';" alt="<?php echo$this->restr($data_blog->name);?>" loading="lazy">
                    </a> 
                      <div class="card-body px-2 pt-2 pb-1">
                        <a href="<?php echo BASEURL;?>/blog/show/<?=$data_blog->name; ?>">
                          <div class="mb-0 chapter-name txt-elip-1 ">
                          <?php echo$this->restr($data_blog->name) ;?>
                          </div>                          
                        </a> 
                        <div class="row provider-info ">
                          <div class="col-12 col-sm-6 txt-elip-1">
                            <a href="#" class="text-white">admin</a>
                          </div> 
                          <div class="col-12 col-sm-6">
                            <!-- 14 hours ago -->
                          </div>
                        </div>
                      </div>
                  </div>
              </div>

          <?php endforeach;?>  
        </div>
        </div>    

      <div class="col-md-3 ">
        <h2 class="text-body-emphasis">web bpoard</h2>
        <p>Recent update.</p>
        <ul class="list-unstyled ps-0 ">
        <?php foreach ($data['board'] as $data_board) : ?>
          <li>
            <a class="icon-link mb-1" href="<?php echo BASEURL;?>/board/show/<?=$data_board->id;?>" target="_blank">
            
              <?php echo $this->restr($data_board->title).' - '.$data_board->created_at; ?>
            </a>
          </li>
          <?php endforeach;?>
        </ul>
      </div>
    </div>
</div>



<?php require_once('public/templates/footer.php');?>
