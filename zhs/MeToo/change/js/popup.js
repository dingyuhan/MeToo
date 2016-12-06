$(document).ready(function(){
    $('.two').click(function(){     
        $('.box3').show();      
    }); 	
    $('.login6 a').click(function(){                
        $('.box3').hide();      
    });

    $('.one').click(function(){     
        $('.box2').show();      
    });         
    $('.login5 a').click(function(){                
        $('.box2').hide();      
    });
    $('.box').easydrag();
});