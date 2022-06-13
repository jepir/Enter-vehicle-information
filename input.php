<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>정보입력</title>
</head>
<body>
<form action="inputok.php" method="post">
<div>
차량번호<input type="text" name="num">
</div>
<div>
차주성명<input type="text" name="name"><br>
</div>
<div>
회사명
<input type="radio" name="brand" value="기아">기아
</div>
<div>
모델명
<select name="modelname">
    <option value="모닝">모닝</option>
    <option value="니로">니로</option>
    <option value="k3">k3</option>
    <option value="k5">k5</option>
    <option value="k8">k8</option>
    <option value="k9">k9</option>
    <option value="스포티지">스포티지</option>
    <option value="카니발">카니발</option>
    <option value="쏘렌토">쏘렌토</option>
    <option value="레이">레이</option>
</select>
</div>
<div>
<input type="submit">
</div>
</form>
</body>
</html>