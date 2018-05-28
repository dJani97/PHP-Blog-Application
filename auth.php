<?php
    $user='admin';
    $passwd='admin';
    if(!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) ||
    ($_SERVER['PHP_AUTH_USER']!=$user) || ($_SERVER['PHP_AUTH_PW']!=$passwd))
    {
    header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="Admin"');
    exit('<h1 class="text-center">401 - Azonosítás szükséges!</h1>
    <h3 class="text-center">Sajnálom, de ehhez a funkcióhoz be kell jelentkezned!</h3> <br><br>
    <h4 class="text-center">Mivel ez nem egy éles program, használd az <strong>admin</strong> / <strong>admin</strong> adatokat a belépéshez :)</>');
    }
?>