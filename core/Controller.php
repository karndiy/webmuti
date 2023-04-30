<?php

class Controller
{
    public function view($view, $data = [])
    {       
        $file = 'app/views/' . $view . '.php';

        if (file_exists($file)) {
            require_once $file;          
        } else {
            //throw new Exception("view file not found: $file");
            $this->view('home/index');           
            exit;
        }
    }

    public function model($model)
    {      

        $file = 'app/models/' . $model . '.php';
        if (file_exists($file)) {
            require_once $file;
            return new $model;
        } else {
            //throw new Exception("Model file not found: $file");
            $this->view('home/index');            
            exit;
        }
    }
}
