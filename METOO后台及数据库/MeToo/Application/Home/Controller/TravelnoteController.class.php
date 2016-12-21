<?php
namespace Home\Controller;
use Think\Controller;

class TravelnoteController extends Controller {
    public function travelnote(){
        $id = $_GET['id'];
        $travelnote = M("travelnote")->find($id);
        $this->assign('travelnote',$travelnote);

        $count = M("count")->select();
        $this->assign('count',$count);
        $this->display();
    }

    public function count(){
  $count=D("count");
  $count1=$count->find(3);
  $num=$count1["num"];
  $newnum=$num+1;
  
  
  $data=array();
  $data['num'] = $newnum;
  if ($count->where("id=3")->data($data)->save ()) {
   $this->assign('num',$newnum);
  }else {
   $this->error ( L ( '_UPDATE_FAIL_' ) );
  }
  

 }




    public function writetravelnote(){
        // $writetravelnote = M("writetravelnote")->select();
        // $this->assign('writetravelnote',$writetravelnote);
        $this->display();
    }

    public function travellist(){
        $travelnote1 = M("travelnote")->order("time desc")->limit(0,2)->select();
        $this->assign('travelnote1',$travelnote1);
        $travelnote2 = M("travelnote")->where("recommend=1")->limit(0,2)->select();
        $this->assign('travelnote2',$travelnote2);
        $this->display();
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

    public function traveln(){
        $this->display();
    }

    public function dotraveln(){
        if(!IS_POST){
            exit("bad request");
        }
        //var_dump();
        $travelnote = D("travelnote");
        $data['title'] = I("post.title");
        $data['first'] = I("post.first");
        $data['second'] = I("post.second");
        $data['third'] = I("post.third");
        //$data['time'] = ;
        $data['time'] = date('Y-m-d');
        if(!$travelnote->create($data)){
            $this->error($travelnote->getError());          
        }
        if($travelnote->add($data)){
            $this->success("添加成功",U("writetravenote"));
        }
        else{
            $this->error("添加失败");
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

}