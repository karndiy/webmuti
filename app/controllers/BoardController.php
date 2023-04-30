<?php

class BoardController extends Controller
{
    public function index()
    {
        $data = $this->model('Board');
        $datas = $data->getAll();
        
        $this->view('board/index',['board'=>$datas]);
    }

    public function show($id){
       // $datas = ['board'=>$id];
        $data = $this->model('Board');
        $datas = $data->getById($id);
        $this->view('board/show',['board'=>$datas]);

    }
}
