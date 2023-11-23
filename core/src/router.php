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
        case '/service':
            render_template('service');
            break;            
        case '/contact-us':
            render_controller('contact-us');
            render_template('contact-us');
            break;
            case '/login':
                render_template('login');
                break;
            case '/project':
                render_template('project');
                break;
            case '/question':
                render_template('question');
                break;
            case '/blog':
                render_template('blog');
                break;
        default:
            header('HTTP/1.0 404 Not Found');
            echo '404 Not Found';
            break;
    }
}