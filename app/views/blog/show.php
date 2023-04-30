<?php
$name = $this->restr($data['blog'][0]->name);
// $title = "Manga: ".str_replace("-"," ",$data['blog'][0]->name);
$title = "Manga: ".$name;
require_once('public/templates/header.php');?>
<div class="container p-5 ">
   <?php
  //print_r($data['blog']);
   // foreach ($data['blog'] as $blog) : 
   //    echo '<p>'.$blog->ep.' - '.$blog->name.'</p>';
   // endforeach;
   ?>
<div class="my-1 p-1 justify-content-center">
<p class="h1 justify-content-center"> <?='Manga - '.str_replace("-"," ",$data['blog'][0]->name);?></p>
   </div>
<main class="container justify-content-center">  
</main>

<div class="card bg-dark">
  <div class="card-body p-3">
    <div style="float: right; margin-right: 0em;">
      <button class="btn btn-sm btn-light"><i class="mdi mdi-sort-variant"></i>
      </button>
    </div> 
    <h4 class="svelte-1w8b2xy"><i class="bx bx-list-ol"></i> Chapter List    </h4> 
     <br style="clear: both; line-height: 100%;"> 
          <div class="row g-3">                 
                    <?php foreach (array_reverse($data['blog']) as $data) : ?>
                      <div class="col-12 col-lg-4 mt-0 px-1">
                      <a href="<?php echo BASEURL; ?>/blog/page/<?php echo $data->id.'/'.$data->name.'-'.$data->ep;?>" target="_parent" class="svelte-1w8b2xy">
                        <div class="bg-gradient-light rounded py-1 px-2 mb-1">
                            <b class="svelte-1w8b2xy">Ch.<?php echo 'ep: '.$this->decodename($data->ep);?></b> - <span class="chapter-name    svelte-1w8b2xy"><?php echo 'ep: '.$this->decodename($data->ep);?></span> 
                              <div class="sub-info svelte-1w8b2xy">
                              <b class="svelte-1w8b2xy">By</b> Admin
                                <!-- <div class="float-right mr-2" title="2023-04-24 01:39:35">
                                  <b class="svelte-1w8b2xy">on</b> Today
                                </div> -->
                              </div>
                        </div>
                        </a>
                        </div>
                    <?php endforeach;?>
                  
            </div>
  </div>
</div>





</div>
<?php require_once('public/templates/footer.php');?>