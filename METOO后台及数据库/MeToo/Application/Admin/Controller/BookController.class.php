<?php
namespace Admin\Controller;
use Think\Controller;

class BookController extends Controller {
    public function add(){
        $this->display();
    }

    public function doAdd(){
        if(!IS_POST){
            exit("bad request");
        }
        $newsModel = D("books");
        if(!$newsModel->create()){
            $this->error($newsModel->getError());          
        }
        if($newsModel->add()){
            $this->success("添加成功",U("lists"));
        }
        else{
            $this->error("添加失败");
        }
    }

    public function lists(){
        $book = M("books");        
        $book_list = $book->select();        
        $this->assign('book_list',$book_list);
        $this->display();
    }

    public function delete(){
        $id = $_GET['id'];
        if(is_array($id))
        {
            foreach($id as $value)
            {
                M("books")->delete($value);
            }
        $this->success("删除成功！");
        } 
        else{
            if(M("books")->delete($id)){
                $this->success("删除成功！");
            }
        }
    }

    public function modi(){
        $id = $_GET['id'];
        $booksModel = D("books")->find($id);
        $this->assign("books",$booksModel);
        $this->display();
    }

    public function doModi(){
        if (!IS_POST) {
            exit("error param");
        }
        $booksModel = D('books');
        if($booksModel->create()&&$booksModel->save())
        {
            $this->success("修改成功","lists");
        }
        else{
            $this->error($booksModel->getError());
        }
    }
}