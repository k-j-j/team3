<? 
	session_start(); 
?>
	<div id="t_login">
  
	  
	  <?
    if(!$_SESSION['userid'] )
	{
?>
	<a href="#"><img src="./H_img/cb_icon1.png" alt="icon"></a>
	<a href="login_form.php"><img src="./H_img/cb_icon2.png" alt="icon"></i></a>
	<a class="hamburger" href="#"><img src="./H_img/icon4.png" alt="icon"></i></a>
<?
	}
	else
	{
?>
	

	<?=$_SESSION['username']?> 
		<a href="logout_ever.php">로그아웃</a>
		<a href="#"><img src="./H_img/cb_icon1.png" alt="icon"></a>
		<a class="hamburger" href="#"><img src="./H_img/icon4.png" alt="icon"></i></a>
<?
	}
?>
	  
  </div>
  
