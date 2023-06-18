	<div id="t_login">
  
	  
	  <?
    if(!$_SESSION['userid'] )
	{
?>
          <a href="index.html">HOME</a> | 
					<a href="login_form.php"><img src="img/icon_user_.png" alt="로그인" width="22"></a> | 
					<a href="member_form.php">회원가입</a> 
<?
	}
	else
	{
?>
		<a href="index.html">HOME</a> | 
		<?=$_SESSION['username']?> | 
		<a href="logout_ever.php">로그아웃</a> | 
		<a href="member_form_modify.php">정보수정</a> | 
		<a href="member_delete.php">회원탈퇴</a>
<?
	}
?>
	  
  </div>
  
