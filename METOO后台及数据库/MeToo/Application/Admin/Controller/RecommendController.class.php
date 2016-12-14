<?php
namespace Admin\Controller;
use Think\Controller;

class RecommendController extends Controller {
    public function food(){
        $count = M("food")->count();
        $p = getpage($count,5);
        $food = M("food")->order('id')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('food',$food);
        $this->assign('page', $p->show());
        $this->assign('food',$food);
        $this->display();
    }

    public function hotel(){
        $count = M("hotel")->count();
        $p = getpage($count,5);
        $hotel = M("hotel")->order('id')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('hotel',$hotel);
        $this->assign('page', $p->show());
        $this->assign('hotel',$hotel);
        $this->display();
    }

    public function scenery(){
        $count = M("scenery")->count();
        $p = getpage($count,5);
        $scenery = M("scenery")->order('id')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('scenery',$scenery);
        $this->assign('page', $p->show());
        $this->assign('scenery',$scenery);
        $this->display();
    }

    public function shopping(){
        $count = M("shopping")->count();
        $p = getpage($count,5);
        $shopping = M("shopping")->order('id')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('shopping',$shopping);
        $this->assign('page', $p->show());
        $this->assign('shopping',$shopping);
        $this->display();
    }

    public function addfood(){
        $time = date('Y-m-d');
        $this->assign('time',$time);
        $this->display();
    }

    public function doAddfood(){
        if(!IS_POST){
            exit("bad request");
        }
        $upload = new \Think\Upload();
        $upload->maxSize = 3145728 ; 
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg'); 
        $upload->rootPath = THINK_PATH;
        $upload->savePath = '../Public/uploads/'; 
        $upload->subName = food;  
        $info = $upload->upload();
        if(!$info) {  
            $this->error($upload->getError());
        }else{ 
            $food = M("food");
            $data = $food->create();
            if(!$data){
                $this->error($food->getError());          
            }
            $data['foodpic'] = $info['foodpic']['savepath'].$info['foodpic']['savename'];
            if($food->add($data)){
                $this->success("添加成功",U("food"));
            }
            else{
                $this->error("添加失败");
            }
        }    
    }

    public function addhotel(){
        $time = date('Y-m-d');
        $this->assign('time',$time);
        $this->display();
    }

    public function doAddhotel(){
        if(!IS_POST){
            exit("bad request");
        }
        $upload = new \Think\Upload();
        $upload->maxSize = 3145728 ; 
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg'); 
        $upload->rootPath = THINK_PATH;
        $upload->savePath = '../Public/uploads/'; 
        $upload->subName = hotel;  
        $info = $upload->upload();
        if(!$info) {  
            $this->error($upload->getError());
        }else{ 
            $hotel = M("hotel");
            $data = $hotel->create();
            if(!$data){
                $this->error($hotel->getError());          
            }
            $data['hotelpic'] = $info['hotelpic']['savepath'].$info['hotelpic']['savename'];
            if($hotel->add($data)){
                $this->success("添加成功",U("hotel"));
            }
            else{
                $this->error("添加失败");
            }
        }    
    }

    public function addshopping(){
        $time = date('Y-m-d');
        $this->assign('time',$time);
        $this->display();
    }

    public function doAddshopping(){
        if(!IS_POST){
            exit("bad request");
        }
        $upload = new \Think\Upload();
        $upload->maxSize = 3145728 ; 
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg'); 
        $upload->rootPath = THINK_PATH;
        $upload->savePath = '../Public/uploads/'; 
        $upload->subName = shopping;  
        $info = $upload->upload();
        if(!$info) {  
            $this->error($upload->getError());
        }else{ 
            $shopping = M("shopping");
            $data = $shopping->create();
            if(!$data){
                $this->error($shopping->getError());          
            }
            $data['shoppingpic'] = $info['shoppingpic']['savepath'].$info['shoppingpic']['savename'];
            if($shopping->add($data)){
                $this->success("添加成功",U("shopping"));
            }
            else{
                $this->error("添加失败");
            }
        }    
    }

    public function addscenery(){
        $time = date('Y-m-d');
        $this->assign('time',$time);
        $this->display();
    }

    public function doAddscenery(){
        if(!IS_POST){
            exit("bad request");
        }
        $upload = new \Think\Upload();
        $upload->maxSize = 3145728 ; 
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg'); 
        $upload->rootPath = THINK_PATH;
        $upload->savePath = '../Public/uploads/'; 
        $upload->subName = scenery;  
        $info = $upload->upload();
        if(!$info) {  
            $this->error($upload->getError());
        }else{ 
            $scenery = M("scenery");
            $data = $scenery->create();
            if(!$data){
                $this->error($scenery->getError());          
            }
            $data['scenerypic'] = $info['scenerypic']['savepath'].$info['scenerypic']['savename'];
            if($scenery->add($data)){
                $this->success("添加成功",U("scenery"));
            }
            else{
                $this->error("添加失败");
            }
        }    
    }

    public function modifood(){
        $id = $_GET['id'];
        $food = D("food")->find($id);
        $this->assign("food",$food);
        $this->display();
    }

    public function doModifood(){
        if (!IS_POST) {
            exit("error param");
        }
        $upload = new \Think\Upload();
        $upload->maxSize = 3145728 ; 
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
        $upload->rootPath = THINK_PATH; 
        $upload->savePath = '../Public/uploads/'; 
        $upload->subName = 'food'; 
        $info = $upload->upload();
        if(!$info) { 
            $this->error($upload->getError());
        }else{ 
            $food = M("food");
            $data = $food->create();
            if(!$data){
                $this->error($food->getError());          
            }
            $data['foodpic'] = $info['foodpic']['savepath'].$info['foodpic']['savename'];
            if($food->save($data)){
                $this->success("修改成功",U("food"));
            }
            else{
                $this->error("修改失败");
            }
        }
    }

    public function deletefood(){
        $id = $_GET['id'];
        if(is_array($id))
        {
            foreach($id as $value)
            {
                M("food")->delete($value);
            }
        $this->success("删除成功！");
        } 
        else{
            if(M("food")->delete($id)){
                $this->success("删除成功！");
            }
        }
    }

    public function modihotel(){
        $id = $_GET['id'];
        $hotel = D("hotel")->find($id);
        $this->assign("hotel",$hotel);
        $this->display();
    }

    public function doModihotel(){
        if (!IS_POST) {
            exit("error param");
        }
        $upload = new \Think\Upload();
        $upload->maxSize = 3145728 ; 
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
        $upload->rootPath = THINK_PATH; 
        $upload->savePath = '../Public/uploads/'; 
        $upload->subName = 'hotel'; 
        $info = $upload->upload();
        if(!$info) { 
            $this->error($upload->getError());
        }else{ 
            $hotel = M("hotel");
            $data = $hotel->create();
            if(!$data){
                $this->error($hotel->getError());          
            }
            $data['hotelpic'] = $info['hotelpic']['savepath'].$info['hotelpic']['savename'];
            if($hotel->save($data)){
                $this->success("修改成功",U("hotel"));
            }
            else{
                $this->error("修改失败");
            }
        }
    }

    public function deletehotel(){
        $id = $_GET['id'];
        if(is_array($id))
        {
            foreach($id as $value)
            {
                M("hotel")->delete($value);
            }
        $this->success("删除成功！");
        } 
        else{
            if(M("hotel")->delete($id)){
                $this->success("删除成功！");
            }
        }
    }

    public function modishopping(){
        $id = $_GET['id'];
        $shopping = D("shopping")->find($id);
        $this->assign("shopping",$shopping);
        $this->display();
    }

    public function doModishopping(){
        if (!IS_POST) {
            exit("error param");
        }
        $upload = new \Think\Upload();
        $upload->maxSize = 3145728 ; 
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
        $upload->rootPath = THINK_PATH; 
        $upload->savePath = '../Public/uploads/'; 
        $upload->subName = 'shopping'; 
        $info = $upload->upload();
        if(!$info) { 
            $this->error($upload->getError());
        }else{ 
            $shopping = M("shopping");
            $data = $shopping->create();
            if(!$data){
                $this->error($shopping->getError());          
            }
            $data['shoppingpic'] = $info['shoppingpic']['savepath'].$info['shoppingpic']['savename'];
            if($shopping->save($data)){
                $this->success("修改成功",U("shopping"));
            }
            else{
                $this->error("修改失败");
            }
        }
    }

    public function deleteshopping(){
        $id = $_GET['id'];
        if(is_array($id))
        {
            foreach($id as $value)
            {
                M("shopping")->delete($value);
            }
        $this->success("删除成功！");
        } 
        else{
            if(M("shopping")->delete($id)){
                $this->success("删除成功！");
            }
        }
    }

    public function modiscenery(){
        $id = $_GET['id'];
        $scenery = D("scenery")->find($id);
        $this->assign("scenery",$scenery);
        $this->display();
    }

    public function doModiscenery(){
        if (!IS_POST) {
            exit("error param");
        }
        $upload = new \Think\Upload();
        $upload->maxSize = 3145728 ; 
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
        $upload->rootPath = THINK_PATH; 
        $upload->savePath = '../Public/uploads/'; 
        $upload->subName = 'scenery'; 
        $info = $upload->upload();
        if(!$info) { 
            $this->error($upload->getError());
        }else{ 
            $scenery = M("scenery");
            $data = $scenery->create();
            if(!$data){
                $this->error($scenery->getError());          
            }
            $data['scenerypic'] = $info['scenerypic']['savepath'].$info['scenerypic']['savename'];
            if($scenery->save($data)){
                $this->success("修改成功",U("scenery"));
            }
            else{
                $this->error("修改失败");
            }
        }
    }

    public function deletescenery(){
        $id = $_GET['id'];
        if(is_array($id))
        {
            foreach($id as $value)
            {
                M("scenery")->delete($value);
            }
        $this->success("删除成功！");
        } 
        else{
            if(M("scenery")->delete($id)){
                $this->success("删除成功！");
            }
        }
    }
}