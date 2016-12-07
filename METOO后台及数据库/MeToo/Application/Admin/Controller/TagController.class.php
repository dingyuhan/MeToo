<?php
namespace Admin\Controller;
use Think\Controller;

class TagController extends Controller {
    public function tag(){
        $tag = M("tags");        
        $tag = $tag->select();        
        $this->assign('tag',$tag);
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];     
            $books_id = M("books_tags_relation")->where("tagid = $id")->getField('bookid',true);
            $arr['books_id'] = array('in',$books_id);
            $book = M("books")->where($arr)->select();
            $this->assign('book',$book);
        }      
        $this->display();
    }

    public function delete(){
        $id = $_GET['id'];
        if(M("tags")->delete($id)){
                $this->success("删除成功！");
        }
    }

    public function add(){
        if(!IS_POST){
            exit("bad request");
        }
        $tagModel = D("tags");
        if(!$tagModel->create()){
            $this->error($tagModel->getError());          
        }
        if($tagModel->add()){
            $this->success("添加成功",U("tag"));
        }
        else{
            $this->error("添加失败");
        }
    }

    public function modi(){
        $id = $_GET['id'];
        $booksModel = D("tags")->find($id);
        $this->assign("tags",$booksModel);
        $this->display();
    }

    public function doModi(){
        if (!IS_POST) {
            exit("error param");
        }
        $tagsModel = D('tags');
        if($tagsModel->create()&&$tagsModel->save())
        {
            $this->success("修改成功","lists");
        }
        else{
            $this->error($tagsModel->getError());
        }
    }
}