<?
 $connect=mysqli_connect( "localhost", "kangdot01", "kangjung1!") or  
        die( "SQL server에 연결할 수 없습니다."); 

    mysqli_select_db($connect,"kangdot01");

//  if ($conn->connect_error) {
// die("연결 실패 : " .$conn->connect_error); // 연결 실패 시 원인을 출력한다
//      } else {
//        echo "연결 성공"; // 연결 성공 시 웹 페이지 좌상단에 연결 성공이라는 문구를 출력한다
//      }


?>