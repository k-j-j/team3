<?
    session_start();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVERLAND_MEMBERSHIP</title>

    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/member.css">
    <link rel="stylesheet" href="./css/logo_everland2.css">
    <!-- <link rel="stylesheet" href="./css/everland_login_logo.css"> -->

    <script src="./js/jquery-1.11.2.min.js"></script>
    <!-- <script src="./js/member.js"></script> -->


    <script>
        function check_id(){
            window.open("check_id.php?id=" + document.member_form.id.value,
            "IDcheck",
            "left=200,top=200,width=200,height=60,scrollbars=no,resizable=yes");
        }

   
        function check_input(){
            // const re1 = /^[a-zA-Z0-9]{4,12}$/ ;  //가능하다
            const re1 =/^(?=.*[a-zA-Z])(?=.*[!@#$%^*+=-])(?=.*[0-9]).{6,10}$/;
            const id=document.member_form.id.value;
      
            if (!document.member_form.id.value){
                alert("아이디를 입력하세요");    
                document.member_form.id.focus();
                return;
            }else if(!re1.test(id)){
                alert("6~10자의 영문자,숫자를 혼합해서 사용할 수 있습니다");
                return false;
            }

      
            if (!document.member_form.pass.value){
                alert("비밀번호를 입력하세요");    
                document.member_form.pass.focus();
                return;
            }
      
            if (!document.member_form.pass_confirm.value){
                alert("비밀번호확인을 입력하세요");    
                document.member_form.pass_confirm.focus();
                return;
            }
      
            if (!document.member_form.name.value){
                alert("이름을 입력하세요");    
                document.member_form.name.focus();
                return;
            }
      
            if (!document.member_form.hp.value){
                alert("휴대폰 번호를 입력하세요");    
                document.member_form.hp.focus();
                return;
            }
      
            if (!document.member_form.birth.value){
                alert("생년월일을 입력하세요");    
                document.member_form.birth.focus();
                return;
            }
      
            if (!document.member_form.email.value){
                alert("Email을 입력하세요");    
                document.member_form.email.focus();
                return;
            }
      
            if (document.member_form.pass.value != 
            document.member_form.pass_confirm.value){
                alert("비밀번호가 일치하지 않습니다.\n다시 입력해주세요.");    
                document.member_form.pass.focus();
                document.member_form.pass.select();
                return;
            }

    
      
            //휴대전화번호 체크
            const hp1=document.member_form.hp.value;
            const re2= /^01([0|1|6|7|8|9])-?([0-9]{3,4})-?([0-9]{4})$/;
    
            if (!re2.test(hp1)) {
                alert('휴대전화번호를 다시 입력해주세요.'); 
                return false;
            }


    
            // 이메일 체크
    const email=document.member_form.email.value;
            //const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            //위의 식도 가능하다
    const re=/^[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,3}$/;
    
            if (!re.test(email)) {
                alert("@를 포함해서 입력해주세요");
                return false;
            }
            document.member_form.submit();
        }


        // function reset_form(){
        //     document.member_form.id.value = "";
        //     document.member_form.pass.value = "";
        //     document.member_form.pass_confirm.value = "";
        //     document.member_form.name.value = "";
        //     document.member_form.hp.value = "";
        //     document.member_form.birth.value = "";
        //     document.member_form.email.value = "";
        //     document.member_form.id.focus();
        //     return;
        // }
    </script>

</head>
<body>
    
    <!-- 접근성 건너뛰기 링크 -->
  <div class="skip">
    <a href="#gnb">메뉴 바로가기</a>
    <a href="#container">콘텐츠 바로가기</a>
  </div>

  <header id="header">
    <a href="login_form.php">
        <div class="prev">
            <img src="./img_icon/arrow_prev.png" alt="prev">
        </div>
    </a>
    <p>회원가입</p>
  </header>


  <!-- LOGO -->
  <div id="logo">
    <div class="container">
        <h1>EVERLAND</h1>
    </div>
  </div>




  <section id="member">
    <form action="insert.php" name="member_form" method="post" class="member">
        <div id="join">
            <div class="id">
                <input type="text" name="id" id="id" placeholder="아이디">

                <div id="id_check">
                    <a href="#" onclick="check_id()">중복 확인</a>
                </div>
            </div>

            

      <div class="pass">
                <input type="password" name="pass" id="pass" placeholder="비밀번호">
            </div>
            
            <div class="pass_confirm">
                <input type="password" name="pass_confirm" id="pass_confirm" placeholder="비밀번호">
            </div>
    
            <div class="name">
                <input type="text" name="name" id="name" placeholder="이름">
            </div>
    
            <div class="hp">
                <input type="tel" name="hp" id="hp" placeholder="연락처">
            </div>
    
            <div class="birth">
                <input type="date" name="birth" id="birth" placeholder="YYYY - MM - DD">
            </div>
    
            <div class="email">
                <input type="email" name="email" id="email" placeholder="E-mail">
            </div>

    
            <div id="agree">
                <input type="checkbox" name="agree" id="agree1">[필수] 에버랜드 이용약관
                <br>
                <input type="checkbox" name="agree" id="agree2">[필수] 전자상거래 이용약관
                <br>
                <input type="checkbox" name="agree" id="agree3">[필수] 개인정보 수집 및 활용 동의
    
                <div id="check">
                    <p>프로모션 수신 동의 (선택)</p>
                    <div> 
                        <input type="checkbox" name="mail" id="mail">이메일 수신 동의
                        <input type="checkbox" name="message" id="message">문자 수신 동의
                    </div>
                </div>
            </div>
   
    
            <div id="button">
                <!-- <input type="submit" value="회원가입" class="in" onclick="check_input()"> -->
                  <a href="#" onclick="check_input()">회원가입</a>
            </div>
        </div>

    </form>
  </section>



</body>
</html>