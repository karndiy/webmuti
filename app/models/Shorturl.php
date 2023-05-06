<?php 
    class Shorturl
    {
        private $db;
        private $table = 'shorturls';     

        public function __construct()
        {
            $this->db = new Database(DB_NAME);
          
           
        }

        public function geturl($shorturl,$db_crud)
         {
            $condition = " where short_url = '$shorturl'";
            $res =  $db_crud->readAll('shorturls',$condition );
           // print_r($res );

            if(count($res)>0){
                $value = array(
                    'url'=> $res[0]['url'],
                    'short_url'=>$res[0]['short_url'],
                   );

            }else{
                $value =  $res;

            }           
           
            return    $value;
        }
        public function genurl($url=null,$db_crud)        
{
            $short_url = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 6);
            

           $value = array(
            'url'=> $_POST['url'],
            'short_url'=>$short_url
           );
            $db_crud->create('shorturls',$value); 
            
            return $value  ; 
        }

    }


?>