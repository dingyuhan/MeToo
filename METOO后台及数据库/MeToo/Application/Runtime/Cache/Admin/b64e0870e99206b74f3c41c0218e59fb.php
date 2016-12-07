<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>迷途网</title>
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
            <li><a href="/MeToo/index.php/Admin/Admin/lists">管理员管理</a></li>
            <li><a href="/MeToo/index.php/Admin/Admin/add">添加管理员</a></li>
            <li><a href="/MeToo/index.php/Admin/Admin/edit">修改信息</a></li>
          </ul>
          <h3><a href="#"><span class="glyphicon glyphicon-file"></span>个人中心<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li><a href="/MeToo/index.php/Admin/Personal/lists">用户管理</a></li>
            <li><a href="/MeToo/index.php/Admin/Personal/footprint">个人足迹</a></li>
              <li><a href="/MeToo/index.php/Admin/Personal/exchange">积分兑换</a></li>
              <li><a href="/MeToo/index.php/Admin/Personal/record">兑换记录</a></li>
            </ul>
          <h3><a href="#"><span class="glyphicon glyphicon-book"></span>推荐管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li><a href="/MeToo/index.php/Admin/Recommend/food">美食</a></li>
            <li><a href="/MeToo/index.php/Admin/Recommend/shopping">购物</a></li>
            <li><a href="/MeToo/index.php/Admin/Recommend/hotel">旅店</a></li>
            <li><a href="/MeToo/index.php/Admin/Recommend/scenery">景点</a></li>
          </ul>
          <h3><a href="#"><span class="glyphicon glyphicon-tags"></span>攻略管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li><a href="/MeToo/index.php/Admin/Strategy/travelnote">游记</a></li>
            <li><a href="/MeToo/index.php/Admin/Strategy/question">问答</a></li>
          </ul>
            <h3><a href="#"><span class="glyphicon glyphicon-pencil"></span>动态管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li><a href="/MeToo/index.php/Admin/Activity/pk">至美一拍</a></li>
            <li><a href="/MeToo/index.php/Admin/Activity/guess">猜猜看</a></li>
            </ul>
        </div>
    	</div>
          <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>迷途网账户管理</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link href="css/jquery-ui.css" rel="stylesheet">
<link href="css/mystyle.css" rel="stylesheet">
<script src="js/jquery.js"></script>    
<script src="js/bootstrap.min.js"></script>


</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
   <img src="images/me too .png" style="width:120px; height:60px">
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
    	    <li class="active">个人信息修改</li>
  	    </ol>
    	  <div class="table-responsive ">
    	    <h3>个人信息修改</h3>
    	    <div class="list-group ">
    	      <div class="list-group-item">
    	        <form role="form" >
    	          <div class="input-group"> <span class="input-group-addon">用<img src="images/em.png" alt="" width="6" height="20">户<img src="images/em.png" alt="" width="6" height="20">名：</span>
    	            <input type="text" class="form-control" placeholder="administrator">
  	            </div>
    	          <div class="input-group "> <span class="input-group-addon" for="inputWarning1">真实姓名：</span>
    	            <input type="text" class="form-control" placeholder="张黎明" id="input">
  	            </div>
    	          <div class="input-group"> <span class="input-group-addon">手机号码：</span>
    	            <input type="text" class="form-control" placeholder="13025458799">
  	            </div>
    	          <div class="input-group"> <span class="input-group-addon">电子邮箱：</span>
    	            <input type="text" class="form-control" placeholder="86823499@qq.com">
  	            </div>
    	          <div class="input-group"> <span class="input-group-addon">注册时间：</span>
    	            <input type="text" class="form-control" placeholder="2014-05-22" >
  	            </div>
    	          <div class="input-group">
    	            <button type="submit" class="btn btn-primary "> &nbsp;&nbsp;保<img src="images/em.png" alt="" width="20" height="20">存&nbsp;&nbsp;</button>
  	            </div>
  	          </form>
  	        </div>
  	      </div>
  	    </div>
  	  </div>
	</div>
        	
	
</div>
<script src="js/jquery-ui.js"></script>
<script>
$( "#accordion" ).accordion({
      heightStyle: "content"
    });
</script>
</body>
</html>


      </div>
        	
<script src="/MeToo/Public/end/js/jquery-ui.js"></script>
<script>
$( "#accordion" ).accordion({
      heightStyle: "content"
    });
</script>
</body>
</html>