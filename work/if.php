<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="if.php" method="POST">
  Num1  <input type="text" name="num1">
    <br>
    OP: <input type="text" name="oper">
    <br>
  Num2  <input type="text" name="num2">
    <br>
    <input type="submit">
</form>

<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$oper = $_POST['oper'];

if($oper == "+"){
echo $num1 + $num2;
}elseif($oper =="-" ){
    echo $num1 - $num2;
}elseif($oper =="/" ){
    echo $num1 / $num2;
}elseif($oper =="*" ){
    echo $num1 * $num2;
}else{
    echo "Invalid operator";
}


?>
</body>
</html>




<?php
// $isMale = true;
// if($isMale){
//     echo "You are male";
// }else{
//     echo "you are not male";
// }
?>