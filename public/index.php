<?php
ob_start();
include __DIR__ . '/../vendor/autoload.php';
require_once __DIR__.'/../pimple/pimple.php';

use Acme\Presenters\PersonPresenter;
use Acme\Repositories\PdoPersonRepository;

//if( ! isset($_GET['username'])) {
//    die("Podaj użytkownika");
//}
//

//TODO: Dorobić mechanizm sesji
if($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $auth = new \Acme\Authenticator();

    if( ! $auth->authorizeUser($username, $password)) {
        echo "Not authorized";
        die();
    }

    $userRepo = new PdoPersonRepository();
    $user = $userRepo->findByUsernameOrFail($username);
    $presenter = new PersonPresenter($user);
    echo $presenter->printHtml();
    die();

} else {
    echo '<form method="POST">';
    echo '<input type="text" name="username">';
    echo '<input type="password" name="password">';
    echo '<input type="submit">';
    echo '</form>';
}
