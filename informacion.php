<?php
session_start();

echo '<h1>informacion</h1>';
echo '<li>nombre:' . $_SESSION["nombre"] . '</li>';
echo '<li>email:' . $_SESSION["email"] . '</li>';
echo '<li>edad:' . $_SESSION["edad"] . '</li>';
echo '<li>pais:' . $_SESSION["pais"] . '</li>';
?>