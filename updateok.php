<?php
include("./dbcon.php");

$no = $_POST["no"];
$num = $_POST["num"];
$name = $_POST["name"];
$brand = $_POST["brand"];
$modelname = $_POST["modelname"];

$sql = "UPDATE member SET snum='$num', sname='$name', sbrand='$brand', smodelname='$modelname' WHERE sno=".$no;

if (mysqli_query($conn, $sql)) {
  echo "정보가 수정되었습니다.";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
<div>
<a href="./input.php">차량입력</a> 
<a href="./list.php">차량목록</a>
</div>