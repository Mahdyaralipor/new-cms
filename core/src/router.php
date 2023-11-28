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
        case '/404':
            render_template('404');
            break;
        case '/single-project':
            render_controller('single-project');
            render_template('single-project');
            break;
        case '/single-page':
            render_controller('single-page');
            render_template('single-page');
            break;
        case '/sign-up':
            render_controller('sign-up');
            render_template('sign-up');
            break;
        case '/login':
            render_controller('login');
            render_template('login');
            break;
        case '/lost-password':
            render_controller('lost-password');
            render_template('lost-password');
            break;
        case '/manager':
            render_template('manager');
            break;
            case '/blog2':
                render_template('blog2');
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
        render_template('404');
        break;
    }
}