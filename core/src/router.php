<?php
require_once 'functions.php';
function route_request() {
    $uri = $_SERVER['REQUEST_URI'];
    $uri = explode('?', $uri)[0];
    switch ($uri) {
        case '/':
            render_template('index');
            break;
        case '/about-us':
            render_template('about-us');
            break;
        case '/about-us':
            render_template('login');
            break;
        case '/contact-us':
            render_controller('contact-us');
            render_template('contact-us');
            break;
        default:
            header('HTTP/1.0 404 Not Found');
            echo '404 Not Found';
            break;
    }
}