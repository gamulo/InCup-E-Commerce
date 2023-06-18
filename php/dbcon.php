<?php
session_start();

// initializing variables
$email = "";
$password = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'incup_1');

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password1 = mysqli_real_escape_string($db, $_POST['password']);
    $cpassword1 = mysqli_real_escape_string($db, $_POST['cpassword']);

    if ($password1 != $cpassword1) {
        array_push($errors, "The two passwords do not match");
    }

    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM account WHERE email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['email'] === $email) {
            array_push($errors, "email already exists");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password1); //encrypt the password before saving in the database

        $query = "INSERT INTO account (email, password) 
  			  VALUES('$email', '$password')";
        mysqli_query($db, $query);
        $_SESSION['email'] = $email;
        $_SESSION['success'] = "You are now logged in";
        header('location: main.php');
    }
}

// LOGIN USER
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM account WHERE email='$email' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['email'] = $email;
            header('location: main.php');
        } else {
            array_push($errors, "Wrong Email/password combination");
        }
    }
}