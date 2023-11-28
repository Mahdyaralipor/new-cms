<?php
function render_template($template) {
    include(__DIR__ . '/../templates/' . $template . '.php');
}

function render_controller($controller) {
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        include(__DIR__ . '/../controller/' . $controller . 'Controller.php');
    }
}
function get_render_controller($controller) {
  
   include(__DIR__ . '/../controller/' . $controller . 'Controller.php');

}
function connection (){

    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'project';
    
    try {
    $connection = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die('اتصال به پایگاه داده ناموفق بود: ' . $e->getMessage());
    }

    return $connection;
}