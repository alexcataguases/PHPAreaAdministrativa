<?php
session_start();
if((!isset ($_SESSION['clogin']) == true) and (!isset ($_SESSION['csenha']) == true))
{
  unset($_SESSION['clogin']);
  unset($_SESSION['csenha']);
  header('location:login.php');
  }
?>