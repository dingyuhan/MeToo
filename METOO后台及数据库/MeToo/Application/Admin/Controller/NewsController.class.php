<?php
namespace Admin\Controller;
use Think\Controller;
class NewsController extends Controller {
    public function __construct(){
        parent::__construct();
        if(!isLogin()){
            $this->error("请先登录",U("Admin/login"));
        }
    }
    public function add(){
        $this->display();
    }

    public function doAdd(){
        if(!IS_POST){
            exit("bad request");
        }
        $newsModel = D("news");
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
        $newsModel = D("news");
        $news = $newsModel->select();
        $this->assign('news',$news);
        $this->display();
    }

    public function delete(){
        $id = $_GET['newsId'];
        if(is_array($id))
        {
            foreach($id as $value)
            {
                M("News")->delete($value);
            }  
            $this->success("删除成功！");
        } 
        else{
            if(M("News")->delete($id)){
                $this->success("删除成功！");
            }
        }       
    }

    public function modi(){
        $newsModel = D("news");
        $id = $_GET['id'];
        $news = $newsModel->find($id);
        $this->assign('news',$news);
        $this->display();
    }

    public function doModi() {
        if (!IS_POST) {
            exit("error param");
        }
        $newsModel = D("News");
        if ($newsModel->create() && $newsModel->save()) {
            $this->success("修改成功!", U('lists'));
        }
        else {
            $this->error($newsModel->getError());
        }

    }
}