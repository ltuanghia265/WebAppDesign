<!DOCTYPE html>
<html>
<head>
    <title>Trắc nghiệm tính cách</title>
</head>
<body>
    <h2>Trắc nghiệm tính cách</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <p>1. Bạn thích đọc sách?</p>
        <input type="checkbox" name="question1[]" value="introvert"> Rất thích
        <input type="checkbox" name="question1[]" value="ambivert"> Có phần thích
        <input type="checkbox" name="question1[]" value="extrovert"> Không thích
        
        <p>2. Bạn thường tự tin và dám nói trước đám đông?</p>
        <input type="checkbox" name="question2[]" value="introvert"> Không bao giờ
        <input type="checkbox" name="question2[]" value="ambivert"> Có khi nào
        <input type="checkbox" name="question2[]" value="extrovert"> Thường xuyên
        
        <!-- Thêm các câu hỏi khác tương tự -->

        <br><br>
        <input type="submit" name="submit" value="Xem kết quả">
    </form>

    <?php
    // Xử lý kết quả
    if(isset($_POST['submit'])){
        $result = array();
        
        if(isset($_POST['question1'])){
            $result = array_merge($result, $_POST['question1']);
        }
        if(isset($_POST['question2'])){
            $result = array_merge($result, $_POST['question2']);
        }
        // Thêm xử lý cho các câu hỏi khác tương tự
        
        // Phân tích kết quả và hiển thị tính cách
        $personality = determinePersonality($result);
        echo "<p>Tính cách của bạn: $personality</p>";
    }

    // Hàm phân tích kết quả
    function determinePersonality($result){
        // Đây chỉ là ví dụ đơn giản, bạn có thể ánh xạ kết quả với các đặc điểm tính cách
        
        $introvert = array_filter($result, function($value){
            return $value == 'introvert';
        });

        $extrovert = array_filter($result, function($value){
            return $value == 'extrovert';
        });

        if(count($introvert) > count($extrovert)){
            return "Introvert";
        } elseif(count($introvert) < count($extrovert)){
            return "Extrovert";
        } else {
            return "Ambivert";
        }
    }
    ?>
</body>
</html>
