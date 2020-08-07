$(".main_menu > ul > li > a").mouseover(function(){
    $(".sub_menu").stop().slideDown();
})

$(".sub_menu").mouseleave(function(){
    $(".sub_menu").stop().slideUp();
})