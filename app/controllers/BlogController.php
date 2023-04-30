<?php

class BlogController extends Controller
{

    public function index()
    {
        $blog = $this->model('Blog');
        $l_blog = $blog->getAll();
        $this->view('blog/index',['blog'=>$l_blog]);
    }

    public function show($name){
        $blog = $this->model('Blog');
        $l_blog = $blog->getByTitleName($name);
        $this->view('blog/show',['blog'=>$l_blog]);

    }

    public function page($id){

        $blog = $this->model('Blog');
        $l_blog = $blog->getById($id);

        $this->view('blog/page',['blog'=>$l_blog]);
    }

    public function restr($str){
        return str_replace("-"," ",$str);
    }

    public function decodename($str){
        $encoded_string = $str;
        $decoded_string = urldecode($encoded_string);
        return $decoded_string;
   }
}
