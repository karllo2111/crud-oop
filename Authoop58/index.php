<?php
include("classes/user.php");

$db = new DB("localhost", "root", "", "Authoop58");

$user = new User("localhost", "root", "", "Authoop58");
var_dump($user->getAll());
var_dump($user->getById(1));
//$user->delete(1);
$user->update(1, [
    'name' => 'dika',
    'username' => 'rakaa',
    'password' => 'raka123'
]);

$user->create([
    'name' => 'pwt',
    'username' => 'rakaa',
    'password' => 'raka123'
]);

?>