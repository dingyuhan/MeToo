<?php
namespace Admin\Controller;
use Think\Controller;

class PersonalController extends Controller {
    public function lists(){
        $count = M("personal")->count();
        $p = getpage($count,5);
        $personal = M("personal")->order('id')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('personal',$personal);
        $this->assign('page', $p->show());
        $this->display();
    }

    public function exchange(){
        $count = M("exchange")->count();
        $p = getpage($count,5);
        $exchange = M("exchange")->order('id')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('exchange',$exchange);
        $this->assign('page', $p->show());
        $this->assign('exchange',$exchange);
        $this->display();
    }

    public function record(){
        $count = M("record")->count();
        $p = getpage($count,5);
        $record = M("record")->order('id')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('record',$record);
        $this->assign('page', $p->show());
        $this->assign('record',$record);
        $this->display();
    }

    public function footprint(){
        $count = M("footprint")->count();
        $p = getpage($count,5);
        $footprint = M("footprint")->order('id')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('footprint',$footprint);
        $this->assign('page', $p->show());
        $this->assign('footprint',$footprint);
        $this->display();
    }

    public function deletepersonal(){
        $id = $_GET['id'];
        if(is_array($id))
        {
            foreach($id as $value)
            {
                M("personal")->delete($value);
            }
            $this->success("删除成功！");
        } 
        else{
            if(M("personal")->delete($id)){
                $this->success("删除成功！");
            }
        }
    }

    public function addexchange(){
        $this->display();
    }

    public function doAddexchange(){
        if(!IS_POST){
            exit("bad request");
        }
        $upload = new \Think\Upload();
        $upload->maxSize = 3145728 ; 
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg'); 
        $upload->rootPath = THINK_PATH;
        $upload->savePath = '../Public/uploads/'; 
        $upload->subName = exchange;  
        $info = $upload->upload();
        if(!$info) {  
            $this->error($upload->getError());
        }else{ 
            $exchange = M("exchange");
            $data = $exchange->create();
            if(!$data){
                $this->error($exchange->getError());          
            }
            $data['thumb'] = $info['thumb']['savepath'].$info['thumb']['savename'];
            if($exchange->add($data)){
                $this->success("添加成功",U("exchange"));
            }
            else{
                $this->error("添加失败");
            }
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
        $upload = new \Think\Upload();
        $upload->maxSize = 3145728 ; 
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
        $upload->rootPath = THINK_PATH; 
        $upload->savePath = '../Public/uploads/'; 
        $upload->subName = 'exchange'; 
        $info = $upload->upload();
        if(!$info) { 
            $this->error($upload->getError());
        }else{ 
            $exchange = M("exchange");
            $data = $exchange->create();
            if(!$data){
                $this->error($exchange->getError());          
            }
            $data['thumb'] = $info['thumb']['savepath'].$info['thumb']['savename'];
            if($exchange->save($data)){
                $this->success("修改成功",U("exchange"));
            }
            else{
                $this->error("修改失败");
            }
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
}