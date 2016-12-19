<?php
namespace Admin\Controller;
use Think\Controller;

class StrategyController extends Controller {
    public function question(){
        $count1 = M("question")->count();
        $p1 = getpage($count1,5);
        $question = M("question")->order('id')->limit($p1->firstRow, $p1->listRows)->select();
        $this->assign('page1', $p1->show());
        $this->assign('question',$question);

        $count2 = M("answer")->count();
        $p2 = getpage($count2,5);
        $answer = M("answer")->order('id')->limit($p2->firstRow, $p2->listRows)->select();
        $this->assign('page2', $p2->show());
        $this->assign('answer',$answer);
        $this->display();
    }

    public function travelnote(){
        $count = M("travelnote")->count();
        $p = getpage($count,5);
        $travelnote = M("travelnote")->order('id')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('travelnote',$travelnote);
        $this->assign('page', $p->show());
        $this->assign('travelnote',$travelnote);
        $this->display();
    }

    public function moditravelnote(){
        $id = $_GET['id'];
        $travelnote = D("travelnote")->find($id);
        $this->assign("travelnote",$travelnote);
        $this->display();
    }

    public function doModitravelnote(){
        if (!IS_POST) {
            exit("error param");
        }
        $travelnote = D('travelnote');
        if($travelnote->create()&&$travelnote->save())
        {
            $this->success("修改成功","travelnote");
        }
        else{
            $this->error($travelnote->getError());
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
}