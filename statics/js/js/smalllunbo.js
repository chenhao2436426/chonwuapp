/**
 * Created by Administrator on 2017/9/13 0013.
 */

$(document).ready(function(){



    var TuImg=$(".zuolunbo ul li");
    var n=0;
    for(var i=0;i<TuImg.length;i++){
        if(i==0){
            $(".zuolunbo .pagNav").append("<a class='cur'></a>");
        }else{
            $(".zuolunbo .pagNav").append("<a></a>")
        }
    }
    $(".zuolunbo .pagNav a").click(function(){
        var index=$(this).index();
//            $(this).parent().siblings("ul").children("li").eq(index).addClass("cur").siblings().removeClass("cur");
        n=index;
        $(this).addClass("cur").siblings().removeClass("cur");
        $(this).parent().siblings("ul").children("li").eq(n).fadeIn(1000).siblings().fadeOut(1000);
//            $(this).siblings(".pagNav").children("a").eq(n).addClass("cur").siblings().removeClass("cur")
    });

    $(".zuolunbo .left").click(function(){
        n--;
        if(n<0){
            n=TuImg.length-1;
        }
        TuImg.eq(n).fadeIn(1000).siblings().fadeOut(1000);
        $(".zuolunbo .pagNav").children("a").eq(n).addClass("cur").siblings().removeClass("cur");
    });
    $(".zuolunbo .right").click(function(){
        n++;
        if(n>TuImg.length){
            n=0;
        }
        TuImg.eq(n).fadeIn(1000).siblings().fadeOut(1000);
        $(".zuolunbo .pagNav").children("a").eq(n).addClass("cur").siblings().removeClass("cur");
    });
    function lunbo(){
        $(".zuolunbo .right").click();
    }
    var t=setInterval(lunbo,2000);
    $(".zuolunbo").hover(function() {
        clearInterval(t);
    },function(){
        t=setInterval(lunbo,2000);
    });
});
