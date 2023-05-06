<?php

class ShorturlController extends Controller
{
    public function index()
    {

       // 
      $shorturls  = array('msg','test'); // $shorturl->getAll();
        



        if (isset($_POST['url'])) {
          //  print_r($_POST);
          if (filter_var($_POST['url'], FILTER_VALIDATE_URL)) {
            $m_shorturl = $this->model('Shorturl');
            $db_crud = $this->model('Crud');
            // Generate shortened URL         
           $genshort_url = $m_shorturl->genurl($_POST['url'],$db_crud); 
        
        
            $this->view('shorturl/show', ['shorturl' =>$genshort_url]);
          }else{
            //echo 'Invalid URL';
            $error = 'Invalid URL';
            $this->view('shorturl/index', ['msg' => $error]);

          }
        }           

      
        if (isset($_GET['url'] ) ) {
            //print_r($_GET['url']);
            $geturl = explode("/",$_GET['url']);          
           
            if(strlen($geturl[1])>0){              

                $short_url = $geturl[1];
                $m_shorturl = $this->model('Shorturl');
                $db_crud = $this->model('Crud');
                $resurl = $m_shorturl->geturl($short_url,$db_crud);
                //print_r($resurl);
                if(count($resurl)>0){
                 
                   header('Location: '.$resurl['url']);
                   exit();
                  

                }else{
                    //echo 'no data';
                   // $error = 'no data';
                  $this->view('shorturl/index', ['msg' =>$shorturls ]);
                }
                
            }else{
                $error = 'no data';
               $this->view('shorturl/index', ['msg' => $error]);

            }
       
            

        }
      //  $this->view('shorturl/index', ['shorturl' => $shorturls]);

    }

    public function show($data){
        if(isset($data)){
            $this->view('shorturl/show',$data);
        }else{
            $this->view('shorturl/show');
        }      
 
     }
}