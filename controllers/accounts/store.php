<?php

use Core\Database\AccountManager;

$errors = AccountManager::register([
    "email" => $_POST['email'],
    "password" => $_POST['password'],
    "privilegeLevel" => $_POST['privilegeLevel']]);

if($errors) {
    // failed validation
    load_view('accounts/register.view.php', [
        'heading' => 'Add a Course',
        'errors' => $errors
    ]);
}


redirect("/account?id={$_SESSION['user_id']}");
