<?php
namespace Home\Controller;
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
}