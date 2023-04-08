<?php
require_once 'User.php';
require_once 'Task.php';
$user = new User('Никита', 'wildmrdefox@gmail.com', 24);
echo $user->getUsername() . '<br>';
echo $user->getEmail() . '<br>';
$user->setSex('Мужской');
echo $user->getSex() . '<br>';
echo $user->getAge() . '<br>';
echo $user->online() . '<br>';
echo $user->getTime() . '<br>';

$task = new Task('Сварить пельмений', $user);
$task->setDescription('Попить пива');
echo $task->getDescription() . '<br>';
echo $task->getDone() . '<br>';
// echo "Дата создание: $task -> getDateCreated()";
echo $task -> getDateCreated() . '<br>';
echo $task -> getDateUpdate() . '<br>';
echo $task->getDateDone() . '<br>';