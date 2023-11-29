<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TÌm chòm sao</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="birthday">Enter your birthday:</label>
        <input type="date" name="birthday">
        <input type="submit" value="Find" name="submit">
    </form>

    <?php
        function getZodiacSign($dob) {
            $date = new DateTime($dob);
            $day = $date->format('d');
            $month = $date->format('m');
    
            if (($month == 3 && $day > 20) || ($month == 4 && $day < 20)) {
                return "Bạch Dương";
            } elseif (($month == 4 && $day > 19) || ($month == 5 && $day < 21)) {
                return "Kim Ngưu";
            } elseif (($month == 5 && $day > 20) || ($month == 6 && $day < 21)) {
                return "Song Tử";
            } elseif (($month == 6 && $day > 20) || ($month == 7 && $day < 23)) {
                return "Cự Giải";
            } elseif (($month == 7 && $day > 22) || ($month == 8 && $day < 23)) {
                return "Sư Tử";
            } elseif (($month == 8 && $day > 22) || ($month == 9 && $day < 23)) {
                return "Xử Nữ";
            } elseif (($month == 9 && $day > 22) || ($month == 10 && $day < 23)) {
                return "Thiên Bình";
            } elseif (($month == 10 && $day > 22) || ($month == 11 && $day < 22)) {
                return "Bọ Cạp";
            } elseif (($month == 11 && $day > 21) || ($month == 12 && $day < 22)) {
                return "Nhân Mã";
            } elseif (($month == 12 && $day > 21) || ($month == 1 && $day < 20)) {
                return "Ma Kết";
            } elseif (($month == 1 && $day > 19) || ($month == 2 && $day < 19)) {
                return "Bảo Bình";
            } else {
                return "Song Ngư";
            }
        }

        if(isset($_POST['submit'])){
            $birthday=$_POST['birthday'];
            $find=getZodiacSign($birthday);
            echo"<p>Chòm sao của bạn là: $find</p>";
        }
    
    ?>
    
</body>
</html>