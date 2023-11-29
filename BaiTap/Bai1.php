<!DOCTYPE html>
<html>
<head>
    <title>Máy tính cầm tay</title>
</head>
<body>
    <h2>Caculator</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="num1" placeholder="Nhập số thứ 1">
    <input type="text" name="num2" placeholder="Nhập số thứ 2">
    <select name="operator">
        <option value="add">+</option>
        <option value="min">-</option>
        <option value="mul">*</option>
        <option value="div">/</option>
    </select>
    <input type="submit" value="=" name="equal">
    </form>

    <?php
    if(isset($_POST['equal'])){
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $op=$_POST['operator'];
        $res='';

        switch($op){
            case "add":
                $res=$num1+$num2;
                break;
            case "min":
                $res=$num1-$num2;
                break;
            case "mul":
                $res=$num1*$num2;
                break;
            case "div":
                if($num2!=0){
                    $res=$num1/$num2;
                }else{
                    echo "Không thể chia cho 0";
                }
        }

        echo"<p>Kết quả: $res</p>";
    }
    
    ?>
</body>
</html>