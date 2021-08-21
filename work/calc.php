<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="calc.php" method="get">
        <input type="text" name="num1">
        <br>
        <input type="text" name="num2">
        <br>
        <input type="submit">
    </form>

    <?php
    Answer: echo $_GET['num1'] + $_GET['num2'];
    ?>
    
</body>
</html>