<?php
namespace Admin\Controller;
use Think\Controller;

class StrategyController extends Controller {
    public function question(){
        $question = M("question")->select();
        $this->assign('question',$question);
        $answer = M("answer")->select();
        $this->assign('answer',$answer);
        $this->display();
    }

    public function travelnote(){
        $travelnote = M("travelnote")->select();
        $this->assign('travelnote',$travelnote);
        $this->display();
    }

    // public function record(){
    //     $record = M("record")->select();
    //     $this->assign('record',$record);
    //     $this->display();
    // }

    public function add(){
        $this->display();
    }

    public function doAdd(){
        if(!IS_POST){
            exit("bad request");
        }
        $adminModel = D("AdminUser");
        if(!$adminModel->create()){
            $this->error($adminModel->getError());          
        }
        if($adminModel->add()){
            $this->success("添加成功",U("lists"));
        }
        else{
            $this->error("添加失败");
        }
    }

    public function deletequestion(){
        $id = $_GET['id'];
        if(is_array($id))
        {
            foreach($id as $value)
            {
                M("question")->delete($value);
            }
        $this->success("删除成功！");
        } 
        else{
            if(M("question")->delete($id)){
                $this->success("删除成功！");
            }
        }
    }

    public function deleteanswer(){
        $id = $_GET['id'];
        if(is_array($id))
        {
            foreach($id as $value)
            {
                M("answer")->delete($value);
            }
        $this->success("删除成功！");
        } 
        else{
            if(M("answer")->delete($id)){
                $this->success("删除成功！");
            }
        }
    }

    public function deletetravelnote(){
        $id = $_GET['id'];
        if(is_array($id))
        {
            foreach($id as $value)
            {
                M("travelnote")->delete($value);
            }
        $this->success("删除成功！");
        } 
        else{
            if(M("travelnote")->delete($id)){
                $this->success("删除成功！");
            }
        }
    }

    public function modi(){
        $id = $_GET['id'];
        $adminModel = D("adminUser")->find($id);
        $this->assign("admin",$adminModel);
        $this->display();
    }

    public function doModi(){
        if (!IS_POST) {
            exit("error param");
        }
        $adminModel = D('adminUser');
        if($adminModel->create()&&$adminModel->save())
        {
            $this->success("修改成功","lists");
        }
        else{
            $this->error($adminModel->getError());
        }
    }

    public function edits(){
        $username = I("Session.username");
        $user = M("adminUser")->where("username='$username'")->find();
        $this->assign("users",$user);
        $this->display();
    }

    public function doEdit(){
        if(!IS_POST){
            exit("error param");
        }
        $adminUsersModel = D("adminUser");
        if($adminUsersModel->create() !==false && $adminUsersModel->save()!==false)
        {
            //var_dump(a);exit;
            $this->success("修改成功",U("lists"));
        }
        else{
            //var_dump(b);exit;
            $this->error($adminUsersModel->getError());
        }
    }

    public function pass(){
        $username = I("Session.username");
        $user = M("adminUser")->where("username='$username'")->find();
        $this->assign("users",$user);
        $this->display();
    }

    public function doPass(){
        if(!IS_POST){
            exit("error param");
        }
        $adminModel = D("adminUser");
        var_dump($_POST);exit;
        if($adminModel->create()&&$adminModel->save())
        {
            //var_dump(a);exit;
            $this->success("修改成功",U("lists"));
        }
        else{
            //var_dump(b);exit;
            $this->error($adminModel->getError());
        }
    }
}