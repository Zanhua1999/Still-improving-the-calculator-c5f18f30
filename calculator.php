<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>
<body>
<form  method="post">
    <table  align="center">
        <tr>
            <td  align="center">Eerste</td><td><input type="text" name="first"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="radio" name="operator" value="+">+
                <input type="radio" name="operator" value="-">-
                <input type="radio" name="operator" value="*">*
                <input type="radio" name="operator" value="/">/
            </td>
        </tr>
        <tr>
            <td  align="center">Tweede</td><td><input type="text" name="second"></td>
        </tr>
        <tr>
            <td> <input type="submit" value="submit"></td>
        </tr>
    </table>
</form>
<?php
header("content-type:text/html;charset=utf-8");
    $first=$_POST['first'];
    $second=$_POST['second'];
    $operator=$_POST['operator'];
    echo 'Resultaat:';
    if ( $operator == '+' )
    {
        echo $first+$second;
    }
    if($operator == '-')
    {
        echo $first-$second;
    }
    if($operator == '*')
    {
        echo $first*$second;
    }if($operator == '/')
    {
        echo $first/$second;
    }
    ?>
</body>
</html><br>