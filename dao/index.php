<?php
require_once 'config.php';

// $user = new Usuario();
// $user->loadById(3);
// echo $user;

// $list = Usuario::getList();
// echo json_encode($list);

// $search = Usuario::search("Tes");
// echo json_encode($search);

// $login = new Usuario();
// $login->login("admin", "123456");
// echo $login;

// $student1 = new Usuario();
// $student1->setDeslogin("student1");
// $student1->setDessenha("11223344");
// $student1->insert();
// echo $student1;

// $student2 = new Usuario("student2", "231231231");
// $student2->insert();
// echo $student2;

// $guest = new Usuario();
// $guest->loadById(3);
// $guest->update($guest->getDeslogin(), "123456");
// echo $guest;

$student = new Usuario();
$student->loadById(5);
$student->delete();
echo $student;

?>
