<?php

class HomeController extends Controller
{
    public function index()
    {
        $blog = $this->model('Blog');
        $l_blog = $blog->getAll();

        $board = $this->model('Board');
        $l_board = $board->getAll();

        $data = ['blog'=> $l_blog,  'board'=>$l_board];


        $this->view('home/index',$data);
    }

    public function restr($str){
        return str_replace("-"," ",$str);
    }
}
