$(document).ready(function()
	{
    
	$('body').on("click",'.heart',function()
    {
    	
    	var A=$(this).attr("id");
		if(A==='like2'){
			console.log(A);
			var B=A.split("like");
			console.log(B);
			var messageID=B[1];
			var C=parseInt($("#likeCount"+messageID).html());
			console.log(C);
			console.log($("#likeCount"+messageID).html());
			$(this).css("background-position","");
			var D=$(this).attr("rel");
			console.log(D);
			if(D === 'like') 
			{      
			$("#likeCount"+messageID).html(C+1);
			$(this).addClass("heartAnimation").attr("rel","unlike");
			
			}
			else
			{
			$("#likeCount"+messageID).html(C-1);
			$(this).removeClass("heartAnimation").attr("rel","like");
			$(this).css("background-position","left");
			}
		}
		if(A==='liker2'){
			console.log(A);
			var B=A.split("liker");
			console.log(B);
			var messageID=B[1];
			var C=parseInt($("#likerCount"+messageID).html());
			console.log(C);
			console.log($("#likerCount"+messageID).html());
			$(this).css("background-position","");
			var D=$(this).attr("rel");
			console.log(D);
			if(D === 'liker') 
			{      
			$("#likerCount"+messageID).html(C+1);
			$(this).addClass("heartAnimation").attr("rel","unliker");
			
			}
			else
			{
			$("#likerCount"+messageID).html(C-1);
			$(this).removeClass("heartAnimation").attr("rel","liker");
			$(this).css("background-position","left");
			}
		}
		if(A==='love2'){
			console.log(A);
			var B=A.split("love");
			console.log(B);
			var messageID=B[1];
			var C=parseInt($("#loveCount"+messageID).html());
			console.log(C);
			console.log($("#loveCount"+messageID).html());
			$(this).css("background-position","");
			var D=$(this).attr("rel");
			console.log(D);
			if(D === 'love') 
			{      
			$("#loveCount"+messageID).html(C+1);
			$(this).addClass("heartAnimation").attr("rel","unlove");
			
			}
			else
			{
			$("#loveCount"+messageID).html(C-1);
			$(this).removeClass("heartAnimation").attr("rel","love");
			$(this).css("background-position","left");
			}
		}
		if(A==='lover2'){
			console.log(A);
			var B=A.split("lover");
			console.log(B);
			var messageID=B[1];
			var C=parseInt($("#loverCount"+messageID).html());
			console.log(C);
			console.log($("#loverCount"+messageID).html());
			$(this).css("background-position","");
			var D=$(this).attr("rel");
			console.log(D);
			if(D === 'lover') 
			{      
			$("#loverCount"+messageID).html(C+1);
			$(this).addClass("heartAnimation").attr("rel","unlover");
			
			}
			else
			{
			$("#loverCount"+messageID).html(C-1);
			$(this).removeClass("heartAnimation").attr("rel","lover");
			$(this).css("background-position","left");
			}
		}
		if(A==='loverr2'){
			console.log(A);
			var B=A.split("loverr");
			console.log(B);
			var messageID=B[1];
			var C=parseInt($("#loverrCount"+messageID).html());
			console.log(C);
			console.log($("#loverrCount"+messageID).html());
			$(this).css("background-position","");
			var D=$(this).attr("rel");
			console.log(D);
			if(D === 'loverr') 
			{      
			$("#loverrCount"+messageID).html(C+1);
			$(this).addClass("heartAnimation").attr("rel","unloverr");
			
			}
			else
			{
			$("#loverrCount"+messageID).html(C-1);
			$(this).removeClass("heartAnimation").attr("rel","loverr");
			$(this).css("background-position","left");
			}
		}
		if(A==='llover2'){
			console.log(A);
			var B=A.split("llover");
			console.log(B);
			var messageID=B[1];
			var C=parseInt($("#lloverCount"+messageID).html());
			console.log(C);
			console.log($("#lloverCount"+messageID).html());
			$(this).css("background-position","");
			var D=$(this).attr("rel");
			console.log(D);
			if(D === 'llover') 
			{      
			$("#lloverCount"+messageID).html(C+1);
			$(this).addClass("heartAnimation").attr("rel","unllover");
			
			}
			else
			{
			$("#lloverCount"+messageID).html(C-1);
			$(this).removeClass("heartAnimation").attr("rel","llover");
			$(this).css("background-position","left");
			}
		}
		if(A==='loover2'){
			console.log(A);
			var B=A.split("loover");
			console.log(B);
			var messageID=B[1];
			var C=parseInt($("#looverCount"+messageID).html());
			console.log(C);
			console.log($("#looverCount"+messageID).html());
			$(this).css("background-position","");
			var D=$(this).attr("rel");
			console.log(D);
			if(D === 'loover') 
			{      
			$("#looverCount"+messageID).html(C+1);
			$(this).addClass("heartAnimation").attr("rel","unloover");
			
			}
			else
			{
			$("#looverCount"+messageID).html(C-1);
			$(this).removeClass("heartAnimation").attr("rel","loover");
			$(this).css("background-position","left");
			}
		}
		if(A==='loverrr2'){
			console.log(A);
			var B=A.split("loverrr");
			console.log(B);
			var messageID=B[1];
			var C=parseInt($("#loverrrCount"+messageID).html());
			console.log(C);
			console.log($("#loverrrCount"+messageID).html());
			$(this).css("background-position","");
			var D=$(this).attr("rel");
			console.log(D);
			if(D === 'loverrr') 
			{      
			$("#loverrrCount"+messageID).html(C+1);
			$(this).addClass("heartAnimation").attr("rel","unloverrr");
			
			}
			else
			{
			$("#loverrrCount"+messageID).html(C-1);
			$(this).removeClass("heartAnimation").attr("rel","loverrr");
			$(this).css("background-position","left");
			}
		}
		if(A==='lllover2'){
			console.log(A);
			var B=A.split("lllover");
			console.log(B);
			var messageID=B[1];
			var C=parseInt($("#llloverCount"+messageID).html());
			console.log(C);
			console.log($("#llloverCount"+messageID).html());
			$(this).css("background-position","");
			var D=$(this).attr("rel");
			console.log(D);
			if(D === 'lllover') 
			{      
			$("#llloverCount"+messageID).html(C+1);
			$(this).addClass("heartAnimation").attr("rel","unlllover");
			
			}
			else
			{
			$("#llloverCount"+messageID).html(C-1);
			$(this).removeClass("heartAnimation").attr("rel","lllover");
			$(this).css("background-position","left");
			}
		}


    });


	});