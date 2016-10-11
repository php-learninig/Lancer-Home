<?php
(PDO::getAvailableDrivers()); // Просмотр всех PDO драйверов (какие БД поддерживает PDO на сервере)

/* Подключение к БД с помощью PDO */
// try/catch – всегда стоит оборачивать в него все свои PDO-операции и использовать механизм исключений
try {
    // $DBH расшифровывается как «database handle»
    $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
}
catch(PDOException $e) {
    echo "Возникла ошибка: " . $e->getMessage();
}
/* ============================== */

/* Закрываем подключение к БД путем переопределения его переменной в null */
$DBH = null;
/* ========================== */

/* Исключения и PDO */
// PDO умеет выбрасывать исключения при ошибках, поэтому все должно находиться в блоке try/catch. Сразу после создания подключения, PDO можно перевести в любой из трех режимов ошибок:
$DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT); // по умолчанию
$DBH->setAttribute(
    PDO::ATTR_ERRMODE,
    PDO::ERRMODE_WARNING
); // Этот режим вызовет стандартный Warning и позволит скрипту продолжить выполнение. Удобен при отладке.
$DBH->setAttribute(
    PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION
); // В большинстве ситуаций этот тип контроля выполнения скрипта предпочтителен. Он выбрасывает исключение, что позволяет вам ловко обрабатывать ошибки и скрывать щепетильную информацию
/* ================ */

/* Вставка новых данных: */
// STH означает "Statement Handle"
$STH = $DBH->prepare("INSERT INTO folks ( first_name ) values ( 'Cathy' )");
$STH->execute();
/*  END Вставка новых данных: */

/* Пример отловки ошибок */
try {
    $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    # Черт! Набрал DELECT вместо SELECT!
    $DBH->prepare('DELECT name FROM people')->execute();
}
catch(PDOException $e) {
    echo "Хьюстон, у нас проблемы.";
    file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);
}
/* END Пример отловки ошибок */