<!DOCTYPE html>
<html>
<head>
    <title>Phân trang đơn giản</title>
</head>
<body>
    <h2>Danh sách đơn giản</h2>

    <?php
    // Danh sách giả định
    $list = array(
        "Mục số 1", "Mục số 2", "Mục số 3", "Mục số 4", "Mục số 5",
        "Mục số 6", "Mục số 7", "Mục số 8", "Mục số 9", "Mục số 10"
    );

    
    $items_per_page = 4;

    // Xác định trang hiện tại
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

    // Tính chỉ số bắt đầu và chỉ số kết thúc của mục trên trang hiện tại
    $start_index = ($current_page - 1) * $items_per_page;
    $end_index = $start_index + $items_per_page - 1;

    // Hiển thị mục trên trang hiện tại
    for ($i = $start_index; $i <= $end_index; $i++) {
        if (isset($list[$i])) {
            echo "<p>" . $list[$i] . "</p>";
        }
    }

    // Tạo liên kết phân trang
    $total_pages = ceil(count($list) / $items_per_page);
    echo "<br><p>Trang: ";
    for ($page = 1; $page <= $total_pages; $page++) {
        echo "<a href='?page=$page'>$page</a> ";
    }
    echo "</p>";
    ?>

</body>
</html>
