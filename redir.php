<?php
$ip = $_SERVER['REMOTE_ADDR'];

//the IP rank
if(preg_match("/192\.168\.[131|181|183]\.\d+/", $ip)){
        header('Location: https://www.github.com'); //redirection1
}else{
        header('Location: https://www.youtube.com'); //redirection2
}
?>
