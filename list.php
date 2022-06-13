<?php
    include("./dbcon.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>차량목록</title>
</head>
<body>
<?php
$sql = "SELECT * FROM member";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $no = $row["sno"]; 
  ?>
  <a href="./delete.php?no=<?php echo $no;?>">삭제</a>
  <?php  
    echo " 차량번호: " . $row["snum"]. " - 차주성명: " . $row["sname"]. "- 회사명 :" . $row["sbrand"]."- 모델명 :" . $row["smodelname"];
  ?>
<a href="./update.php?no=<?php echo $no;?>">수정</a><br>
  <?php
  }
} else {
  echo "0 results";
}
mysqli_close($conn);
?>
<div>
<a href="./input.php">차량입력</a>
</div>


</body>
</html>