<?php
namespace Admin\Controller;
use Think\Controller;

class KeyController extends Controller {
    public function key(){
        $key = M("keywords");        
        $key = $key->select();        
        $this->assign('key',$key);
        $this->display();
    }

    public function delete(){
        $id = $_GET['id'];
        if(M("keywords")->delete($id)){
            $this->success("删除成功！");
        }
    }

    public function add(){
        if(!IS_POST){
            exit("bad request");
        }
        $tagModel = D("keywords");
        if(!$tagModel->create()){
            $this->error($tagModel->getError());          
        }
        if($tagModel->add()){
            $this->success("添加成功",U("key"));
        }
        else{
            $this->error("添加失败");
        }
    }

    public function modi(){
        $id = $_GET['id'];
        $booksModel = D("keywords")->find($id);
        $this->assign("keywords",$booksModel);
        $this->display();
    }

    public function doModi(){
        if (!IS_POST) {
            exit("error param");
        }
        $tagsModel = D('keywords');
        if($tagsModel->create()&&$tagsModel->save())
        {
            $this->success("修改成功","key");
        }
        else{
            $this->error($tagsModel->getError());
        }
    }
}