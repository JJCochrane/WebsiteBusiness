<?php

use Core\Router;

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . "Core/functions.php";

// Starts a session
session_start();
if(!isset($_SESSION['privilege_level'])){
    $_SESSION['privilege_level'] = 0;
}

spl_autoload_register(function ($class) {
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
    require base_path($class) . ".php";
});



require base_path("Core/Router.php");

require base_path("Core/bootstrap.php");
$router = new Router();
$routes = require base_path("routes.php");

// setting the URI (the address bar contents after the domain) to a local variable
$uri = parse_url($_SERVER["REQUEST_URI"])["path"];
// Using a post method with a _method arg allows for custom request methods
$method = $_POST['_method'] ?? $_SERVER["REQUEST_METHOD"];

$router->route($uri, $method);

// TODO: Allow tutors to authorise student accounts
// TODO: Tutors authorised by admin?
// TODO: Students can access files in courses
// TODO: Students can apply to enroll in a course and be approved by the tutor
// TODO: Students can only view courses they are enrolled in
// TODO: text files can be turned into quizzes
// TODO: __init__ SQL Tables
// TODO: Time restricted downloads for the students
// TODO: Quizzes can have various question types
// TODO: Students score is saved after they complete a quiz
// TODO: Option to prevent retaking the quiz
// TODO: Scores are viewable by the tutor
// TODO: Student has a progress bar indicating their knowledge of the course
// TODO: Use of AJAX

