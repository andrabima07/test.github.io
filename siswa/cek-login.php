<?php
session_start();
if($_SESSION["status"] == ""){
    header("location:TOS1/index.php");
}
?>