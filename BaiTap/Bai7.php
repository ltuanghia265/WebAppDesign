<!DOCTYPE html>
<html>
<head>
    <title>Chuyển số thành chữ</title>
</head>
<body>
    <h2>Chuyển số thành chữ</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="number">Nhập số cần chuyển:</label>
        <input type="number" id="number" name="number">
        <input type="submit" name="submit" value="Chuyển đổi">
    </form>

    <?php
    function numberToWords($number) {
        $words = array(
            '', 'một', 'hai', 'ba', 'bốn', 'năm', 'sáu', 'bảy', 'tám', 'chín'
        );
        $unit = array('', 'mươi', 'trăm', 'nghìn', 'triệu', 'tỷ');
        $result = '';

        $number = (string)$number;
        $number = str_pad($number, ceil(strlen($number) / 3) * 3, '0', STR_PAD_LEFT);
        $numberParts = str_split($number, 3);

        foreach ($numberParts as $part) {
            $part = (int)$part;
            $temp = '';

            for ($i = 0; $i < 3; $i++) {
                $digit = (int)($part % 10);
                if ($digit !== 0) {
                    $temp = $words[$digit] . ' ' . $unit[$i] . ' ' . $temp;
                }
                $part = (int)($part / 10);
            }

            $result = trim($temp . ' ' . $result);
        }

        return $result;
    }

    if(isset($_POST['submit'])){
        $number = $_POST['number'];
        $word = numberToWords($number);
        echo "<p>Số $number thành chữ: $word</p>";
    }
    ?>
</body>
</html>
