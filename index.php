<?php


require_once('index.view.php');
require_once('connection/connect.php');
require_once('database/QueryBilder.php');

$db = new QueryBilder($pdo);
$posts = $db->getAllPosts();
var_dump($posts);