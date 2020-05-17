<?php
if($_POST["message"]) {
    mail("Crossroads@packapeer.com", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>