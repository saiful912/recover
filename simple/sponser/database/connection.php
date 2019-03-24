<?php
try{
    $connection=new PDO('mysql:host=localhost;dbname=simple', 'root', '');
    $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
}catch (Exception $e){
    echo 'Something went wrong ! '.$e;
}