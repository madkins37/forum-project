<?php 

require 'Mailer.php';

function newUserMail($toEmailAddress, $toUserName) {

return myMail($toEmailAddress, $toUserName, "Thanks for Registering, " .  $toUserName . "!", "Thanks for registering on our forum. We hope you enjoy your stay!");

}


function commentReplyMail($toEmailAddress, $toUserName, $threadID) {

return myMail($toEmailAddress, $toUserName, "You have a reply!", "Someone replied to a comment you made on " . $threadID . "! Go check it out!");

}



?>
