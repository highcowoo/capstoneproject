<?php
	
	
	include "connect_db.php";
	

	$sql = "select *from user";                      
	$result = mysqli_query ($connect, $sql);          
	$count = mysqli_num_fields ($result);             
	

	$row_count = mysqli_num_rows($result);
	$usercnt = $row_count;
	
	$sql= "select * from volcontents";
	$result = mysqli_query ($connect, $sql); 
	$row_count = mysqli_num_rows($result);
	$volcnt=$row_count;
	
	$sql= "select * from user where voru='사용자'";
	$result = mysqli_query ($connect, $sql); 
	$row_count = mysqli_num_rows($result);
	$auser=$row_count;
	
	$sql= "select * from user where voru='봉사자'";
	$result = mysqli_query ($connect, $sql); 
	$row_count = mysqli_num_rows($result);
	$buser=$row_count;
	
	 
  
?>

<!doctype html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Helping</title>
 <meta name="description" content="ㅁㅁㅁ">
 <link rel="stylesheet" href="files/sub.css">
   <link rel="stylesheet" href="files/matching.css">
 <link rel="icon" type="image/png" href="files/smalllogo.png">
 </head>
<body>
<div id="home" class="big-bg">
 <header class="page-header wrapper">
  <h1><a href="blogmain.html"><br><img class="logo" src="files/mainlogo.svg" alt="사이트 홈"></a></h1>
  <nav>
   <ul class="main-nav">
   <li><a href="Guide.html">소개</a></li>
   <li><a href="voloruser.php">구인구직</a></li>
   <li><a href="Vinfor.php">봉사현황</a></li>
   <li><a href="Service.php">고객센터</a></li>
      <li><a href="informod.php">내정보</a></li>
   <li><a href="blogmain.html" onclick="alert('로그아웃 되었습니다');">로그아웃</a></li>
   
   

   </ul>
   </nav>
   </header>
<font size="4" >
	<div style= "font-size:3em; text-align:center;">봉사현황</div>
	<div style= "font-size:1.5em; text-align:center;"><li>
	총 회원 수는 
<?php
		echo "<B> $usercnt  </B>";
?>
	명 입니다.

	</li></div>
	<br>
		<div style= "font-size:1.5em; text-align:center;"><li>
	총 사용자 수는 
<?php
		echo "<B> $auser  </B>";
?>
	명 이고 총 봉사자 수는 
<?php
		echo "<B> $buser  </B>";
?>
 입니다.
	</li></div>
	<br>
	
			<ul>
				<li>
					<div style="text-align:center;">
						전체 봉사활동 건수 
						<?php echo "$volcnt"; ?>
						<span>건</span>
					</div> 
				</li>
			  
				
			</ul>
    
		<br>
	

	</body>
<br><br><br><br><br>
<hr>
<div style= "text-align:center;">고객문의 000-000-0000<BR><BR></div>
	
<div style= "text-align:center;"><font size="1" color=""><BR>@capston 8team helping</font></div>
</html>	
<br><br><br><br><br><br><br><br><br>
<hr>
             
             
