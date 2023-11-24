<!DOCTYPE html>
<html>
<head>
    <title>Chuyển đổi ngoại tệ</title>
</head>
<body>
    <h2>Chuyển đổi ngoại tệ</h2>

    <form method="post" action="">
        <label for="amount">Số tiền:</label>
        <input type="text" id="amount" name="amount" required><br><br>

        <label for="from_currency">Từ:</label>
        <select id="from_currency" name="from_currency">
            <option value="USD">USD</option>
            <option value="EUR">EUR</option>
            <option value="GBP">GBP</option>
            <!-- Thêm các loại tiền tệ khác nếu cần -->
        </select><br><br>

        <label for="to_currency">Sang:</label>
        <select id="to_currency" name="to_currency">
            <option value="USD">USD</option>
            <option value="EUR">EUR</option>
            <option value="GBP">GBP</option>
            <!-- Thêm các loại tiền tệ khác nếu cần -->
        </select><br><br>

        <input type="submit" name="convert" value="Chuyển đổi">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["convert"])) {
        $amount = $_POST["amount"];
        $from_currency = $_POST["from_currency"];
        $to_currency = $_POST["to_currency"];

        // Thực hiện chuyển đổi ngoại tệ ở đây (có thể sử dụng API hoặc một tỷ giá cố định)
        // Đây chỉ là một ví dụ đơn giản, bạn cần thay đổi để chuyển đổi thực tế
        $conversion_rate = 1.2; // Tỷ giá từ USD sang EUR

        $result = $amount * $conversion_rate;
        echo "<br>Kết quả: " . $amount . " " . $from_currency . " = " . $result . " " . $to_currency;
    }
    ?>
</body>
</html>
