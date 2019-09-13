<?php
$id = $_GET['id'];

if ($id) {
    $mysqli = new mysqli("mysql", "tugboat", "tugboat", "tugboat");
    $result = $mysqli->query("select data from demo where id=$id");
    $rows = $result->num_rows;

    if ($rows == 1) {
        echo $result->fetch_object()->data;
    } else {
	http_response_code(404);
	echo '404 - NOT FOUND';
    }
} else {
    echo '<a href="/index.php?id=1">GO</a>';
}
