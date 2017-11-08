/**
 * Created by Administrator on 2017/10/13 0013.
 */
$(document).ready(function(){
    $(".yycg .right .rightT .xuanxiang").click(function(){
       var index=$(this).index();
        $(this).addClass("cur").siblings().removeClass("cur");
        $(this).parent().next().find(".box").eq(index).addClass("cur").siblings().removeClass("cur");
    });
});
