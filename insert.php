<?
           session_start();
?>
<meta charset="utf-8">
	<?

  $id=$_POST['id'];
  $name=$_POST['name'];
  $pass=$_POST['pass'];
  $hp = $_POST['hp'];
  $birth=$_POST['birth'];
  $email = $_POST['email'];


//$ip = $REMOTE_ADDR;         // 방문자의 IP 주소를 저장

include "dbconn.php";       
mysqli_query($connect,'set names utf8');   

      $sql = "select * from join_ever where id='$id'";
   
      $result = mysqli_query( $connect,$sql);
      $exist_id = mysqli_num_rows($result);

      if($exist_id) {
        echo("
              <script>
                window.alert('해당 아이디가 존재합니다.')
                history.go(-1)
              </script>
            ");
            exit;
   }
   else
   {            // 레코드 삽입 명령을 $sql에 입력
	     $sql = "insert into join_ever (id, pass, name, hp, birth, email) ";
       $sql .=  "values('$id', '$pass', '$name', '$hp','$birth', '$email')";

     	mysqli_query( $connect,$sql);   // $sql 에 저장된 명령 
       echo mysqli_error($connect);
   }

   mysqli_close($connect);                       
   echo "
	   <script>
	    location.href = 'index.html';
	   </script>
	";
	

	?>