	<div id="t_login">
  
	  
	  <?
    if(!$_SESSION['userid'] )
	{
?>
	<a href="login_form.php">
		<img src="./H_img/icon3.png" alt="로그인 아이콘">
		<span class="text1">로그인</span>
	</a>
<?
	}
	else
	{
?>
		<?=$_SESSION['username']?> 
		<a href="logout_ever.php">로그아웃</a>
<?
	}
?>
	  
  </div>
  
