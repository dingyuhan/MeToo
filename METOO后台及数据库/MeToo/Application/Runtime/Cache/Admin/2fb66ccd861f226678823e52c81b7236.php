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
            <li><a href="/MeToo/index.php/Admin/Admin/modi">修改信息</a></li>
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
          
    	<div class="col-md-10 col-md-offset-2 ">
    	  <ol class="breadcrumb">
    	    <li><a href="#">首页</a></li>
    	    <li><a href="#">活动管理</a></li>
    	    <li class="active">至美一拍</li>
  	    </ol>
    	  <div class="table-responsive ">
    	    <h3 style="display:inline;">至美一拍</h3>
          <form action="/MeToo/index.php/Admin/Activity/addpk" method="post" style="display:inline; margin-left:1100px;">
            <button type="submit" class="btn btn-warning">添加至美一拍</button>
          </form>
          <table width="100%" border="0" cellspacing="0" cellpadding="0"  class="table  table-striped table-hover " style="margin-top:20px;">
    	      <tr>
    	        <th width="5%"> i d</th>
    	        <th width="20%">主题</th>
              <th width="20%">时间</th>
    	        <th width="8%">操作</th>
  	        </tr>
            <?php if(is_array($pk)): $i = 0; $__LIST__ = $pk;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pk): $mod = ($i % 2 );++$i;?><tr>	
    	        <td><?php echo ($pk["id"]); ?></td>
              <td><?php echo ($pk["theme"]); ?></td>
              <td><?php echo ($pk["time"]); ?></td>
    	        <td><a href="deletepk/id/<?php echo ($pk["id"]); ?>">删除</a> <a href="modipk/id/<?php echo ($pk["id"]); ?>">修改</a></td>
  	        </tr><?php endforeach; endif; else: echo "" ;endif; ?> 	     
  	      </table>
  	    </div>
    	  <div class="input-group pull-left form">  
  	    </div>
    	  <ul class="pagination pull-right" >
    	    <li class="disabled"><a href="#">&laquo;</a></li>
    	    <li class="active"><a href="#">1</a></li>
    	    <li><a href="#">2</a></li>
    	    <li><a href="#">3</a></li>
    	    <li><a href="#">4</a></li>
    	    <li><a href="#">&raquo;</a></li>
  	    </ul>
        <div style="float:right">
        	<div class="table-responsive ">
    	    <h3>发表至美一拍</h3>
    	    <table width="100%" border="0" cellspacing="0" cellpadding="0"  class="table  table-striped table-hover ">
    	      <tr>
    	       <th width="5%"> i d</th>
    	        <th width="5%">主题id</th>
    	        <th width="10%">美照</th>
                <th width="5%">用户id</th>
                 <th width="10%">发表时间</th>
    	        <th width="8%">操作</th>
  	        </tr>
            <?php if(is_array($pk_part)): $i = 0; $__LIST__ = $pk_part;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pk_part): $mod = ($i % 2 );++$i;?><tr>
    	          <td><?php echo ($pk_part["id"]); ?></td>
                <td><?php echo ($pk_part["themeid"]); ?></td>
                <td><img src="images/head.gif" style="height:30px;width:60px"></td>
    	          <td><?php echo ($pk_part["userid"]); ?></td>
                <td><?php echo ($pk_part["pktime"]); ?></td>
    	        <td><a href="deletepk_part/id/<?php echo ($pk_part["id"]); ?>">删除</a></td>
  	        </tr><?php endforeach; endif; else: echo "" ;endif; ?>  	     
  	      </table>
  	    </div>
        <div class="input-group pull-left form">  
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