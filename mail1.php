<?php

$to = $_POST['to'];
$form = $_POST['form'];

$header = "form: $form";
$subject = $_post['subject'];
$body = $_POST['body'];

mail($to,$subject,$body,$header);

echo "Email sent";


?>