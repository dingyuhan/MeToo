<?php
namespace Admin\Controller;
use Think\Controller;

class PersonalController extends Controller {
    public function lists(){
        $personal = M("personal")->select();
        $this->assign('personal',$personal);
        $this->display();
    }

    public function exchange(){
        $exchange = M("exchange")->select();
        $this->assign('exchange',$exchange);
        $this->display();
    }

    public function record(){
        $record = M("record")->select();
        $this->assign('record',$record);
        $this->display();
    }

    public function footprint(){
        $footprint = M("footprint")->select();
        $this->assign('footprint',$footprint);
        $this->display();
    }

    public function addexchange(){
        $this->display();
    }

    public function doAddexchange(){
        if(!IS_POST){
            exit("bad request");
        }
        $exchange = D("exchange");
        if(!$exchange->create()){
            $this->error($exchange->getError());          
        }
        if($exchange->add()){
            $this->success("添加成功",U("exchange"));
        }
        else{
            $this->error("添加失败");
        }
    }

    public function deleteexchange(){
        $id = $_GET['id'];
        if(is_array($id))
        {
            foreach($id as $value)
            {
                M("exchange")->delete($value);
            }
        $this->success("删除成功！");
        } 
        else{
            if(M("exchange")->delete($id)){
                $this->success("删除成功！");
            }
        }
    }

    public function deletefoot(){
        $id = $_GET['id'];
        if(is_array($id))
        {
            foreach($id as $value)
            {
                M("footprint")->delete($value);
            }
        $this->success("删除成功！");
        } 
        else{
            if(M("footprint")->delete($id)){
                $this->success("删除成功！");
            }
        }
    }

    public function modiexchange(){
        $id = $_GET['id'];
        $exchange = D("exchange")->find($id);
        $this->assign("exchange",$exchange);
        $this->display();
    }

    public function doModiexchange(){
        if (!IS_POST) {
            exit("error param");
        }
        $exchange = D('exchange');
        if($exchange->create()&&$exchange->save())
        {
            $this->success("修改成功","exchange");
        }
        else{
            $this->error($exchange->getError());
        }
    }

    public function deleterecord(){
        $id = $_GET['id'];
        if(is_array($id))
        {
            foreach($id as $value)
            {
                M("record")->delete($value);
            }
        $this->success("删除成功！");
        } 
        else{
            if(M("record")->delete($id)){
                $this->success("删除成功！");
            }
        }
    }

    public function modirecord(){
        $id = $_GET['id'];
        $record = D("record")->find($id);
        $this->assign("record",$record);
        $this->display();
    }

    public function doModirecord(){
        if (!IS_POST) {
            exit("error param");
        }
        $record = D('record');
        if($record->create()&&$record->save())
        {
            $this->success("修改成功","record");
        }
        else{
            $this->error($record->getError());
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