<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
   <a class="navbar-brand" href="<?=BASEURL;?>">HOME</a>
   <!--  <a class="navbar-brand btn btn-primary" href="<?=BASEURL;?>login" >LOGIN</a> -->
     <!-- <a href="<?=BASEURL;?>register" ><button type="button" class="btn btn-warning">Sign-up</button></a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <!-- <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5> -->
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
      
        <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home">Home</a>
          </li>
          <?php if(!isset($_SESSION['user'])): ?>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?=BASEURL;?>/admin">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?=BASEURL;?>/register">Sign-up</a>
           </li>

          <?php else: ?>  

            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?=BASEURL;?>/admin">Profile</a>
            </li>   
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?=BASEURL;?>/product/chat">Chat</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?=BASEURL;?>/admin/logout">Logout</a>
          </li>  

          <?php endif; ?>    
          
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?=BASEURL;?>/blog">blog</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?=BASEURL;?>/board">board</a>
          </li> 
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li> <hr class="dropdown-divider"> </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
        </ul>

        <div class="custom-control custom-switch">
  <input type="checkbox" class="custom-control-input" id="dark-mode-toggle">
  <label class="custom-control-label" for="dark-mode-toggle">Dark Mode</label>
</div>
       
      </div>
    </div>
  </div>
</nav>