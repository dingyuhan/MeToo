<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $travelnote = M("travelnote")->order("time desc")->limit(0,4)->select();
        $this->assign('travelnote',$travelnote);
        $guess1 = M("guess")->order('time desc')->limit(0,1)->select();
        $this->assign('guess1',$guess1);
        $guess2 = M("guess")->order('time desc')->limit(1,1)->select();
        $this->assign('guess2',$guess2);
        $guess3 = M("guess")->order('time desc')->limit(2,1)->select();
        $this->assign('guess3',$guess3);
        $this->display();
    }

    public function register(){
        if(!IS_POST){
            exit("bad request");
        }
        $upload = new \Think\Upload();  //实例化上传类
        $upload->maxSize = 3145728 ;    //设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg'); //设置附件上传类型
        $upload->rootPath = THINK_PATH;     //设置附件上传根目录
        $upload->savePath = '../Public/uploads/';   //设置附件上传（子）目录
        $upload->subName = 'register'; 
        $info = $upload->upload();
        if(!$info) {        //上传错误提示错误信息
            $this->error($upload->getError());
        }else{              //上传成功
            $personal = M("personal");
            $data = $personal->create();
            if(!$data){
                $this->error($personal->getError());          
            }
            $data['userpic'] = $info['userpic']['savepath'].$info['userpic']['savename'];
            if($personal->add($data)){
                $this->success("添加成功",U("index"));
            }
            else{
                $this->error("添加失败");
            }
        }
    }

    public function login(){
        if(IS_POST){
            $personal = M('personal'); 
            $condition = array(  
                "username" => I("post.username"),
                "password" => I("post.password")
            );
            //var_dump($condition);exit;
            $result = $personal->where($condition)->count();
            if($result>0){  
                session("username",I("post.username"));
                $this->success("登录成功",U("Index/index"));
            }
            else{
                $this->error("用户名或密码不正确");
            }
        }
    }

}