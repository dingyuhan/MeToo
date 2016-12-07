<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>北京国际数学研究中心数学数字化图书馆</title>
<link rel="stylesheet" href="/MeToo/Public/end/css/bootstrap.css">
<link href="/MeToo/Public/end/css/jquery-ui.css" rel="stylesheet">
<link href="/MeToo/Public/end/css/mystyle.css" rel="stylesheet">
<script src="/MeToo/Public/end/js/jquery.js"></script>    
<script src="/MeToo/Public/end/js/bootstrap.min.js"></script>


</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <img src="/MeToo/Public/end/images/me too .png" style="width:120px; height:60px">
    <span class="navbar-logo" > 迷途网账户管理</span>
   </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
    
    <ul class="nav navbar-nav navbar-right mr">
      <li><a href="#" class="navbar-brand"><span class="glyphicon glyphicon-star"></span>欢迎：Administrator</a></li>
      <li><a href="#" class="navbar-brand"><span class="glyphicon glyphicon-log-out"></span>退出系统</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav> 

  <div class="row">
      <div class=" col-md-2 sidebar">
        <div id="accordion">
          <h3><a href="#"><span class="glyphicon glyphicon-lock"></span>账户管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li  ><a href="user_list.html">管理员管理</a></li>
               <li  ><a href="user_add.html">添加管理员</a></li>
            <li ><a href="user_pass.html">修改密码</a></li>
            <li ><a href="user_edit.html">修改信息</a></li>
            </ul>
          <h3><a href="#"><span class="glyphicon glyphicon-file"></span>个人中心<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li><a href="users_list.html">用户管理</a></li>
            <li><a href="news_list.html">个人足迹</a></li>
              <li><a href="jifenduihuan_list.html">积分兑换</a></li>
              <li><a href="duihuanjilu_list.html">兑换记录</a></li>
            </ul>
          <h3><a href="#"><span class="glyphicon glyphicon-book"></span>推荐管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li ><a href="book_add.html">美食</a></li>
            <li><a href="book_list.html">购物</a></li>
              <li><a href="lvdian_list.html">旅店</a></li>
              <li><a href="jingdian_list.html">景点</a></li>
            </ul>
          <h3><a href="#"><span class="glyphicon glyphicon-tags"></span>攻略管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li ><a href="tag_list.html" >游记</a></li>
            <li ><a href="key_list.html" >问答</a></li>
            </ul>
            <h3><a href="#"><span class="glyphicon glyphicon-pencil"></span>动态管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li ><a href="pai_list.html" >至美一拍</a></li>
            <li ><a href="guess_list.html" >猜猜看</a></li>
            </ul>
        </div>
    	</div>
              	<div class="col-md-10 col-md-offset-2 ">
    	  <ol class="breadcrumb">
    	    <li><a href="#">首页</a></li>
    	    <li><a href="#">帐户管理</a></li>
    	    <li class="active">管理员管理</li>
  	    </ol>
    	  <div class="table-responsive ">
    	    <h3>管理员列表</h3>
    	    <table width="100%" border="0" cellspacing="0" cellpadding="0"  class="table  table-striped table-hover ">
    	      <tr>
                <th width="4%"><input type="checkbox" name="checkbox10" id="checkbox10"></th>
    	        <th width="4%"> i d</th>
    	        <th width="10%">用户名</th>
    	        <th width="10%">真实姓名</th>
    	        <th width="13%">手机号</th>
                <th width="10%">密码</th>
    	        <th width="15%">邮箱</th>
    	        <th width="10%">注册时间</th>
    	        <th width="7%">操作</th>
  	          </tr>
              <?php if(is_array($admin)): $i = 0; $__LIST__ = $admin;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><tr>
                <th width="4%"><input type="checkbox" name="checkbox10" id="checkbox10"></th>
    	        <td><?php echo ($d["id"]); ?></td>
    	        <td><?php echo ($d["username"]); ?></td>
                <td><?php echo ($d["realname"]); ?></td>
                <td><?php echo ($d["phonenum"]); ?></td>
                <td><?php echo ($d["password"]); ?></td>
                <td><?php echo ($d["email"]); ?></td>
                <td><?php echo ($d["time"]); ?></td>
    	        <td><a href="#">删除</a> <a href="#">修改</a></td>
  	          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
  	      </table>
  	    </div>
    	  <div class="input-group pull-left form">
    	    <button type="submit" class="btn btn-danger "> 删 除</button>
  	    </div>
    	  <ul class="pagination pull-right" >
    	    <li class="disabled"><a href="#">&laquo;</a></li>
    	    <li class="active"><a href="#">1</a></li>
    	    <li><a href="#">2</a></li>
    	    <li><a href="#">3</a></li>
    	    <li><a href="#">4</a></li>
    	    <li><a href="#">&raquo;</a></li>
  	    </ul>
  	  </div>



      </div>
        	
<script src="/MeToo/Public/end/js/jquery-ui.js"></script>
<script>
$( "#accordion" ).accordion({
      heightStyle: "content"
    });
</script>
</body>
</html>