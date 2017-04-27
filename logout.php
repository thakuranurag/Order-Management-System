<?php
session_start();

$_session['abcd']=null;

if($_session['abcd']=null)
{
header("Location :http://localhost/MyFirstProject/viewAll.php");
}
?>