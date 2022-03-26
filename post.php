<?php


//Массив пользователей для сравнения пользователя с формы
$recordsUserData = array(
    array(
        'id' => 1,
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'doe@test.com',
    ),
    array(
        'id' => 2,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
        'email' => 'smith@test.com',
    ),
    array(
        'id' => 3,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
        'email' => 'jones@test.com',
    ),
    array(
        'id' => 4,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
        'email' => 'peter@test.com',
    )
);

//Параметр валидаций email
$sourceEmailValidation = '@';

$emailPostData = $_POST['email'];

//Если с формы в поле email есть символ @  true
$resultValidationEmail = strpos($emailPostData, $sourceEmailValidation);

$fileLog = 'log.txt';

//Если пароли одинаковы и email валиден продолжаем
if ($_POST['password'] === $_POST['secondPassword'] && $resultValidationEmail !== false) {
    //Если email есть в массиве делаем запись в лог файл
    if (in_array($_POST['email'], array_column($recordsUserData, 'email'))) {
        $successSearchUser = date('Y-m-d H:i:s') . ' пользователь найден' . PHP_EOL;
        file_put_contents($fileLog, $successSearchUser, FILE_APPEND);
        echo json_encode(true);
        //Если пользователя с таким email нету , делаем запись в лог файл
    } else {
        $unsuccessSearchUser = date('Y-m-d H:i:s') . ' пользователь не найден' . PHP_EOL;
        file_put_contents($fileLog, $unsuccessSearchUser, FILE_APPEND);
        header('HTTP/1.1 500 Internal Server');
        header('Content-Type: application/json; charset=UTF-8');
        die(json_encode("Пользователь не найден"));
    }
}


