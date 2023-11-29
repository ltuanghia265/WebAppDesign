<!DOCTYPE html>
<html>
<head>
    <title>Select Box Động</title>
</head>
<body>
    <h2>Chọn một lựa chọn:</h2>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="dynamic_select">Chọn một tùy chọn:</label>
        <select id="dynamic_select" name="dynamic_select">
            <?php
            // Mảng giả định, có thể đến từ cơ sở dữ liệu
            $options = array("Lựa chọn 1", "Lựa chọn 2", "Lựa chọn 3", "Lựa chọn 4");

            // Tạo các tùy chọn cho select box từ mảng dữ liệu
            foreach ($options as $option) {
                echo "<option value='$option'>$option</option>";
            }
            ?>
        </select>
        <input type="submit" name="submit" value="Chọn">
    </form>

    <?php
    // Xử lý dữ liệu khi form được submit
    if(isset($_POST['submit'])){
        $selected_option = $_POST['dynamic_select'];
        echo "<p>Bạn đã chọn: $selected_option</p>";
    }
    ?>

</body>
</html>
