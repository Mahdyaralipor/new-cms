<?php
require_once 'functions.php';
function route_request() {
    $uri = $_SERVER['REQUEST_URI'];
    $uri = explode('?', $uri)[0];

    match ($uri) {
        '/' => render_template('index'),
        '/about-us' => render_template('about-us'),
        '/contact-us' => [
            render_controller('contact-us'),
            render_template('contact-us')
        ],
        default => {
            header('HTTP/1.0 404 Not Found');
            echo '404 Not Found';
        }
    }; break;
    }
}
