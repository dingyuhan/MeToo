<?php
namespace Admin\Model;
use Think\Model;
class AdminUserModel extends Model {
    protected $_validate = array(
        array("username","require","用户名不能为空"),
        array("realname","require","真实姓名不能为空"),
        array("phonenum","require","手机号码不能为空"),
        array("email","require","电子邮箱不能为空"),
        array("time","require","注册时间不能为空"),
        array("pasword","require","设置密码不能为空")
    );
}