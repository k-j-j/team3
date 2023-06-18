$(function(){
    $(".hamburger" ).click(function(){
        $(".menu").animate({marginRight: "100%"},300);
    });
    
    $(".cross").click(function(){
        $(".menu").animate({marginRight:"0"},300);
    });

    $(".menu >ul >li> a").click(function(){
        if($(this).next().is(":visible")){
            $(this).next().stop().slideUp(500);
            $(this).children("i").attr("class","xi-plus");
            //if문일때 클릭하면 서브메뉴바 위로 올라감
            //a가 펼쳐져 있을때 누르면 서브메뉴바가 위로 올라감
            //실행시 닫혀져있으면 if(참)
        }else{
            $(".sub").stop().slideUp(500);
            $(".menu >ul >li> a").children("i").attr("class","xi-plus");
            $(this).next().stop().slideDown(500);
            $(this).find("i").attr("class","xi-minus");
            //펼쳐진 서브메뉴바를 클릭하면 올라가고, 화살표 이미지를 변경해줌
            //실행시 메뉴바 열려있으면 else(거짓)

            // 메뉴 클릭시 else문으로 돌아지면서 화살표 이미지 업으로 변경되고, 메뉴바 닫을때 슬라이드업으로 메뉴바 닫히면서 if문으로 돌아감
        }
    });
}); 