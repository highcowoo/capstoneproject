<?php
session_start();
	$id = $_SESSION['id'];
	$time = $_POST['time'];
	$work = $_POST['work'];
	$location = $_POST['location'];
  if($id==null||$time==null||$work==null||$location==null){
	print "<script language=javascript> alert('빈칸이있습니다'); location.replace('User.html'); </script>";
}

	$connect = mysqli_connect('localhost',  'root', '123456');
	mysqli_select_db($connect, 'Login');
	
    /*  --------    PHP와 MySQL 한글 깨짐 방지  --------   */

	mysqli_query($connect, "set session character_set_connection=utf8;");		 
	mysqli_query($connect, "set session character_set_results=utf8;");		 
	mysqli_query($connect, "set session character_set_client=utf8;");		

	$sql="insert into umat (SeekerID ,SeekerTime ,VolunteerWork ,ServiceLocation) ";
	$sql.= "values('$id', '$time','$work','$location')";

	mysqli_query($connect, $sql) ;        //sql 질의 수행.
	mysqli_close($connect);                 //db 연결 종료
	
print "<script language=javascript> alert('구인 게시판 등록이 완료되었습니다.'); location.replace('alogmain.html'); </script>";

?>