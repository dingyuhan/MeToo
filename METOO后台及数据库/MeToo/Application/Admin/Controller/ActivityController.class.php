<?php
namespace Admin\Controller;
use Think\Controller;

class ActivityController extends Controller {
    public function guess(){
        $count1 = M("guess")->count();
        $p1 = getpage($count1,5);
        $guess = M("guess")->order('id')->limit($p1->firstRow, $p1->listRows)->select();
        $this->assign('page1', $p1->show());
        $this->assign('guess',$guess);

        $count2 = M("guess_part")->count();
        $p2 = getpage($count2,5);
        $guess_part = M("guess_part")->order('id')->limit($p2->firstRow, $p2->listRows)->select();
        $this->assign('page2', $p2->show());
        $this->assign('guess_part',$guess_part);
        $this->display();
    }

    public function pk(){
        $count1 = M("pk")->count();
        $p1 = getpage($count1,5);
        $pk = M("pk")->order('id')->limit($p1->firstRow, $p1->listRows)->select();
        $this->assign('page1', $p1->show());
        $this->assign('pk',$pk);
        
        $count2 = M("pk_part")->count();
        $p2 = getpage($count2,5);
        $pk_part = M("pk_part")->order('id')->limit($p2->firstRow, $p2->listRows)->select();
        $this->assign('page2', $p2->show());
        $pk_part = M("pk_part")->select();
        $this->display();
    }

    public function addguess(){
        $time = date('Y-m-d');
        $this->assign('time',$time);
        $this->display();
    }

    public function doAddguess(){
        if(!IS_POST){
            exit("bad request");
        }
        $upload = new \Think\Upload();
        $upload->maxSize = 3145728 ; 
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg'); 
        $upload->rootPath = THINK_PATH;
        $upload->savePath = '../Public/uploads/'; 
        $upload->subName = guess;  
        $info = $upload->upload();
        if(!$info) {  
            $this->error($upload->getError());
        }else{ 
            $guess = M("guess");
            $data = $guess->create();
            if(!$data){
                $this->error($guess->getError());          
            }
            $data['picture'] = $info['picture']['savepath'].$info['picture']['savename'];
            if($guess->add($data)){
                $this->success("添加成功",U("guess"));
            }
            else{
                $this->error("添加失败");
            }
        }  
    }

    public function addpk(){
        $time = date('Y-m-d');
        $this->assign('time',$time);
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
        $upload = new \Think\Upload();
        $upload->maxSize = 3145728 ; 
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
        $upload->rootPath = THINK_PATH; 
        $upload->savePath = '../Public/uploads/'; 
        $upload->subName = 'guess'; 
        $info = $upload->upload();
        if(!$info) { 
            $this->error($upload->getError());
        }else{ 
            $guess = M("guess");
            $data = $guess->create();
            if(!$data){
                $this->error($guess->getError());          
            }
            $data['picture'] = $info['picture']['savepath'].$info['picture']['savename'];
            if($guess->save($data)){
                $this->success("修改成功",U("guess"));
            }
            else{
                $this->error("修改失败");
            }
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