<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);

    // Мәліметтерді файлға жазу
    $file = fopen("guests.txt", "a");
    fwrite($file, $name . "\n");
    fclose($file);

    echo "<h2>Рахмет, $name! Сіздің қатысуыңыз тіркелді.</h2>";
    echo "<a href='index.html'>Артқа қайту</a>";
}
?>
