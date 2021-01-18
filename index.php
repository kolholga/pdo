<?php

//ТЕОРИЯ по MVC
/*
// MVC - способ организации кода, который предполагает выделение блоков,
            //отвечающих за решение различных здач - это класс
// Model - Модель - это компонент, отвечающий за данные (БД)
// View - Представление (вид) - это компонент, отвечающий за внешний вид и взаимодействие с пользователем
// Controller - Кортроллер - это компонент, отвечающий за связь между моделью и представлением
                    //- это класс, у него есть методы (экшены)
// Схема MVC: пользователь->view->router->controller->model->db->model->controller->view->пользователь
*/
/////////////////////////////////////////
//ТЕОРИЯ по PDO
/*
//https://www.php.net/manual/ru/book.pdo.php
// PDO - специальный модуль в PHP,
// который предоставляет удобный интерфейс для доступа к базам данных
// PDO - это класс
// обязательные аргументы:
// 1. dsn - это строка в формате:
//   <тип драйвера>:host=<хост>;dbname=<имя базы>
// 2. имя пользователя БД
// 3. пароль БД
*/

/*
try { //исключение
    $pdo = new PDO('mysql:host=localhost;dbname=pdo', 'root', 'root'); // объект подключения
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);



} catch (PDOException $e) {
    echo $e->getMessage();
    die();
}
*/

/*
$res = $pdo->query('SELECT * FROM `books`'); //выполняет запрос к БД

// $res->fetchAll() - возвращает массив из пришедших данных

//echo '<pre>';
//print_r($res->fetchAll(PDO::FETCH_ASSOC)); // атрибутом указываем тип данных, который нужно вернуть
//echo '</pre>';


//    print_r($res->fetch(PDO::FETCH_ASSOC)); // fetch() - возвращает только одну запись и СДВИГАЕТ указатель
//    print_r($res->fetch(PDO::FETCH_ASSOC));
//    var_dump($res->fetch(PDO::FETCH_ASSOC));
// напрашивается цикл while:
while ($arRes = $res->fetch(PDO::FETCH_ASSOC)) {
    echo 'Книга - ' . $arRes['title'] . '<br>';
    echo 'Автор - ' . $arRes['author'] . '<br>';
    echo '<br><hr><br>';
}

//$arr = PDO::getAvailableDrivers();

//echo '<pre>';
//print_r($arr);
//echo '</pre>';
*/

/*
$id = 2;
//$stm = $pdo->prepare("SELECT * FROM `books` WHERE `id` = ?"); //prepare - позволяет использовать плейсхолдер (в query - нельзя)
//$stm->execute([$id]);
$stm = $pdo->prepare("SELECT * FROM `books` WHERE `id` = :id AND `year` = :year"); // именованный плейсхолдер
$stm->execute([':id' => $id, ':year' => 2005]); // когда именованный плейсхолдер, то порядок не имеет значения

$res = $stm->fetch(PDO::FETCH_ASSOC);

print_r($res);

$cntUpdate = $pdo->exec("UPDATE `books` SET `year` = 2007  WHERE `id` = 1"); //Возвращает количество затронутых записей
var_dump($cntUpdate);
*/

echo __FILE__;

//echo '<pre>';
//print_r($_REQUEST);
//echo '</pre>';