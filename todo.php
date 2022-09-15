<?php
if($_SERVER['REQUEST_METHOD']==="POST")
{
    $enter=$_POST['todo'];
    echo "you entered $enter in the form";
}
?>