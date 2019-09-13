<?php
$id = $_GET['id'];

if ($id) {
    $mysqli = new mysqli("mysql", "tugboat", "tugboat", "tugboat");
    $result = $mysqli->query("select * from demo where id=$id");
    $rows = $result->num_rows;

    if ($rows > 0) {
	echo 'OK';
    } else {
	http_response_code(404);
	echo '404 - NOT FOUND';
    }
} else {
    echo '<a href="/index.php?id=1">GO</a>';
}
