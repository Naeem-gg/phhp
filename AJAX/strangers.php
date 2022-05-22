<?php

$user=$_GET['user'];
if($user==="")
{
    echo "Stranger! plz enter your name";
}
elseif($user==="naeem")
{
    echo "Hello! master $user";
}
else{
    echo "I dont know you $user";
}

?>