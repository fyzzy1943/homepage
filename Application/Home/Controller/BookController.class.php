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
            $this->ajaxReturn($id);
        }else{
            $this->ajaxReturn('failed');
        }
    }
    
    public function UpdateRemarks(){
        $book_id=I('book_id');
        $book_remarks=I('book_remarks');
        
        $Books=M('books');
        $data['id']=$book_id;
        $data['b_remarks']=$book_remarks;
        $result=$Books->data($data)->save();
        if($result===false){
            $this->ajaxReturn('failed');
        }else{
            $this->ajaxReturn('success');
        }
    }
}