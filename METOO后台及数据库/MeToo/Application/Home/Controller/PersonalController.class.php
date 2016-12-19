<?php
namespace Home\Controller;
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
        $count = M("footprint")->count();
        $p = getpage($count,9);
        $footprint = M("footprint")->order('id')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('footprint',$footprint);
        $this->assign('page', $p->show());
        $this->display();
    }

    public function footprintadd(){
        if(!IS_POST){
            exit("bad request");
        }
        $upload = new \Think\Upload();  //实例化上传类
        $upload->maxSize = 3145728 ;    //设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg'); //设置附件上传类型
        $upload->rootPath = THINK_PATH;     //设置附件上传根目录
        $upload->savePath = '../Public/uploads/';   //设置附件上传（子）目录
        $upload->subName = 'footprint'; 
        $info = $upload->upload();
        if(!$info) {        //上传错误提示错误信息
            $this->error($upload->getError());
        }else{              //上传成功
            $footprint = M("footprint");
            $data = $footprint->create();
            if(!$data){
                $this->error($footprint->getError());          
            }
            $data['album'] = $info['album']['savepath'].$info['album']['savename'];
            if($footprint->add($data)){
                $this->success("添加成功",U("footprint"));
            }
            else{
                $this->error("添加失败");
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

    public function photo(){
        $id = I("get.id");
        $footprint = M("footprint")->where("id=$id")->find();
        $this->assign('footprint',$footprint);
        // $count = M("photo")->count();
        // $p = getpage($count,9);
        $photo = M("photo")->where("albumid=$id")->select();
        $this->assign('photo',$photo);
        // $this->assign('page', $p->show());
        $this->display();
    }
}