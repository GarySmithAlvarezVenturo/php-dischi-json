<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
	$todos = file_get_contents('dischi.json');
	echo $todos;
}
