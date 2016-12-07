<?php
namespace Admin\Model;
use Think\Model;
class BooksModel extends Model {
    protected $_validate = array(
        array("title","require","题目不能为空"),
        array("author","require","作者不能为空"),
        array("ISSN","require","ISSN不能为空"),
        array("ISBN","require","ISBN不能为空"),
        array("publishtime","require","出版时间不能为空"),
        array("publisher","require","出版社不能为空")
        //array("content","require","确认密码不能为空")
    );
}