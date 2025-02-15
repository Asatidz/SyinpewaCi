<?php
session_start();
ob_start();

include "library/config.php";

if(empty($_SESSION['username']) OR empty($_SESSION['password'])) {
    echo "<p align='center'><h1>Anda Harus Login Sek Brohh!!</h1></p>";
    echo "<meta http-equiv='refresh' content='2; url=login.php'>";
}else{
    define('INDEX', true);

?>

<?php
}
?>