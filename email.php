<?php

$to ="alikawsar20147338@gmail.com";
$subject = "Approval message from library Management system";
$txt = "You are approved...Welcome to our library Management system.";
if(mail($to,$subject,$txt, 'From: farjana.sumona94@gmail.com')){
echo "send mail";
}
else {

  echo "not send";
}

?>
