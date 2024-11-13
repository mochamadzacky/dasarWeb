<?php
if (session_status () === PHP_SESION_NONE)
session_start();
session_destroy();

header('location:index.php');