<?php
session_start();

function authenticate($username, $password)
{
    $handle = fopen('users.txt', 'r');
    if ($handle) {
        while (($line = fgets($handle)) !== false) {
            $credentials = explode('|', $line);            
            if (trim($credentials[0]) == trim($username) && trim($credentials[1]) == trim($password)) {
                // Set session
                $_SESSION['user'] = $username;
                return true;
            }
        }
        fclose($handle);
    }
    return false;
}

function redirect($url, $statusCode = 303)
{
    header('Location: ' . $url, true, $statusCode);
    die();
}

function logout()
{
    session_start(); session_destroy();
    redirect('login.php');
}

function requiresAuthentication()
{
    if (!$_SESSION['user']) {
        logout();
    }
}

