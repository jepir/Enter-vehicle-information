<?php
include("./dbcon.php");

$num = $_POST["num"];
$name = $_POST["name"];
$brand = $_POST["brand"];
$modelname = $_POST["modelname"];

$sql = "INSERT INTO member (snum, sname, sbrand, smodelname)
VALUES ('$num', '$name', '$brand','$modelname')";

if (mysqli_query($conn, $sql)) {
  echo "차량정보가 저장되었습니다.";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>

<div>
<a href="./input.php">차량입력</a> 
<a href="./list.php">차량목록</a>
</div>
