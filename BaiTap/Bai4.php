<!DOCTYPE html>
<html>
<head>
    <title>Mô phỏng máy ATM</title>
</head>
<body>
    <h2>Mô phỏng máy ATM</h2>

    <?php
    $balance = 5000; // Số dư tài khoản giả định

    if(isset($_POST['withdraw'])){
        $amount = $_POST['amount'];

        if($amount > $balance) {
            echo "<p>Số dư không đủ. Vui lòng nhập số tiền hợp lệ.</p>";
        } else {
            $balance -= $amount;
            echo "<p>Bạn đã rút $amount VND. Số dư còn lại: $balance VND</p>";
        }
    }
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="amount">Nhập số tiền cần rút:</label>
        <input type="number" id="amount" name="amount" min="1">
        <input type="submit" name="withdraw" value="Rút Tiền">
    </form>

    <p>Số dư hiện tại: <?php echo $balance; ?> VND</p>
</body>
</html>
