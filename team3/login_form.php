<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN_EverLand</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/everland_login_logo.css">
  
</head>
<body>

  <!-- 접근성 건너뛰기 링크 -->
  <div class="skip">
    <a href="#gnb">메뉴 바로가기</a>
    <a href="#container">콘텐츠 바로가기</a>
  </div>

  <header id="header">
    <a href="index.html">
    <div class="prev">
      <img src="img_icon/arrow_prev.png" alt="prev">
    </div>
    </a>
    <p>로그인</p>
  </header>
  

  <!-- LOGO -->
  <div id="logo">
    <div class="container">
      <!-- <img src="/img_everland/ever_logo.PNG" alt="logo"> -->
      <h1>EVERLAND</h1>
      <!-- <div id="jelly">
        <div class="blobs_1"></div>
        <div class="blobs_1_1"></div>
        <div class="blobs_2"></div>
        <div class="blobs_3"></div>
        <div class="blobs_3_1"></div>
        <div class="blobs_4"></div>
        <div class="blobs_5"></div>
        <div class="blobs_6"></div>
        <div class="blobs_7"></div>
        <div class="blobs_8"></div>
        <div class="blobs_9"></div>
      </div> -->
    </div>
  </div>


  
  <section id="login">
    <from action="login_ever.php" method="post" class="login">
      <div id="e_login">
        <div class="id">
          <input type="text" name="id" id="id" placeholder="아이디">
        </div>

        <div class="pw">
          <input type="password" name="password" id="pw" placeholder="비밀번호">
        </div>

        <div id="button">
          <input type="submit" value="로그인" class="in">
        </div>
      </div>
    </from>
  </section>

  <!-- 정보 찾기 및 회원가입 -->
  <nav id="join">
    <div id="member">
      <a href="id_screen.php">아이디 찾기</a>
      <a href="pw_screen.php">비밀번호 찾기</a>
      <a href="member_form.php">회원가입</a>
    </div>
  </nav>


  <!-- sns 간편 로그인 -->
  <nav id="sns">
    <p>간편 로그인</p>

    <ul id="sns_log">
      <li class="face">
        <a href="https://www.facebook.com/login.php?skip_api_login=1&api_key=350881091728723&kid_directed_site=0&app_id=350881091728723&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fv2.5%2Fdialog%2Foauth%3Fclient_id%3D350881091728723%26response_type%3Dcode%26redirect_uri%3Dhttps%253A%252F%252Fwww.everland.com%252Fmobile%252Flogin%252Ffacebook.el%26scope%3Demail%26state%3D1fbe3db9-48e1-44c3-8a49-b0914b3d780e%26ret%3Dlogin%26fbapp_pres%3D0%26logger_id%3D10c58502-62ff-443b-982b-2b17607953ed%26tp%3Dunspecified&cancel_url=https%3A%2F%2Fwww.everland.com%2Fmobile%2Flogin%2Ffacebook.el%3Ferror%3Daccess_denied%26error_code%3D200%26error_description%3DPermissions%2Berror%26error_reason%3Duser_denied%26state%3D1fbe3db9-48e1-44c3-8a49-b0914b3d780e%23_%3D_&display=page&locale=ko_KR&pl_dbl=0">
          <img src="img_icon/facebook.png" alt="facebook">
          <span>페이스북 로그인</span>
        </a>
      </li>

      <li class="kakao">
        <a href="https://accounts.kakao.com/login/?continue=https%3A%2F%2Fcs.kakao.com%2Fhelps%3Fcategory%3D25#login">
          <img src="img_icon/kakao.png" alt="kakao">
          <span>카카오톡 로그인</span>
        </a>
      </li>

      <li class="apple">
        <a href="https://appleid.apple.com/sign-in">
          <img src="img_icon/apple.png" alt="apple">
          <span>애플 로그인</span>
        </a>
      </li>
    </ul>
  </nav>


  <!-- <footer id="footer">
    <div>
      <span>에버랜드 리조트 소개</span>
      <span>이용약관</span>
      <span>CAST 참여</span>
      <span>사이트맵</span>
    </div>

    <div>
      <span>경기도 용인시 처인구 포곡읍 에버랜드로 199 삼성물산(주)</span>
    </div> 

    <div>
      <span>대표이사 : 정해린</span>
      <span>사업자 등록번호 : 135-85-04288</span>
    </div>

    <div>
      <span>통신판매업 신고번호 : 제2006-용인처인-0126호</span>
      <span>
        <a href="#">사업자정보 확인▶</a>
      </span>
    </div>

    <div>
      <span>
        <a href="#">손님상담센터</a>
        : 031-320-5000(유료)
      </span>
    </div>

    <div>
      <span><a href="#">개인정보처리방침</a></span>
      <span><a href="#">방침 개정 안내</a></span>
      <span><a href="#">입찰공고</a></span>
    </div>

    <p>
      Copyright ⓒ Samsung C&T Corporation. All rights reserved.
    </p>
  </footer> -->

</body>
</html>