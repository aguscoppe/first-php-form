<?php
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $subject = $_POST["subject"];
        $mailFrom = $_POST["mail"];
        $message = $_POST["message"];

        $mailTo = "agustinacoppe_@hotmail.com";
        $headers = "From: bettina@jasoc.com.ar";
        $headers .= "Reply-To: $mailFrom";
        $txt = "You have received an e-mail from $name.\n\n $message";

        mail($mailTo, $subject, $txt, $headers);
        header("Location: index.php?mailsent");
    }
?>
