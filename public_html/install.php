<?php
require '../bootloader.php';

$fileDB = new FileDB(DB_FILE);

$fileDB->createTable('users');
$fileDB->insertRow('users', ['email'=>'test@gmail.com', 'password' => 'test']);
$fileDB->createTable('items');
$fileDB->save();