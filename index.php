<?php


require_once('connection/Connection.php');
require_once('database/QueryBilder.php');

$pdo = Connection::make();

$db = new QueryBilder($pdo);
$posts = $db->getAllPosts();
require_once('index.view.php');





