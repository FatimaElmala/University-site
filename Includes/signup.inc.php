<?php

if(isset($_POST["submit"]))
{
    $email = $_POST["email"];
    $name = $_POST["name"];
    $username = $_POST["username"];
    $pwd = $_POST["pass"];
    $pwdRepeat = $_POST["pass2"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (invalidUid($username) !== false)
    {
        header("location: ../signup.php?error=invaliduid");
        exit();
    }
    if (invalidEmail($email) !== false)
    {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }

    if (PwdMatch($pwd, $pwdRepeat) !== false)
    {
        header("location: ../signup.php?error=passworddonotmatch");
        exit();
    }

    if (uidExists($conn, $username, $email) !== false)
    {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $name, $email, $username, $pwd);



}
else
{
    header("location: ../signup.php");
}