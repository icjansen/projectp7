<?php
/**
 * Created by PhpStorm.
 * User: Iris
 * Date: 6-3-2018
 * Time: 15:34
 */

session_start();
session_destroy();
//header("Location: ". $_SESSION['url']);//redirect needed, otherwise the user will stay on logout.php!
header('Location: index.php');
exit();