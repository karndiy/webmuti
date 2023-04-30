<?php


class AdminController extends Controller
{

    function handleRequest() {

        //   // check if user is already logged in
      

        if (isset($_POST['action']) && $_POST['action'] == 'edit') {
          $user = $this->model('Admin');
          $users =   $user->getUserById($_POST['id']);
          $this->view('admin/show',['user' => $users]);
          //$this->view->showEditUserForm($user);

        } else if (isset($_POST['action']) && $_POST['action'] == 'save') {
          $user =  $this->model('Admin');
          $up_user = $user->updateUser($_POST['id'], $_POST['name'], $_POST['email']);
          $users = $user->getUsers();
          $this->view('admin/show',['users'=> $users]); //->showUsers($users);
        } else {
          $user =  $this->model('Admin');
          $users = $user->getUsers();
          $this->view('admin/show',['users'=> $users]);
          //$this->view->showUsers($users);
        }
    }


    


    public function index()
    {

        if(isset($_SESSION['user'])){
            //     // show dashboard or redirect to main page
                   //header('Location: dashboard.php');
                   $msg = array('msg'=>$_SESSION['user']);
          
                 $this->view('admin/dashboard',['admin'=>$msg]);
                 exit;
        
        }

        if(isset($_POST['login']) ){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $user =  $this->model('Admin');

            $user_data = $user->getUserByUsername($username);
            

            $hpassword = hash('sha256', $password);
           // print_r( $user_data);
          
            if ($user_data && $hpassword === $user_data->password) {
            // save user ID in session variable
            $_SESSION['user'] = array(   'uid'=>$user_data->id,
                                            'username'=>$user_data->username,
                                            'role'=>$user_data->role,
                                        );
            
          
            
            // show dashboard or redirect to main page
            //header('Location: dashboard.php');            
            $this->view('admin/dashboard');
            exit;
            } else {
            // display error message
            
           // $this->view->showLoginForm('Invalid username or password');
             $erorr = array('msg'=>'Invalid username or password');
          
             $this->view('admin/index',['admin'=>$erorr]);
            exit;
            }
       }else{

        $this->view('admin/login');

       }
           
       
    }

    public function logout(){

        $this->view('admin/logout');


    }
}



       
       