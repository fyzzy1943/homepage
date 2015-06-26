<?php
namespace Home\Controller;
use Think\Controller;

class BookController extends Controller{
    public function insert(){
        $book_name=I('book_name');
//         $this->ajaxReturn('failed');

        $Books=M('books');
        $data['b_name']=$book_name;
        $id=$Books->data($data)->add();
        
        if($id>0){
            $this->ajaxReturn('success');
        }else{
            $this->ajaxReturn('failed');
        }
    }
}