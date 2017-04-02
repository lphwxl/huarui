// JavaScript Document

//定时器
function time(oImg,n,oIndex){
    timer = setInterval(function(){
        n++;
        if(n > 2){
            n = 0;
        }
        oImg.stop().fadeOut(1000);
        oImg.eq(n).stop().fadeIn(1000);
        oIndex.eq(n).css('background','#FF7700').siblings().css('background','#666');
    },2000);
}

window.onload=function(){
    var  oA = $('#cd-a').find('a');
    var oImg = $('#banner').find('img'),
        oIndex = $('#scroll_number').find('a'),
        n = 0;
    oA.hover(function(){
        $(this).addClass('bg_color');
    },function(){
        $(this).removeClass('bg_color');
    });
    oA.click(function(){
        $(this).addClass('bg_color');
    });
    time(oImg,n,oIndex);
    oIndex.hover(function(){
        clearInterval(timer);
        $(this).css('background','#FF7700').siblings().css('background','#666');
        oImg.stop().fadeOut(1000);
        n = $(this).index();
        oImg.eq($(this).index()).stop().fadeIn(1000) ;
    },function(){
         time(oImg,n,oIndex);
    });
};
