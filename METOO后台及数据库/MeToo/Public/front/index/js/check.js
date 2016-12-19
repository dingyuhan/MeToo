$(document).ready(function(){
            //检测用户名
            $('input[name="username"]').blur(function(){
                //1、创建错误信息节点
                var $error3 = $('<span class="red">用户名不能为空</span>');
                //2、连接节点到DOM树上
                if($(this).val() == ''){
                    //先删除原有的提示信息
                    $span = $('td:eq(1) span').remove();
                    //在链接节点
                    $('td:eq(1)').append($error3);
                }else{
                    $span = $('td:eq(1) span').remove();
                }
            });

            //检测密码
            $('input[name="password"]').blur(function(){
                var tmp=$(this).get(0).value;
                if(tmp.length==0){
                    //$span = $('tr:eq(1) span').remove();
                    $(this).next().remove();
                    var error=$("<span>密码不能为空</span>");
                    var pa=$(this).parent();
                    pa.append(error);
                }else{
                    $(this).next().remove();
                }
            })

            //检测确认密码
            $('input[name="repassword"]').blur(function(){
                var pwd=$('input[name="password"]').get(0).value;
                var repwd=$('input[name="repassword"]').get(0).value;
                if(pwd!=repwd){
                    $error2="<span>两次输入的密码不一致</span>";
                    $(this).parent().append($error2);
                }else{
                    $(this).next().remove();
                }
            })
        }); 