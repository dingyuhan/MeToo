<?php
namespace Admin\Model;
use Think\Model;
class TagsModel extends Model {
    protected $_validate = array(
        //array("posttime","require","发布时间不能为空"),
        //array("author","require","作者不能为空"),
        array("tagname","require","标签名不能为空")
    );
}