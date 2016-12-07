<?php
namespace Admin\Controller;
use Think\Controller;

class ActivityController extends Controller {
    public function guess(){
        $guess = M("guess")->select();
        $this->assign('guess',$guess);

        $guess_part = M("guess_part")->select();
        $this->assign('guess_part',$guess_part);
        $this->display();
    }

    public function pk(){
        $pk = M("pk")->select();
        $this->assign('pk',$pk);
        
        $pk_part = M("pk_part")->select();
        $this->assign('pk_part',$pk_part);
        $this->display();
    }

    public function addguess(){
        $this->display();
    }

    public function doAddguess(){
        if(!IS_POST){
            exit("bad request");
        }
        $guess = D("guess");
        if(!$guess->create()){
            $this->error($guess->getError());          
        }
        if($guess->add()){
            $this->success("添加成功",U("guess"));
        }
        else{
            $this->error("添加失败");
        }
    }

    public function addpk(){
        $this->display();
    }

    public function doAddpk(){
        if(!IS_POST){
            exit("bad request");
        }
        $pk = D("pk");
        if(!$pk->create()){
            $this->error($pk->getError());          
        }
        if($pk->add()){
            $this->success("添加成功",U("pk"));
        }
        else{
            $this->error("添加失败");
        }
    }

    public function deletepk(){
        $id = $_GET['id'];
        if(is_array($id))
        {
            foreach($id as $value)
            {
                M("pk")->delete($value);
            }
        $this->success("删除成功！");
        } 
        else{
            if(M("pk")->delete($id)){
                $this->success("删除成功！");
            }
        }
    }

    public function deletepk_part(){
        $id = $_GET['id'];
        if(is_array($id))
        {
            foreach($id as $value)
            {
                M("pk_part")->delete($value);
            }
        $this->success("删除成功！");
        } 
        else{
            if(M("pk_part")->delete($id)){
                $this->success("删除成功！");
            }
        }
    }

    public function deleteguess(){
        $id = $_GET['id'];
        if(is_array($id))
        {
            foreach($id as $value)
            {
                M("pk_part")->delete($value);
            }
        $this->success("删除成功！");
        } 
        else{
            if(M("pk_part")->delete($id)){
                $this->success("删除成功！");
            }
        }
    }

    public function deleteguess_part(){
        $id = $_GET['id'];
        if(is_array($id))
        {
            foreach($id as $value)
            {
                M("pk_part")->delete($value);
            }
        $this->success("删除成功！");
        } 
        else{
            if(M("pk_part")->delete($id)){
                $this->success("删除成功！");
            }
        }
    }

    public function modipk(){
        $id = $_GET['id'];
        $pk = D("pk")->find($id);
        $this->assign("pk",$pk);
        $this->display();
    }

    public function doModipk(){
        if (!IS_POST) {
            exit("error param");
        }
        $pk = D('pk');
        if($pk->create()&&$pk->save())
        {
            $this->success("修改成功","lists");
        }
        else{
            $this->error($pk->getError());
        }
    }

    public function modiguess(){
        $id = $_GET['id'];
        $guess = D("guess")->find($id);
        $this->assign("guess",$guess);
        $this->display();
    }

    public function doModiguess(){
        if (!IS_POST) {
            exit("error param");
        }
        $guess = D('guess');
        if($guess->create()&&$guess->save())
        {
            $this->success("修改成功","guess");
        }
        else{
            $this->error($guess->getError());
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