<?php
    include("./dbcon.php");

    $no = $_GET["no"];


    $sql = "SELECT * FROM member where sno=".$no;
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
  $numprt = $row["snum"]; 
  $nameprt = $row["sname"];
  $majorprt = $row["sbrand"];
  $addrprt = $row["smodelname"];
  }
} else {
  echo "0 results";
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>차량정보수정</title>
</head>
<body>
<form action="updateok.php" method="post">
<input type="hidden" name="no" value="<?php echo $no; ?>">
<div>
차량번호<input type="text" name="num" value="<?php echo $numprt; ?>">
</div>
<div>
차주성명<input type="text" name="name" value="<?php echo $nameprt; ?>"><br>
</div>
<div>
회사명
<input type="radio" name="brand" value="기아" <?php if($majorprt == "기아") echo "checked"; ?> >기아
</div>
<div>
모델명
<select name="modelname">
    <option value="모닝"<?php if($addrprt == "모닝") echo "selected"; ?>>모닝</option>
    <option value="니로"<?php if($addrprt == "니로") echo "selected"; ?>>니로</option>
    <option value="k3"<?php if($addrprt == "k3") echo "selected"; ?>>k3</option>
    <option value="k5"<?php if($addrprt == "k5") echo "selected"; ?>>k5</option>
    <option value="k8"<?php if($addrprt == "k8") echo "selected"; ?>>k8</option>
    <option value="k9"<?php if($addrprt == "k9") echo "selected"; ?>>k9</option>
    <option value="스포티지"<?php if($addrprt == "스포티지") echo "selected"; ?>>스포티지</option>
    <option value="카니발"<?php if($addrprt == "카니발") echo "selected"; ?>>카니발</option>
    <option value="쏘렌토"<?php if($addrprt == "쏘렌토") echo "selected"; ?>>쏘렌토</option>
    <option value="레이"<?php if($addrprt == "레이") echo "selected"; ?>>레이</option>
</select>
</div>
<div>
<input type="submit" value="수정">
</div>
</form>

</body>
</html>