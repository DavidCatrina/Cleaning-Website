<?php 
    #check if form was submitted
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $emailFrom = $_POST['email'];
        $tel = $_POST['telephone'];
        $reason = $_POST['textreason'];
        $message = $_POST['textmessage'];
        $ckechbox = $_POST['mandatody-checkbox'];

        $mailTo = "contact@expert-clean.ro";
        $header = "From: <".$emailFrom.">";
        $txt = "Email de la:".$name." (".$emailFrom.") "."\n\n".$message;

        #Check for empty from inputs
        if (empty($name) || empty($emailFrom) || empty($tel) || empty($reason) || empty($message)) {
            header("Location: contact.php?form=empty");
            exit();
        }
        #Check for invalid name characters
        elseif (!preg_match("/^[a-zA-Z]*$/", $name)) {
            header("Location: contact.php?form=invalidName");
            exit();
        }
        #Validate email input
        elseif (!filter_var($emailFrom, FILTER_VALIDATE_EMAIL)) {
            header("Location: contact.php?form=invalidEmail");
            exit();
        }
        #Validate checkbox
        elseif (!isset($ckechbox)) {
            header("Location: contact.php?form=invalidCheckbox");
            exit();
        }
        else {
            mail($mailTo, $reason, $txt, $header);
            header("Location: contact.php?form=sent");
        }
        

    }

?>