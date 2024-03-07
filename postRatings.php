<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["rating"])) {
        $rating = $_POST["rating"];
        // Логика обработки оценки

        // Сохранение оценки в файл
        $file = fopen("ratings.txt", "a");
        fwrite($file, $rating . "\n");
        fclose($file);
        header('Location: index.php');
        exit;
    } else {
        echo "Error: Rating is not set";
    }
} else {
    echo "Error: Invalid request method";
}
?>
