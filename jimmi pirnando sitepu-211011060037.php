<!DOCTYPE html>
<html>
<head>
    <title>Program NFA</title>
</head>
<body>
    <h2>Program NFA</h2>
    <form method="post" action="">
        <label for="word">Masukkan kata:</label>
        <input type="text" id="word" name="word" required>
        <button type="submit">Cek</button>
    </form>
    <?php
    // Fungsi untuk memeriksa apakah kata diterima
    function checkWord($word)
    {
        // Mengecek apakah kata diterima oleh NFA
        if (preg_match('/^(a+b)b(a*)$/', $word)) {
            return "diterima";
        } else {
            return "tidak diterima";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $word = $_POST["word"];
        $result = checkWord($word);
        echo "<p>Kata: $word</p>";
        echo "<p>Hasil: $result</p>";
    }
    ?>
</body>
</html>
