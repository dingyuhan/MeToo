<?php
namespace Admin\Controller;
use Think\Controller;

class RecommendController extends Controller {
    public function food(){
        $food = M("food")->select();
        $this->assign('food',$food);
        $this->display();
    }

    public function hotel(){
        $hotel = M("hotel")->select();
        $this->assign('hotel',$hotel);
        $this->display();
    }

    public function scenery(){
        $scenery = M("scenery")->select();
        $this->assign('scenery',$scenery);
        $this->display();
    }

    public function shopping(){
        $shopping = M("shopping")->select();
        $this->assign('shopping',$shopping);
        $this->display();
    }

    public function addfood(){
        $this->display();
    }

    public function doAddfood(){
        if(!IS_POST){
            exit("bad request");
        }
        $food = M("food");
        if(!$food->create()){
            $this->error($food->getError());          
        }
        if($food->add()){
            $this->success("添加成功",U("food"));
        }
        else{
            $this->error("添加失败");
        }
    }

    public function addhotel(){
        $this->display();
    }

    public function doAddhotel(){
        if(!IS_POST){
            exit("bad request");
        }
        $hotel = D("hotel");
        if(!$hotel->create()){
            $this->error($hotel->getError());          
        }
        if($hotel->add()){
            $this->success("添加成功",U("hotel"));
        }
        else{
            $this->error("添加失败");
        }
    }

    public function addshopping(){
        $this->display();
    }

    public function doAddshopping(){
        if(!IS_POST){
            exit("bad request");
        }
        $shopping = D("shopping");
        if(!$shopping->create()){
            $this->error($shopping->getError());          
        }
        if($shopping->add()){
            $this->success("添加成功",U("shopping"));
        }
        else{
            $this->error("添加失败");
        }
    }

    public function addscenery(){
        $this->display();
    }

    public function doAddscenery(){
        if(!IS_POST){
            exit("bad request");
        }
        $scenery = D("scenery");
        if(!$scenery->create()){
            $this->error($scenery->getError());          
        }
        if($scenery->add()){
            $this->success("添加成功",U("scenery"));
        }
        else{
            $this->error("添加失败");
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
        $food = D('food');
        if($food->create()&&$food->save())
        {
            $this->success("修改成功","food");
        }
        else{
            $this->error($food->getError());
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
        $hotel = D('hotel');
        if($hotel->create()&&$hotel->save())
        {
            $this->success("修改成功","hotel");
        }
        else{
            $this->error($hotel->getError());
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
        $shopping = D('shopping');
        if($shopping->create()&&$shopping->save())
        {
            $this->success("修改成功","shopping");
        }
        else{
            $this->error($shopping->getError());
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
        $scenery = D('scenery');
        if($scenery->create()&&$scenery->save())
        {
            $this->success("修改成功","scenery");
        }
        else{
            $this->error($scenery->getError());
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