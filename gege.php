<?php
$password = "123";
$password2 = readline("Введите пароль:");
if ($password === $password2) {
    echo "true";
} else {
    echo "false";
}
