<?php
$id = $_GET['id'];

if ($id) {
    $mysqli = new mysqli("mysql", "tugboat", "tugboat", "tugboat");
    $result = $mysqli->query("select * from demo where id=$id");
    
    echo $result;
} else {
    echo 'OK';
}
