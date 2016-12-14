<?php
namespace Admin\Controller;
use Think\Controller;

class AdminController extends Controller {
    public function login(){
        if(IS_POST){
            $adminUsersModel = M('adminUser'); 
            $condition = array(  
                "username" => I("post.username"),
                "password" => I("post.password")
            );
            $result = $adminUsersModel->where($condition)->count();
            if($result>0){  
                session("username",I("post.username"));
                $this->success("登录成功",U("Index/index"));
            }
            else{
                $this->error("用户名或密码不正确");
            }
        }
        else{
            $this->display();
        }
    }

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

    public function lists(){       
        $count = M("adminUser")->count();
        $p = getpage($count,5);
        $admin = M("adminUser")->order('id')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('admin',$admin);
        $this->assign('page', $p->show());
        $this->display();
    }

    public function delete(){
        $id = $_GET['id'];
        if(is_array($id))
        {
            foreach($id as $value)
            {
                M("adminUser")->delete($value);
            }
            $this->success("删除成功！");
        } 
        else{
            if(M("adminUser")->delete($id)){
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
}