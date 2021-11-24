<?php
$idx = $_POST['idx'];
$upass = $_POST['upass'];

$url='localhost';
$id='test';
$pass='1111';
$db='testdb';
$conn=mysqli_connect($url,$id,$pass,$db);

$sql = "select * from kbread where upass = $idx";
$result=mysqli_query($conn,$sql);
//$count=mysqli_num_rows($result);

//for($i=0; $i<$count; $i++){
    //$re=mysqli_fetch_row($result);
    //echo "idx : ".$idx."<br>";
    echo "upass : ".$upass."<br>";
    if($upass!=$idx){   //$re[4]랑 비교?
        echo"<script>alert('비밀번호 불일치'); </script>";
        
    }
    else{
      echo "<script>alert('로그인 성공!');</script>";
      ?>

<!-- if//($upass != $idx){
    echo "<script>alert('비밀번호가 일치하지 않습니다');history.go(-1)</script>";
 
else //{
  echo "<script>alert('로그인 성공!');</script>";
-->
<!-- ?> -->

  <meta http-equiv="refresh" content="1;index.html"> 

<?php
    }
  //}
?>