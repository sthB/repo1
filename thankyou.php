<?php

$name = $_POST['name'];
$email= $_POST['email'];
$txt= $_POST ['message'];
$to = "bimalshr@gmail.com";
$subject= "ArtPage";

mail ( $to,$subject,$txt);
echo " Message Sent! Thank you for visiting my page!";

?>